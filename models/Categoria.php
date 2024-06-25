<?php

class Categoria {
    public $tipo;
    public $icona;

    public function __construct($tipo, $icona)
    {
        $this->tipo = $tipo;
        $this->icona = $icona;
    }

};
