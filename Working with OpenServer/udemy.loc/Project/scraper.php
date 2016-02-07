<?php

$city=$_GET['city'];

$city=str_replace(" ", "", $city);

 $contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

 //<p class="summary"><b>Minsk 1 &ndash; 3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">A dusting of new snow. Temperatures will be well below freezing (max -8&deg;C on Wed afternoon, min -18&deg;C on Fri night). Wind will be generally light.</span></span></span></p>
 
preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);

echo $matches[1];

?>