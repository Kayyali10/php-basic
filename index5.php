<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$number = 20;

if ($number % 3 == 0 && $number % 5 == 0){
    echo "the number is divisible by both 3 and 5";
} else if ($number % 3 == 0){
    echo "the number is divisible by 3";    
} else if ($number % 5 == 0){
    echo "the number is divisible by 5";    
} else {
    echo "the number is not divisible by both 3 and 5";
}
?>
    
</body>
</html>