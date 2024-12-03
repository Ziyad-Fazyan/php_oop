<?php

require_once "data/Person.php";

// $person = new Person();
// $person->name = "Ziyad";
// $person->age = 19;
// $person->city = "New York";
// echo "Tahub lahir $person->name : " . (2024 - $person->age) . "\n";
// echo "Tahub lahir $person->name : " . $person->tahunLahir() . "\n";
// var_dump($person);

// $fulan = new Person();
// $fulan->name = "Fulan";
// $fulan->age = 25;
// $fulan->city = "Jakarta";
// echo "Tahub lahir $fulan->name : " . $fulan->tahunLahir() . "\n";
// var_dump($fulan);

// $fulanah = new Person();
// $fulanah->name = "Fulanah";
// $fulanah->age = 35;
// $fulanah->city = "Bandung";
// echo "Tahub lahir $fulanah->name : " . $fulanah->tahunLahir() . "\n";
// var_dump($fulanah);

// echo "Penulis script ini adalah : " . Person::AUTHOR . "\n";
// echo "Penulis script ini adalah : " . $person->penulis() . "\n";

$person = new Person("Fulan", 25, "Jakarta");
var_dump($person);
$fulan = new Person("Fulanah", 35, "Bandung");
var_dump($fulan);
$fulanah = new Person("Fulanah", 35, "Bandung");
var_dump($fulanah);

?>
