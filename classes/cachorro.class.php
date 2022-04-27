<?php
class Cachorro extends Animal {


   function morde(){
     echo "<h1>Cachorro ".$this->getNome()." mordeu!</h1>";
   }
}