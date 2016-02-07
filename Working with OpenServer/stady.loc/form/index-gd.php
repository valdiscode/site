
<?php


//ini_set('display_errors',1);
//error_reporting(E_ALL);
  
//Работа с базой данных

session_start();

$_SESSION['loginid']=1;

echo $_SESSION['loginid'];



/*
	$mysqli = new mysqli ("localhost", "root", "", "myBase");
	
         if (mysqli_connect_error()) {
        die("Could not connect to database");
    }
    
    //$query = "INSERT INTO 'user' ('name', 'email', 'password') VALUES('Ian', '333', '6666')";
      
    
    
    
    $query = "SELECT * FROM user";
    
    if ($result=mysqli_query($mysqli, $query)) {
        
        while ($result=mysqli_fetch_array($result)) {
            print_r($row);
        }
        
    
    } else {
        
        echo "It failed";
    }
 * 
 */
       

?>