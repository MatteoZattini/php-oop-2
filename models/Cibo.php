<?php
class Cibo extends Prodotto
{
    public $peso;
    public $agetarget;
    public $categoria;

    public function __construct(Categoria $categoria, $nome, $prezzo, $peso, $agetarget)
    {
        parent::__construct($nome, $prezzo);
        $this->peso = $peso;
        $this->agetarget = $agetarget;
        $this->categoria = $categoria;
    }

    public function getClassName($valore) {
        echo "Questo prodotto è di classe " .  get_class($valore);
        
    }
}