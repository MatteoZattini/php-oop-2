<?php
class Cibo
{
    public $peso;
    public $agetarget;

    public function __construct($peso, $agetarget)
    {
        $this->peso = $peso;
        $this->agetarget = $agetarget;
    }
}