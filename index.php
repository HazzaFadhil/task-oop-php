<?php

// Memasukkan class Animal dari file animal.php
require_once('animal.php');

// Membuat instance baru dari class Animal
$sheep = new Animal("Shaun");

// Menampilkan informasi hewan dengan format yang diinginkan
displayAnimalInfo($sheep);

function displayAnimalInfo($animal) {
  echo "Name: " . $animal->get_name() . "<br>"; 
  echo "Legs: " . $animal->get_legs() . "<br>";
  echo "Bloood coolded: " . $animal->get_cold_blooded() . "<br>"; 
}


require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');

// Create Frog object
$frog = new Frog("Buduk");

// Display Frog information
echo "<br>"; 
echo "Name : " . $frog->get_name() . "<br>";
echo "Legs : " . $frog->get_legs() . "<br>";
echo "Cold blooded : " . $frog->get_cold_blooded() . " <br>"; 
echo "" . $frog->lompat() . "<br>";

// Create Ape object
$ape = new Ape("Kera Sakti");

// Display Ape information
echo "<br>"; // Add space between animal information blocks
echo "Name : " . $ape->get_name() . "<br>";
echo "Legs : " . $ape->kaki . "<br>"; // Use attribute directly
echo "Cold blooded : " . $ape->get_cold_blooded() . "<br>"; 
echo " " . $ape->berteriak() . "<br>";
