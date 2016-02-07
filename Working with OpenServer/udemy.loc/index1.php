<?php
    
    mysqli_connect("localhost", "root", " ", "myBase"); 
    
    if (mysqli_connect_error()) {
        die("Could not connect to database");
    }
?>