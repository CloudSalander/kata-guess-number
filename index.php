<?php 
define('MIN_NUM',1);
define('MAX_NUM', 100);
define('INPUT_MSG',"Tip a number,please ");
define('CONGRATS_MSG', "Es juernes y el cuerpo lo sabe!");

$randomNumber = rand(MIN_NUM,MAX_NUM);

$inputNumber = readInt();

while($inputNumber != $randomNumber) {
    checkNumber($inputNumber,$randomNumber);
    echo PHP_EOL;
    $inputNumber = readInt();
}

function readInt(): int {
    return intval(readline(INPUT_MSG));
}

function checkNumber(int $inputNumber, int $randomNumber): void {
    if($inputNumber > $randomNumber) echo "Més baix";
    else if($inputNumber < $randomNumber) echo "Més alt";
}

echo CONGRATS_MSG.PHP_EOL;

?>