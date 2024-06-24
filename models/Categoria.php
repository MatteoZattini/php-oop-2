<?php

class Categoria {
    public $tipo;
    public $icona;

    public function __construct($tipo, $icona)
    {
        $this->tipo = $tipo;
        $this->icona = $icona;
    }

    public function setIcon($tipo) {
        if($tipo == "Cani") {
            $this->tipo = '<i class="fa-solid fa-dog"></i>';
        }
    }
};
