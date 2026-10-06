<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Calculator</h1>
    <?php

    $numberone;
    $numbertwo;
    $totalnumber;

     function  Addition ($numberone , $numbertwo){
           $totalnumber = $numberone + $numbertwo;
           return $totalnumber;
     }

     function Subtraction ($numberone , $numbertwo){
        $totalnumber = $numberone - $numbertwo;
        return $totalnumber;
     } 

     function Multiplication ($numberone , $numbertwo){
        $totalnumber = $numberone * $numbertwo;
        return $totalnumber;
     }

     function Division ($numberone , $numbertwo){
        $totalnumber = $numberone / $numbertwo;
        return $totalnumber;
     }
       echo "the sum is: " . Addition(20,10) . "<br>";
       echo "the Subtraction is: " . Subtraction(20,10) . "<br>";
       echo "the Multiplication is: " . Multiplication(20,10) . "<br>";
       echo "the Division is: " . Division(20,10) . "<br>";
    ?>
</body>
</html>