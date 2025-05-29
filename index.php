<?php 
define('MIN_NUM',1);
define('MAX_NUM', 100);
define('CONGRATS_MSG', "Es juernes y el cuerpo lo sabe!");

$randomNumber = rand(MIN_NUM,MAX_NUM);

$inputNumber = intval(readline("Tip a number,please"));

while($inputNumber != $randomNumber) {
    $inputNumber = intval(readline("Tip a number,please"));
}

echo CONGRATS_MSG.PHP_EOL;

?>