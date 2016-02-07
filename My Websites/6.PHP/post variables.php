<?php             
           // POST Variable

            $names=array("Fred", "Rob", "Ian");

           if ($_POST["submit"]) {
             
                if ($_POST["name"]) {
               
                    foreach ($names as $name) {
                        
                        if ($_POST["name"]==$name) {
                            
                            echo "I know you! Your name is ".$name;
                            
                            $knowYou=1;
                        }                        
                    }
                    
                    if (!$knowYou) echo "I don`t know you, ".$_POST['name'];
                    
                } else {
                    
                    echo "Please enter your name";
                }
           
           }
            ?>
<!DOCTYPE html>
<meta charset="utf-8">

<html>
    <head>
        <title>POST Variables</title>
    </head>
    <body>
        <div>                      
            <form method="post">
                <label for="name">Name</label>
                <input name="name" type="text">
                    
                <input type="submit" name="submit" value="Submit Your Name">                
            </form>
        </div>    
    </body>
</html>




