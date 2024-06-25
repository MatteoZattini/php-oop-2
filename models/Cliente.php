<?php

class Cliente {
    public $nome;
    public $cognome;
    public $eta;
    public $carrello = array();

    public function __construct($nome, $cognome, $eta)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        
    }

    public function addToCart($valore) {
        array_push($this->carrello, $valore);
    }

    public function getCart() {
        return $this->carrello;
    }

};