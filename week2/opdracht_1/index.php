<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Arrays</title>
</head>
<body>
<?php
$numbers = array(2,4,6,1,3,5);
$amount = count($numbers);
echo("Aantal getallen: " . $amount);
for ($i = 0;$i<$amount;$i++){
    echo("<br>");
    echo $numbers[$i];
}

echo("<br>");
echo("<br>");

$numbers[5] = 8;
echo("Aantal getallen: " . $amount);
for ($i = 0;$i<$amount;$i++){
    echo("<br>");
    echo $numbers[$i];
}

echo("<br>");
echo("<br>");

array_push($numbers,6,8);
$amount = count($numbers);
echo("Aantal getallen: " . $amount);
for ($i = 0;$i<$amount;$i++){
    echo("<br>");
    echo $numbers[$i];
}

echo("<br>");
echo("<br>");

$mixed = array("Woorden",1,2,3,"Letters",5,"En Nog Meer?");
$mixedAmount = count($mixed);
echo("Aantal waarden: " . $mixedAmount);
for ($i = 0;$i<$mixedAmount;$i++){
    echo("<br>");
    echo $mixed[$i];
}

echo("<br>");
echo("<br>");
echo("Aantal waarden: " . $mixedAmount);
$mixed[0] = "(Woorden) ZINNEN";
$mixed[1] = "(1) HAHAHA!";
$mixed[2] = "(2) I'm A Rebel!";
for ($i = 0;$i<$mixedAmount;$i++){
    echo("<br>");
    echo $mixed[$i];
}

echo("<br>");
echo("<br>");

$subjects = array('PHP' => 'Ingrid', 'JavaScript' => 'Ed');
echo $subjects['PHP'];
echo("<br>");
echo $subjects['JavaScript'];
echo("<br>");
echo("<br>");


?>
</body>
</html>