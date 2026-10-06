<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $firstnumber = 20;
   $seconednumber =10;
   $totalnumber = $firstnumber + $seconednumber;
    $result = ($totalnumber == 30);
   if ($totalnumber == 30){
       echo "the total number is equal to :" . $totalnumber . "<br>";
       var_dump($result);

   }else {
   var_dump($result);
   }

   
   ?> 
</body>
</html>