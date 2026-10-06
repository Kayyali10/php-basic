<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array =array(1,5,9,10,4,300,1,100);
        $largestnumber = $array[0]; 
        for ($i = 0 ; $i<count($array);$i++){
            if ($array[$i] > $largestnumber){
                $largestnumber = $array[$i];
            }
        }
        echo "The largest number is: " . $largestnumber;
        ?>
</body>
</html>