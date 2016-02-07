<?php
  
?>


<!DOCTYPE html>
<meta charset="utf-8">
<html>
    <head>
        <title>Weather Scraper</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  
    <style>
        
        html, body {
            height: 100%;
        }
        
        .container {
            background-image: url("background2.jpg");
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            padding-top: 100px;
        }
        
        .center {
            text-align: center;
        }
        
        .white {
            color: white;
        }
        
        p {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        
        button {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        .alert {
            margin-top: 20px;
            display: none;
        }
        
        .whiteBackground {
            background-color: white;
            padding: 20px;
            border-radius: 20px;
        }
        
    </style>

    </head>
    <body>
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-6 col-md-offset-3 center whiteBackground">
                    
                    <h1 class="center">Postcode Finder</h1>
                    
                    <p class="lead center">Enter any address to find the postcode.</p>
                    
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Eg. 63 Fake Street, Faketown">
                        </div>
                        <button id="findMyPostcode" class="btn btn-success btn-lg">Find Postcode</button>
                    </form>
                    
                    <div id="success" class="alert alert-success">Success!</div>
                    
                    <div id="fail" class="alert alert-danger">Could not find postcode for that address. Please try again!</div>
                    
                     <div id="fail2" class="alert alert-danger">Could not connect to server. Please try again!</div>
                    
                </div>
                
            
                
            </div>
            
        </div>
        
        
        
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
       
        <script>
            
            $("#findMyPostcode").click(function(event) {
                
                var result=0;
                
                $(".alert").hide();
                
                event.preventDefault();
                
               $.ajax({
                   type: "GET",
                   url:
                           
                   "https://maps.googleapis.com/maps/api/geocode/xml?address="+encodeURIComponent($('#address').val())+"&sensor=false&key=AIzaSyBZFe8s1jJnkVbtZty2gR03XcxCo",

                           
                     dataType: "xml",
                     success: processXML,
                     error: error
               });
               
               function error() {
                   $("#fail2").fadeIn();
               }
               
               function processXML(xml) {
                   $(xml).find("address_component").each(function() {
                       if ($(this).find("type").text() == "postal_code") {
                           
                           $("#success").html("The postcode you need is \n\
               "+$(this).find('long_name').text()).fadeIn();
            
                    result=1;
                         
                       }
                   });
                   
                   if (result==0) {
                       
                       $("#fail").fadeIn();
                   }
               }
               
            });
            
        </script>
        
    </body>
</html>
