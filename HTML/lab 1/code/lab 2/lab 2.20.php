<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arithmeticMean = array_sum($array) / count($array);
echo $arithmeticMean . "\n";


echo array_sum(range(1, 100)) . "\n";


$arr = [1, 4, 9, 16, 25, 49];
$sqrtArr = array_map('sqrt', $arr);
foreach ($sqrtArr as $value)
{
    echo $value, " ";
}
echo "\n";


$letter = array_combine(range('a', 'z'), range(1, 26));


$numbs = '1234567890';
$sum = str_split($numbs, 2);
echo array_sum($sum) . "\n";