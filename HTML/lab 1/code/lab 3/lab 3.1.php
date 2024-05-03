<?php
//1. Напишите регулярку, которая найдет строки 'abba', 'adca', 'abea' по шаблону: буква 'a', два любых символа, буква 'b'. Пример строки: $str = 'ahb acb aeb aeeb adcb axeb';
$str = 'ahb acb aeb aeeb adcb axeb';
$find = '!a.{2}b!';
$match = array(); //пустой массив
$count = preg_match_all($find, $str, $match);
echo "Найдено строк: {$count}\n";

//2. Дана строка с целыми числами 'a1b2c3'. С помощью регулярки преобразуйте строку так, чтобы вместо этих чисел стояли их кубы.
$numb = 'a1b2c3';
$changeNumb = '![0-9]+!';
$degree = function ($matches){return pow($matches[0], 3);};
$result = preg_replace_callback($changeNumb,$degree,$numb);
echo $result;