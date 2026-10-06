<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$temprature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temprature) / count($temprature);
$temprature = array_unique($temprature);
sort($temprature);
$smallestnumber = array_slice($temprature , 0 , 5);
$largestnumber = array_slice($temprature , -5);

echo "Average Temperature is : " . $average  . "<br>";
echo "List of seven lowest temperatures : " 
. $smallestnumber[0] . "," . $smallestnumber[1] . "," 
. $smallestnumber[2] . "," . $smallestnumber[3] . "," . $smallestnumber[4] . "<br>";

echo "List of seven lowest temperatures : " 
.$largestnumber[0] . "," . $largestnumber[1] . "," 
.$largestnumber[2] . "," .$largestnumber[3] . "," .$largestnumber[4];

?>
</body>
</html>