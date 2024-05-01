<?php

require_once('Animal.php');

class Ape extends Animal {
  public $kaki = 2; 

  public function berteriak() {
    echo "Yell : Auooo";
  }
}