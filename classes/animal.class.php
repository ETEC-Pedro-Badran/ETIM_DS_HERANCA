<?php

class Animal {
    private $nome;

    function __construct($nome)
    {
        $this->nome = $nome;
    }

    function getNome(){
        return $this->nome;
    }
    function nasce(){
        echo "<h1>Animal $this->nome nasceu! <h1>";
    }

    function come(){
        echo "<h1>Animal $this->nome está comendo! <h1>";
    }

    function comunica(){
        echo "<h1>Animal $this->nome está se comunicando! <h1>";
    }

}
