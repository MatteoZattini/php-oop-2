<?php
class Prodotto
{
    public $nome;
    public $prezzo;
  
    

    public function __construct($nome, $prezzo) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
 
    }



}