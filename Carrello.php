<?php
include __DIR__ . "/data.php";


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
    <pre>
        <?php var_dump($user) ?>
        <?php $user->addToCart($prodottiCibo[0]) ?>
        <?php $user->addToCart($prodottiCibo[2]) ?>
        <?php var_dump($user) ?>
        <?php $user->getCart() ?>

    </pre>

    <div class="container">
        <div class="row">
            <h1>Carrello</h1>
        <div class="col-12 d-flex flex-wrap">
                <?php foreach ($user->carrello as $prodotto) { ?>
                    <div class="card mb-3">
                    <?php
                        if ($prodotto->categoria->icona == "icona Cane") { ?>
                            <img src="https://picsum.photos/id/237/200/100" class="card-img-top" alt="...">
                        <?php }
                        ?>
                        <?php
                        if ($prodotto->categoria->icona == "icona Gatto") { ?>
                            <img src="https://picsum.photos/id/40/200/100" class="card-img-top" alt="...">
                        <?php }
                        ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= $prodotto->nome ?></h5>
                            <div class="card-text">
                                <p><?= $prodotto->categoria->tipo ?></p>
                                <?php
                                if ($prodotto->categoria->icona == "icona Cane") { ?>
                                    <p><i class="fa-solid fa-dog"></i></p>
                                <?php }
                                ?>
                                <?php
                                if ($prodotto->categoria->icona == "icona Gatto") { ?>
                                    <p><i class="fa-solid fa-cat"></i></p>
                                <?php }
                                ?>
                                <p><?= $prodotto->prezzo . " euro" ?></p>
                                <p><?php if(get_class($prodotto) == "Cibo") { ?>
                                    <p><?=$prodotto->peso?></p>
                                <?php } ?></p>
                                <p><?php if(get_class($prodotto) == "Cibo") { ?>
                                    <p><?=$prodotto->agetarget?></p>
                                <?php } ?></p>
                                <p><?php if(get_class($prodotto) == "Gioco") { ?>
                                    <p><?=$prodotto->durezza?></p>
                                <?php } ?></p>
                                <p><?= $prodotto->getClassName($prodotto) ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</body>
</html>