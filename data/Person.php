<?php

class Person {
    var string $name;
    var int $age;
    var string $city;
    var string $country; //= "Indonesia" default value

    const AUTHOR = "Ziyad";

    function __construct(
        string $name = "",
        int $age = 0,
        string $city = "",
        string $country = "Indonesia" //= "Indonesia" default value
    ) {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
        $this->country = $country;
    }

    function tahunLahir() {
        return 2024 - $this->age;
        //this adalah keyword untuk mengakses property dari class yang sama
    }

    function penulis() {
        return self::AUTHOR . " Fazyan";
        //self adalah keyword untuk mengakses property dari class yang sama
    }
}
