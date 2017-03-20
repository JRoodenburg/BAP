<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Week 3 Strings</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="text" name="userinput" placeholder="Fill in a sentence!">
    <input type="submit" name="submit" value="send">
</form>
<?php

$submit = $_POST['submit'];
$str = "This is some text. I will be using PHP string functions to change it.";
if(isset($submit)){
    $input = $_POST['userinput'];
    $str = $input;
}
echo('<b> Output: </b>' . $str . "<br>");
$lowercase = strtolower($str);  //strtolower($VAR); Makes everything in var lowercase.
echo('<br> <b> (lowercase) Output: <br> </b>' . $lowercase . "<br>");
$cammel = ucwords($str);  //upper case each first letter of each word in a string (cammelcasing?);
echo('<br> <b> (uppercase first letter) Output: <br></b>' . $cammel . "<br>");
$uppercase = strtoupper($str);
echo('<br> <b>(first letter lowercase) Output: <br></b>' . $lcf . "<br>");
$replace = str_replace("PHP","HTML",$str);
echo('<br> <b> (replace) Output: <br></b>' . $replace . "<br>");
$reverse = strrev($str); // REVERSE ESREVER!;
echo('<br> <b> (reverse) Output: <br></b>' . $reverse . "<br>");
$random = str_shuffle($str); //RANDOM;
echo('<br> <b> (random) Output: <br></b>' . $random . "<br>");
$strlength = strlen($str);
echo('<br> <br> <b> String Length:<br> </b>' . $strlength. "<br>");
$strf = ord($str);
$char = chr($strf);
$characters = strcspn($str,$char);
echo('<br> <b> Amount of characters in string: <br></b>' . $characters. "<br>");
$where = strchr($str ,"HTML");
echo('PHP is found at location: ' . $where);

echo('<br>');
echo('<br>');
echo('<br> <b> (uppercase) Output: <br></b>' . $uppercase . "<br>");
$lcf = lcfirst($str);  //first letter in string lowercase.
$spaces = substr_count($str," ");
echo('<br> <b> Contains of: <br></b>' . $spaces . " spaces <br>");

?>
</body>
</html>