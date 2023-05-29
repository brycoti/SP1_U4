<?php
require  'clases.php';

$dado1 = new PokerDice();
$dado2 = new PokerDice();
$dado3 = new PokerDice();
$dado4 = new PokerDice();
$dado5 = new PokerDice();

$dado1->throwDice();
$dado2->throwDice();
$dado3->throwDice();
$dado4->throwDice();
$dado5->throwDice();

$dado1->shapeName();
$dado2->shapeName();
$dado3->shapeName();
$dado4->shapeName();
$dado5->shapeName();

echo Pokerdice::getTotalThrows();

?>