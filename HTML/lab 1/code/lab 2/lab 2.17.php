<?php

function xAdd(int $len)
{
    $letter = "x";
    $arr = array($letter);
    for ($i = 0; $i < $len; $i++)
    {
        array_push($arr, str_repeat('x', $i));
    }
    return $arr;
}

foreach (xAdd(5) as $value)
{
    echo $value . ' ';
}
echo "\n";


function arrayFill($value, int $len) {
    $arr = array();
    for ($i = 0; $i < $len; $i++) {
        array_push($arr, $value);
    }
    return $arr;
}

foreach (arrayFill('Ä', 50) as $value)
{
    echo $value . ' ';
}
echo "\n";



$arr = [[1, 2, 3], [4, 5], [6]];
function sumElem($arr)
{
    $sum = 0;
    for($i = 0; $i < count($arr); $i++)
    {
        $sum += array_sum($arr[$i]);
    }
    return $sum;
}
echo sumElem($arr) . "\n";


$arr = array();
$temp = 1;
for($i = 0; $i < 3; $i++)
{
    array_push($arr, array());
    for($j = 0; $j < 3; $j++)
    {
        array_push($arr[$i], $temp);
        $temp++;
    }
}
print_r($arr);


$nums = [2, 5, 3, 9];
$result = ($nums[0] * $nums[1]) + ($nums[2] * $nums[3]);
echo $result . "\n";


$user = ['name'=>'Elbeg', 'surname'=>'Budaeff', 'patronymic'=>'Tsingaevich'];
echo $user['name'] . ' ' . $user['surname'] . ' ' . $user['patronymic'] . "\n";


$date = ['day'=>'19', 'month'=>'03', 'year'=>'2024'];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] . "\n";


$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr) . "\n";
echo end($arr) . "\n";
echo $arr[count($arr) - 1 - 2] . "\n";