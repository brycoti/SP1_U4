<?php 
class PokerDice {
private $costados = array("As", "K", "Q", "J", 8);
private $cara;
private static $totalThrows;

    function throwDice() {
        self::$totalThrows++;
       $this->cara = rand(0,4);
       return $this->cara;
    }

    function shapeName() {
        echo $this->costados[$this->cara] . "<br>";
    }

    public static function getTotalThrows() {
        echo self::$totalThrows; 
       }   
}