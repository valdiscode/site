<!DOCTYPE html>
<meta charset="utf-8">

<html>
    <head>
        <title>Sending Email</title>
    </head>
    <body>
        <div>
           <?php
                
           // Sending Email With PHP-Отправка на e-mail С PHP
               $emailTo="";
               $subject="I hope this works!";
               $body="I think you`re great";
               $headers="From: lebed8989@mail.ru";
               
               if (mail($emailTo, $subject, $body, $headers)) {
                   
                   echo "Mail sent successfully!";
                   
               } else {
                   
                   echo "Mail not sent!";
               }   
               
            ?>
        </div>    
    </body>
</html>


