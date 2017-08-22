<?php

$pogoda = "http://samples.openweathermap.org/data/2.5/weather?q=Khabarovsk,ru&appid=6b7c151fcd9ea5d60237fef747ad775c";
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

