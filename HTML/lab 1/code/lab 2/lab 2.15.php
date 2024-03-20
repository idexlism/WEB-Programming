<?php
function printStringReturnNumber()
{
    echo "hello world\n";
    return 10;
}

$myNum = printStringReturnNumber();
echo $myNum . "\n";