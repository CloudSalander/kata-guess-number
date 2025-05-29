<?php 
include('class/GuessNumber.php');

define('MIN_NUM',1);
define('MAX_NUM', 100);
define('INPUT_MSG',"Tip a number,please ");
define('CONGRATS_MSG', "Es juernes y el cuerpo lo sabe!");

$guessNumber = new guessNumber();
$guessNumber->play();

?>