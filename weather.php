<?php

$pogoda = "http://samples.openweathermap.org/data/2.5/weather?q=Khabarovsk,ru&appid=6b7c151fcd9ea5d60237fef747ad775c";
$string = file_get_contents($pogoda);

$results = json_decode($string, $assoc = true, $depth = 10000);

unset($results["weather"][0]["id"]);
unset($results["weather"][0]["description"]);
unset($results["weather"][0]["icon"]);

foreach($results["weather"][0] as $k=>$v)
{
    echo "weather = $v <br>";
}

echo "<br>";

unset($results["main"]["pressure"]);
unset($results["main"]["humidity"]);
unset($results["main"]["temp_min"]);
unset($results["main"]["temp_max"]);

foreach($results["main"] as $k=>$v)
{
    echo "temp = $v(K) <br>";
}



?>

