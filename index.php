<?php
require 'Personnage.php';
require 'Guerrier.php';

$florent = new Personnage("Florent");
var_dump($florent);
$florent->sePresenter();
echo "<br>" . $florent->getHp() . "<br>";

$test = new Personnage("Test");
var_dump($test);
$test->sePresenter();

$test2 = new Guerrier("Test2");
echo "<br>" . $test2->getHp() . "<br>";
$test2->sePresenter();