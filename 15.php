<?php
$a = 14;
$b = 2;
$operator = "/" ;
if ($operator == '/' && $b == '0')
    die('На 0 делить нельзя!');
switch ($operator){
    case '*':
        echo $a*$b;
        break;
    case '/':
        echo $a/$b;
        break;
    case '-':
        echo $a-$b;
        break;
    case '+':
        echo $a+$b;
        break;
}