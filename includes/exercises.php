<html>
    <head>
        <meta charset="UTF-8" />
        <title>
            EXERCISES
        </title>
    </head>
    <body>
<?php
/*
$price= 200;
$vat=0.16;

function calculateVat($price,$vat)
{
    $cutPrice = $price * $vat + $price;
return $cutPrice;
}
echo"price ".$price . "<br>";
echo"vat ".$vat . "<br>";
echo"totalprice ".calculateVat($price,$vat) . "<br>";

//calculateVat($price,$vat);
//echo $cutPrice;
*/

/*
$year = 2024;
function isLeapYear($year)
{
if ($year % 400==0 || $year % 4==0)
{
    return true;
}
else{
    return false;
}
}
if(isLeapYear($year)){
echo $year. " is a leap year";
}
else{
   echo $year." is not a leap year";
}
*/
/*
$num1=10;
$num2=20;

function swapNumbers($num1,$num2)
{
$temp1=$num1;
$num1=$num2;
$num2=$temp1;
echo"after swapping num1 = "  .$num1." " . "num2 = ".$num2;
}
swapNumbers($num1,$num2);
*/

//SORTING ARRAYS
$numbers = array("milk" => 2, "cheese" => 4, "butter" => 5, );
arsort($numbers);
print_r($numbers);
echo "<br>";

//BIRTHDAY COUNTDOWN
$targetDays = mktime(0, 0, 0,07,20,2022);

$today = time();

$differenceDays = ($targetDays - $today);

$days =(int)( $differenceDays/86400 ) + 1;

echo "Days till next Birthday: ".$days . " Days!";
?>
    </body> 
</html>