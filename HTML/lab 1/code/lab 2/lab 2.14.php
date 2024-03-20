<?php
$a = 10;
$b = 3;
echo $a % $b . "\n";

if ($a % $b === 0)
{
    echo "Делится\n";
}
else {
    echo "Делится с остатком\n";
}


$st = pow(2, 10);
echo $st . "\n";
echo 'sqrt(245) = ' . sqrt(245) . "\n";

$arr = [4, 2, 5, 19, 13, 0, 10];
$sumSquared = 0;
foreach ($arr as $value)
{
    $sumSquared += $value ** 2;
}
echo sqrt($sumSquared) . "\n";


echo round(sqrt(379), 0) . "\n";
echo round(sqrt(379), 1) . "\n";
echo round(sqrt(379), 2) . "\n";

$floor = floor(sqrt(587));
$ceil = ceil(sqrt(587));
$assocArray = array('floor'=>$floor, 'ceil'=>$ceil);
echo 'floor: ' . $assocArray['floor'] . "\n";
echo 'ceil: ' . $assocArray['ceil'] . "\n";


$numb = [4, -2, 5, 19, -130, 0, 10];
echo min($numb) . "\n";
echo max($numb) . "\n";


echo rand(1, 100) . "\n";
$randArr = array();
for ($i = 0; $i < 10; $i++)
{
    array_push($randArr, rand(1, 100));
}

foreach ($randArr as $value)
{
    echo $value . ' ';
}
echo "\n";


$a = (int)readline('type first numb: ');
$b = (int)readline('type second numb: ');
echo abs($a - $b) . "\n";

$numbs = [1, 2, -1, -2, 3, -3];
$numbsPosit = array();

for ($i = 0; $i < count($numbs); $i++)
{
    array_push($numbsPosit, abs($numbs[$i]));
}

foreach ($numbsPosit as $value)
{
    echo $value . ' ';
}
echo "\n";


$num = (int)readline('type a numbers: ');
$dividers = array();
for($i = 1; $i < sqrt($num); $i++)
{
    if ($num % $i == 0)
    {
        array_push($dividers, $i, $num/$i);
    }
}

foreach ($dividers as $value)
{
    echo $value . ' ';
}
echo "\n";



$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$numOfNums = 0;
while (10 >= $sum)
{
    $sum += $array[$numOfNums];
    $numOfNums += 1;
}
echo $numOfNums . "\n";