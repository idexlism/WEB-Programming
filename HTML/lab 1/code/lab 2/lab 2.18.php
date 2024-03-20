<?php
function numbMore10(float $a, float $b)
{
    return $a + $b > 10;
}
echo numbMore10(0, 1) . "\n";


function equable(float $a, float $b)
{
    return $a === $b;
}

echo equable(1, 1) . "\n";


$test = 0;
if ($test == 0) {
    echo 'верно' . "\n";
}

echo $test == 0 ? 'верно' : '';

echo "\n";



$age = 21;
if (10 <= $age and 99 >= $age)
{
    if ($age % 10 + intdiv($age, 10) > 9)
    {
        echo 'the sum of the digits is two digits ' . "\n";
    }
    else
    {
        echo 'the sum of the numbers is unambiguous' . "\n";
    }
}
else
{
    echo 'number is not in range:' . "\n";
}



$arr = [1, 4, 7, 3];
if (3 == count($arr))
{
    echo array_sum($arr), "\n";
}
else
{
    echo 'not 3 numbers' . "\n";
}