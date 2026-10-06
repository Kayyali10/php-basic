<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$units = 22;
$tier1 = 0;
$tier2 = 0 ;
$tier3 = 0 ;
$tier4 = 0 ;
$totalbill = 0;

if ($units <=50){
  $tier1 = $units * 2.50;
  $totalbill = $tier1;
}else if ( $units > 50 && $units <= 150 ) {
   $tier1 = 50 * 2.50;
   $tier2 = ($units - 50) * 5.00;
   $totalbill = $tier1 + $tier2;
}else if ( $units > 151 && $units <= 250 ){
    $tier1 = 50 * 2.50 ;
    $tier2 = 100 * 5.00 ;
    $tier3 = ($units - 150) * 6.20 ;
    $totalbill = $tier1 + $tier2 + $tier3;
} else {
    $tier1 = 50 * 2.50 ; 
    $tier2 = 100 * 5.00 ;
    $tier3 = 100 * 6.20 ;
    $tier4 = ($units - 250) * 7.50;
    $totalbill = $tier1 + $tier2 + $tier3 + $tier4; 
}

echo " the total bill is : " .$totalbill . "JOD";
?>
    
</body>
</html>

