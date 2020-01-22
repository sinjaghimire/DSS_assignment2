<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document2</title>
</head>
<body>
<?php
$k = 100;
$j = 90;
 
switch ($k+$j===190) {
    case 1:
        echo "The sum is 190.";
        break;
    case 2:
        echo "The sum is 0110.";
        break;
    case 3:
        echo "The sum is 330.";
        break;
    default:
        echo "The sum is not here";
}
?>
<br>
<br>
<?php
    switch($k-$j==10)
    {
        case 1:
            echo "The difference is 10.";
        break;
        case 2:
            echo "The difference is 205.";
        break;
        case 3:
            echo "The difference is 90.";
            break;
        default:
        echo "The difference is none.";
    }

?>
<br>
<br>
<?php
$k=10;
$s=10;

    switch($k*$s==100)
    {
        case 1:
            echo "The product is 100.";
        break;
        case 2:
            echo "The product is 1700.";
        break;
        case 3:
            echo "The product is 011000.";
            break;
        default:
        echo "The product is none.";
    }

?>
</body>
</html>