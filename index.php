<?php 
include __DIR__ . "/data.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1>Prodotti</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Cibo</h2>
        <div class="row">
            <div class="col-12 d-flex flex-wrap">
                <?php foreach ($prodottiCibo as $prodotto) { ?>
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/id/40/200/100" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $prodotto->nome ?></h5>
                            <div class="card-text">
                                <p><?= $prodotto->categoria->tipo ?></p>
                                <p><?= $prodotto->categoria->icona ?></p>
                                <?php
                                if($prodotto->categoria->icona == "icona Cane") { ?>
                                   <i class="fa-solid fa-dog"></i>
                                <?php }
                                ?>
                                <?php
                                if($prodotto->categoria->icona == "icona Gatto") { ?>
                                   <i class="fa-solid fa-cat"></i>
                                <?php }
                                ?>
                                <p><?= $prodotto->prezzo . " euro" ?></p> 
                                <p><?= $prodotto->peso ?></p>
                                <p><?= $prodotto->agetarget ?></p>
                            </div>
                        </div>
                    </div>               
                <?php } ?>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <h2>Giochi</h2>
            <div class="col-12 d-flex flex-wrap">
                <?php foreach ($prodottiGioco as $prodotto) { ?>
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/id/237/200/100" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $prodotto->nome ?></h5>
                            <div class="card-text">
                                <p><?= $prodotto->categoria->tipo ?></p>
                                <p><?= $prodotto->categoria->icona ?></p>
                                <?php
                                if($prodotto->categoria->icona == "icona Cane") { ?>
                                   <i class="fa-solid fa-dog"></i>
                                <?php }
                                ?>
                                <?php
                                if($prodotto->categoria->icona == "icona Gatto") { ?>
                                   <i class="fa-solid fa-cat"></i>
                                <?php }
                                ?>
                                <p><?= $prodotto->prezzo . " euro" ?></p> 
                                <p><?= $prodotto->durezza ?></p>
                            </div>
                        </div>
                    </div>               
                <?php } ?>
                
            </div>
        </div>
    </div>
</body>

</html>