<?php
function pyramid()
{
    for($i = 1; 20 >= $i; $i++)
    {
        echo str_repeat('x', $i) . "\n";
    }
}

pyramid();