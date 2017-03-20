<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 2 Arrays</title>
</head>
<body>
<?php
$color = array('white', 'green', 'red', 'blue', 'black');
$sentence = "1. The " . $color[2] . " carpet, the ". $color[1] ." lawn, the ". $color[0] . " house and the leaden sky. ";
echo $sentence;

echo("<br>");
echo "<br>";
echo("2.");
$color = array('white', 'green', 'red');
for($i=0;$i<2;$i++){
    echo("<br>");
    echo $color[$i];
}

echo "<br>";
echo "<br>";
echo("3.");
$tco = "<br> The Capital of ";
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
    "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
    "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
echo $tco . "Italy" . " is " . $ceu['Italy'];
echo $tco . "Luxembourg" . " is " . $ceu['Luxembourg'];
echo $tco . "Belgium" . " is " . $ceu['Belgium'];
echo $tco . "Denmark" . " is " . $ceu['Denmark'];
echo $tco . "Finland" . " is " . $ceu['Finland'];
echo $tco . "France" . " is " . $ceu['France'];
echo $tco . "Slovakia" . " is " . $ceu['Slovakia'];
echo $tco . "Slovenia" . " is " . $ceu['Slovenia'];
echo $tco . "Germany" . " is " . $ceu['Germany'];
echo $tco . "Greece" . " is " . $ceu['Greece'];
echo $tco . "Ireland" . " is " . $ceu['Ireland'];
echo $tco . "Netherlands" . " is " . $ceu['Netherlands'];
echo $tco . "Portugal" . " is " . $ceu['Portugal'];
echo $tco . "Spain" . " is " . $ceu['Spain'];
echo $tco . "Sweden" . " is " . $ceu['Sweden'];
echo $tco . "United Kingdom" . " is " . $ceu['United Kingdom'];
echo $tco . "Cyprus" . " is " . $ceu['Cyprus'];
echo $tco . "Lithuania" . " is " . $ceu['Lithuania'];
echo $tco . "Czech Republic" . " is " . $ceu['Czech Republic'];
echo $tco . "Estonia" . " is " . $ceu['Estonia'];
echo $tco . "Hungary" . " is " . $ceu['Hungary'];
echo $tco . "Latvia" . " is " . $ceu['Latvia'];
echo $tco . "Malta" . " is " . $ceu['Malta'];
echo $tco . "Austria" . " is " . $ceu['Austria'];
echo $tco . "Poland" . " is " . $ceu['Poland'];

echo "<br>";
echo "<br>";
echo("4.");

$color4 = array(4 => 'white', 6 => 'green', 11=> 'red');
echo $color4[4];





?>

</body>
</html>