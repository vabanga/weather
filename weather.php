<?php

$pogoda = "http://samples.openweathermap.org/data/2.5/weather?q=Khabarovsk,ru&appid=6b7c151fcd9ea5d60237fef747ad775c";
$string = file_get_contents($pogoda);

$results = json_decode($string, $assoc = true, $depth = 10000);

foreach($results["weather"][0] as $k=>$v)
{
    if($v == "Drizzle"){
        echo "weather = $v <br>";
    }
}

echo "<br>";

foreach($results["main"] as $k=>$v)
{
    if($v == 280.32){
        echo "temp = $v(K) <br>";
    }
}



?>

