<?php

    session_start();

    if ($_POST['submit']) {
        
        if (!$_POST['email']) $error.="<br>Please enter your email";
            else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br>Please enter a valid email address";
    
            if (!$_POST['password']) $error.="<br>PLease enter your password";
                else {
            
            if (strlen($_POST['password'])<8) $error.="<br>Please enter a password with at least 8 characters";
            
            if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br>Plese include at least one capital letter in your password";
            
            }
            
            if ($error) echo "There were error(s) in your signup details:".$error;
            else {
                
                $link = mysql_connect("127.0.0.1", "myBase", "", "myBase");
                
                $query="SELECT * FROM users WHERE email='".mysql_real_escape_string($link, $_POST['email'])."'";
                    
                $result = mysql_query($link, $query);
                    
               $results = mysql_num_rows($result);
               
               if ($result) echo "That email address is already registered. Do you want to log in?";
               else {
                   $query="INSERT INTO 'users' ('email', 'password') VALUES('".mysql_real_escape_string($link, $_POST['email'])."', md5(md5($_POST['email']).$_POST['password']).")";
                       
                    mysql_query($link,$query);
                        
                    echo "You been signed up";
                        
                    $_SESSION['id']=mysql_insert_id($link);

               }
                
            }
    
    }

?>

<form method="post">
    
    <input type="email" name="email" id="email">   
    <input type="password" name="password">
    <input type="submit" name="submit" value="Sign Up">
    
</form>