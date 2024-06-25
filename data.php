<?php
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Cibo.php";
include __DIR__ . "/models/Gioco.php";
include __DIR__ . "/models/Cliente.php";


$prodottiCibo = [
    new Cibo(new Categoria("Cani", "icona Cane"), "crocchette", 10, "10kg", "puppy"),
    new Cibo(new Categoria("Gatti", "icona Gatto"), "crocchette", 9, "5kg", "puppy"),
    new Cibo(new Categoria("Cani", "icona Cane"), "bocconcini", 10, "15kg", "adult"),
    new Cibo(new Categoria("Gatti", "icona Gatto"), "bocconcini", 9, "11kg", "adult"),
    new Cibo(new Categoria("Cani", "icona Cane"), "crocchette", 10, "10kg", "puppy"),
    new Cibo(new Categoria("Gatti", "icona Gatto"), "crocchette", 9, "5kg", "puppy"),
    new Cibo(new Categoria("Cani", "icona Cane"), "bocconcini", 10, "15kg", "adult"),
    new Cibo(new Categoria("Gatti", "icona Gatto"), "bocconcini", 9, "11kg", "adult"),
    new Gioco(new Categoria("Cani", "icona Cane"), "legnetto", 5, "durissimo"),
    new Gioco(new Categoria("Gatti", "icona Gatto"), "legnetto", 5, "morbido"),
    new Gioco(new Categoria("Cani", "icona Cane"), "legnetto", 5, "durissimo"),
    new Gioco(new Categoria("Gatti", "icona Gatto"), "legnetto", 5, "morbido"),
];

$prodottiGioco = [
    new Gioco(new Categoria("Cani", "icona Cane"), "legnetto", 5, "durissimo"),
    new Gioco(new Categoria("Gatti", "icona Gatto"), "legnetto", 5, "morbido"),
];

$user = new Cliente("Matteo", "Zattini", 29);