<?php

class Cliente {
    public $nome;
    public $cognome;
    public $eta;
    public $carrello = array();

    public function __construct($nome, $cognome, $eta, $carrello)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->carrello = $carrello;
    }

    public function addToCart($valore) {
        array_push($carrello, $valore);
    }

};