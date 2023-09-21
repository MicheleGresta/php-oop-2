<?php

include_once __DIR__ . "/classes/categories/Cane.php";
include_once __DIR__ . "/classes/categories/Gatto.php";
include_once __DIR__ . "/classes/Cibo.php";
include_once __DIR__ . "/classes/Giochi.php";
include_once __DIR__ . "/classes/Cuccia.php";   
include_once __DIR__ . "/ListaProdotti.php";




?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <!-- CUSTOM STYLE SHEET FILE LINK -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- THIRD PARTY LIBRARIES -->
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STANDARD FAVICON TO AVOID CONSOLE ERRORS ON FIREFOX -->
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
    <!-- VUE CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- LUXON CDN -->
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.3.0/build/global/luxon.min.js"></script>
    <!-- AXIOS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row row-cols-3">

            <?php
            foreach ($listaProdotti as $prodottoSingolo) {
            ?>
                <div class="col">
                    <div class="card h-100 p-3">
                        
                        <h2><?php echo $prodottoSingolo->getNome(); ?></h2>
                        <p><?php echo $prodottoSingolo->getDescrizione(); ?></p>
                        <p>Prezzo: $<?php echo $prodottoSingolo->getPrezzo(); ?></p>
                        <img src="<?php echo $prodottoSingolo->getImmagine(); ?>">
                        <span class="text-center m-auto icona-set"> <?php echo $prodottoSingolo->getCategoria() ?></span>
                        <span class="text-center m-auto icona-set"> <?php echo $prodottoSingolo->sesso ?></span>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>






    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>