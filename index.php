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
                // proprietà che hanno tutti              
                public $titolo; //stringa
                public $prezzo; //intero
                public $immagine; //stringa

                // costrutti
                public function __construct($titolo, $prezzo, $immagine){
                    $this->titolo =  $titolo;
                    $this->prezzo =  $prezzo;
                    $this->immagine =  $immagine;
                }

                // metodo per stampare le card dei prodotti
                public function stampa() {
                    echo "<div class='card m-1 p-1 w-25'>";
                    echo "<h5 class='card-title'>{$this->titolo}</h5>";
                    echo "<img src='{$this->immagine}' alt='{$this->titolo}'>";
                    echo "<p class='card-text'> prezzo:{$this->prezzo} euro</p>";
                    echo "<p class='card-text'><strong>Categoria: </strong>" . $this->getCategoria() . "</p>";
                    echo "<p class='card-text'><strong>Tipo: </strong>" . $this->getTipo() . "</p>";
                    echo "<button> compra </button>";
                    echo "</div>";
                }
            
            // metodo delle sottoclassi
            public function getCategoria(){
                return "generico";
            }
            public function getTipo(){
                return "generico";
            }
        }
                //sottoclassi cani e gatti
               class Cane extends Prodotto{
                public function getCategoria(){
                    return "Cane";
                }
               }
               class Gatto extends Prodotto{
                public function getCategoria(){
                    return "Gatto";
                }
            }
                //sottoclassi per il tipo di articolo

                class Cibo extends Prodotto{
                    public function getTipo(){
                        return "Cibo";
                    }
                }
                class Gioco extends Prodotto{
                    public function getTipo(){
                        return "Gioco";
                    }
                }
                class Cuccia extends Prodotto{
                    public function getTipo(){
                        return "Cuccia";
                    }
                }
                // sottoclassi per cibo divisi per categoria (cane e gatto)
                class CiboCane extends Cibo{
                    public function getCategoria(){
                        return "Cane";
                    }
                }
                class CiboGatto extends Cibo{
                    public function getCategoria(){
                        return "Gatto";
                    }
                }
                // sottoclassi per i giochi divisi per categoria (cane e gatto)
                class giocoCane extends Gioco{
                    public function getCategoria(){
                        return "Cane";
                    }
                }
                class GiocoGatto extends Gioco{
                    public function getCategoria(){
                        return "gatto";
                    }
                }
                // sottoclassi per i giochi divisi per categoria (cane e gatto)
                class CucciaCane extends Cuccia{
                    public function getCategoria(){
                        return "Cane";
                    }
                }
                class CucciaGatto extends Cuccia{
                    public function getCategoria(){
                        return "gatto";
                    }
                }

                //Prodotti
                $prodotto1 = new CiboCane("Cibo per cani", 15,"img/cibo per cani.jpeg" );
                $prodotto2 = new GiocoGatto("Gioco per gatti", 5,"img/gioco per gatti.jpg" );
                $prodotto3 = new CucciaCane("Cuccia per cani", 50,"img/cuccia per cani.jpg" );
                //stampa
                $prodotto1 -> stampa();
                $prodotto2 -> stampa();
                $prodotto3 -> stampa();
            ?>
        </div>
    </div>    
</body>
</html>