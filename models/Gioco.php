<?php
class Gioco extends Prodotto
{
    public $durezza;
    public $categoria;



    public function __construct(Categoria $categoria, $nome, $prezzo, $durezza)
    {
        parent::__construct($nome, $prezzo);
        $this->durezza = $durezza;
        $this->categoria = $categoria;
    }

    public function getClassName($valore) {
        echo "Questo prodotto è di classe " . get_class($valore);
        
    }
}