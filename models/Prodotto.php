<?php
class Prodotto
{
    public $nome;
    public $prezzo;
    public $descrizione;

    public function __construct($nome, $prezzo, $descrizione) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->descrizione = $descrizione;
    }

}