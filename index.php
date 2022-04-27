<?php
require "classes/animal.class.php";
require "classes/cachorro.class.php";
$animal = new Animal("animal01");
$animal->nasce();
$animal->come();
$animal->comunica();


$dog = new Cachorro("Rex");
$dog->nasce();
$dog->come();
$dog->comunica();
$dog->morde();
