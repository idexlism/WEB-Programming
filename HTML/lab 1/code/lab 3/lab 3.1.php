<?php
//1. Напишите регулярку, которая найдет строки 'abba', 'adca', 'abea' по шаблону: буква 'a', два любых символа, буква 'b'. Пример строки: $str = 'ahb acb aeb aeeb adcb axeb';
$str = 'ahb acb aeb aeeb adcb axeb';
$find = '!a.{2}b!';
$match = array(); //пустой массив
$count = preg_match_all($find, $str, $match);
echo "Найдено строк: {$count}\n";

