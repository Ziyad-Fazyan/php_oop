<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "John";
$person->age = 30;
$person->city = "New York";
var_dump($person);

$fulan = new Person();
$fulan->name = "Fulan";
$fulan->age = 25;
$fulan->city = "Jakarta";
var_dump($fulan);

$fulanah = new Person();
$fulanah->name = "Fulanah";
$fulanah->age = 35;
$fulanah->city = "Bandung";
var_dump($fulanah);

?>
