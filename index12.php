<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $graede = array(85,86,95,90,100,74,79,62,50,90);
    $average = array_sum($graede) / count($graede);
    echo $average . "<br>";
    if ($average < 60 ){
        echo "the average grade is F";
    } else if ($average >=61 && $average <=70){
        echo "the average grade is D";
    } else if ($average >=71 && $average <=80){
        echo "the average grade is C";
    } else if ($average >= 81 && $average <=90){
        echo "the average grade is B";
    }else if ($average >= 91 && $average <=100){
        echo "the average grade is A";
    }
    
    ?>
    
</body>
</html>