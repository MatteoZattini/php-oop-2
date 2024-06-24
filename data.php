<?php
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Cibo.php";
include __DIR__ . "/models/Gioco.php";


$prodotti = [
    new Cibo("crocchette", 10, "10kg", "puppy")
];