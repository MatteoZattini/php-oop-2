<?php
class Gioco extends Prodotto
{
    public $durezza;



    public function __construct($durezza)
    {
        $this->durezza = $durezza;
    }
}