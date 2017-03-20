<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
<form method="post">
    <select name="beverage">
        <option value="">Select a drink!</option>
        <option value="fanta">Fanta</option>
        <option value="spa">Spa</option>
        <option value="cola">Cola</option>
    </select>
    <input type="submit" name="submit">
</form>

<?php

$beverage = $_POST[beverage];
switch ($beverage){
    case 'fanta':
        echo "Your favorite drink is fanta!";
        echo "<br> <img src='http://vignette1.wikia.nocookie.net/logopedia/images/d/da/Fanta.jpg/revision/latest/scale-to-width-down/2000?cb=20150801095005' alt='fanta'/>";
        break;

    case 'spa':
        echo "Your favorite drink is spa!";
        echo "<br> <img src='http://www.duurzamereten.nl/contentAsset/raw-data/13bdb8bc-151d-473f-863e-a339c4d53af1/logo' alt='spa' />";
        break;

    case 'cola':
        echo "Your favorite drink is cola!";
        echo " <br> <img src='https://yt3.ggpht.com/-3o0qMaMvuwc/AAAAAAAAAAI/AAAAAAAAAAA/CycJ2hpRKvA/s900-c-k-no-mo-rj-c0xffffff/photo.jpg' alt='coca cola'/>";
        break;

    default:
        echo "Please select a drink!";
        echo "<br> <img src='https://cdn4.iconfinder.com/data/icons/basic-ui-elements/700/05_question-512.png' alt='please select a drink!'/>";

}

?>
</body>
</html>
