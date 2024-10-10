<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- esempio della card
        <div class="card">
            <h5 class="card-title"> cibo per cani</h5>
            <img src="" alt="">
            <p class="card-text">prezzo: 15</p>
            <img src="https://www.purina.com/sites/g/files/auxxlc196/files/styles/social_share_large/public/purina-dog-chow-dry-dog-food-healthy-weight_0.jpg" class="card-img-top" alt="Cibo per cani">
            <p class="card-text">categoria: cane</p>
            <p class="card-text">tipo : cibo</p>
        </div>
-->
    <div class="container mt-5">
        <div class="row">
            <?php
            class Prodotto {
                public $titolo;
                public $prezzo;
                public $categoria;
                public $tipo_articolo;
                public $immagine;
                    // costrutti
                public function __construct($titolo, $prezzo, $categoria, $tipo_articolo, $immagine){
                    $this ->titolo =  $titolo;
                    $this ->prezzo =  $prezzo;
                    $this ->categoria =  $categoria;
                    $this ->tipo_articolo =  $tipo_articolo;
                    $this ->immagine =  $immagine;
                }
            }
            ?>
        </div>
    </div>    
</body>
</html>