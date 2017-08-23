<?php
$city = 'Khabarovsk';
$countryCode = 'ru';
$idKey = '6b7c151fcd9ea5d60237fef747ad775c';
$url = 'http://api.openweathermap.org/data/2.5/weather';

$pogoda = "$url?q=$city,$countryCode&appid=$idKey";

$string = file_get_contents($pogoda);

$results = json_decode($string, true);



foreach($results["weather"][0] as $k=>$v)
{
    if($k == "main"){
        echo 'weather = '.$v.'<br>';
    }
}

echo "<br>";

foreach($results["main"] as $k=>$v)
{
    if($k == "temp"){
        echo 'temp = '.$v.'(K)'.'<br>';
    }
}

?>

