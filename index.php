<?php
require "animal.php";
require "frog.php";
require "ape.php";

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded; // false
echo var_dump($sheep->get_cold_blooded());

echo "<br>";
$sungokong = new ape("Kera sakti");
echo $sungokong->yell();

echo "<br>";
$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
echo "<br>";
echo $kodok->set_leg(4);

?>