<?php
include __DIR__ . "/models/Prodotto.php";

$prodotti_cani = [
    new Prodotto("crocchette puppy", 20, "ottime per il primo anno del tuo cucciolo"),
    new Prodotto("crocchette", 25, "ottime per il mantenimento del tuo cane"),
    new Prodotto("crocchette elder", 30, "ottime per gl'animali di una certa età"),
];

$prodotti_gatti = [
    new Prodotto("crocchette puppy", 15, "ottime per il primo anno del tuo cucciolo"),
    new Prodotto("crocchette", 23, "ottime per il mantenimento del tuo cane"),
    new Prodotto("crocchette elder", 27, "ottime per gl'animali di una certa età"),
];