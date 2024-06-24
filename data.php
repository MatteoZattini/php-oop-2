<?php
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Cibo.php";
include __DIR__ . "/models/Gioco.php";


$prodottiCibo = [
    new Cibo(new Categoria("Cani", "icona Cane"), "crocchette", 10, "10kg", "puppy"),
    new Cibo(new Categoria("Gatti", "icona Gatto"), "crocchette", 9, "5kg", "puppy"),
    new Cibo(new Categoria("Cani", "icona Cane"), "bocconcini", 10, "15kg", "adult"),
    new Cibo(new Categoria("Gatti", "icona Gatto"), "bocconcini", 9, "11kg", "adult"),
];

$prodottiGioco = [
    new Gioco(new Categoria("Cani", "icona Cane"), "legnetto", 5, "durissimo"),
    new Gioco(new Categoria("Gatti", "icona Gatto"), "legnetto", 5, "morbido"),
];