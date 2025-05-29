<?php
class GuessNumber {
    
    const MIN_NUM = 1;
    const MAX_NUM = 100;
    const INPUT_MSG = "Tip a number,please ";
    const CONGRATS_MSG = "Es juernes y el cuerpo lo sabe!";
    
    public function __construct() {
        $this->randomNumber = rand(MIN_NUM,MAX_NUM);
    }

    public function play(): void {
        $inputNumber = $this->readInt();
        while($inputNumber != $randomNumber) {
            $this->checkNumber($inputNumber,$randomNumber);
            echo self::PHP_EOL;
            $inputNumber = $this->readInt();
        }
        echo self::CONGRATS_MSG.PHP_EOL;
    }

    private function readInt(): int {
        return intval(readline(INPUT_MSG));
    }
    
    private function checkNumber(int $inputNumber, int $randomNumber): bool {
        if($inputNumber == $randomNumber) return false;
        if($inputNumber > $randomNumber) echo "Més baix";
        else if($inputNumber < $randomNumber) echo "Més alt";
        return true;
    }



}

?>