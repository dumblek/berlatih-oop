<?php

//require ('ape.php');
 require ('frog.php');


$sheep = new Animal("shaun");

echo $sheep->get_name(); // "shaun"
echo "<br>";
echo $sheep->get_legs(); // 2
echo "<br>";
echo $sheep->get_cold_blooded(); // false
echo "<br>";
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<br>";
$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"

?>