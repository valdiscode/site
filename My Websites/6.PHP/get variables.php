<?php
              
           // GET Variable

           if ($_GET["submit"]) {
             
                if ($_GET["name"]) {
               
                     echo "Your name is ".$_GET['name'];
                } else {
                    
                    echo "Please enter your name";
                }
           
           }
             
            
          
            ?>
            

<!DOCTYPE html>
<meta charset="utf-8">

<html>
    <head>
        <title>GET Variables</title>
    </head>
    <body>
        <div>
            
           
            <form>
                <label for="name">Name</label>
                <input name="name" type="text">
                    
                <input type="submit" name="submit" value="Submit Your Name">
                
            </form>
        </div>    
    </body>
</html>


