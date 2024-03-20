<?php
function increaseEnthusiasm(string $str)
{
    return $str . '!';
}
echo increaseEnthusiasm('arkasha') . "\n";

function repeatThreeTimes(string $str)
{
    return str_repeat($str, 3);
}
echo repeatThreeTimes(strrev('upyachka')) . "\n";
echo increaseEnthusiasm(repeatThreeTimes('hehehehe')) . "\n";

function cut(string $str, int $len = 10)
{
    return substr($str, 0, $len);
}
echo cut('i hate cats', 2) . "\n";


$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function recursiveOut(array $array)
{
    if (1 < count($array))
    {
        recursiveOut(array_slice($array, 0, -1));
    }
    echo end($array) . ' ';
}
echo recursiveOut($array) . "\n";


$numb = 2002;
function sum($numb)
{
    $temp = $numb;
    $sum = 0;
    while (0 < $temp)
    {
        $sum += $temp % 10;
        $temp = intdiv($temp, 10);
    }
    if ($sum < 10)
    {
        return $sum;
    }
    else
    {
        return sum($sum);
    }
}
echo sum($numb) . "\n";