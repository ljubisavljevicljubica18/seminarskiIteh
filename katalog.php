<!DOCTYPE html>

<?php

    include("databaseKategorijeNovo.php");
    $crudKategorije = new DatabaseKategorijeNovo("makeupstudiobojanvukadinov");
        
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Katalog</title>
    <link rel = "stylesheet" href = "styleKatalog.css" />
    <link rel = "stylesheet" href = "bootstrap.min.css" />
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
</head>
<body>

    <section class="plavo">
        <h1>KATALOG</h1>
    </section>

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title">Makeup studio Bojan Vukadinov</p>
                </div>
                <div class="col-md-6 text-center">
                </div>
            </div>
        </div>
    </section>

    <section class="plavo">
    </section>

    <div class = "col-md-2"></div>

    <div class = "col-md-8">
        <div class = "row">
            <p>Vasa korpa sadrzi:<?php echo count($_SESSION['korpa']); ?></p>

            <?php
                for($i=0; $i<count($proizvodi); $i++){
            ?>

            <div class = "col-md-3">
                <h4><?php echo $proizvodi[$i]->getNaziv(); ?></h4>
                <p class = "price">Sifra: <?php echo $proizvodi[$i]->getId(); ?></p>
                <img src = "<?php echo trim($proizvodi[$i]->getSlika(), " "); ?>" alt = "<?php echo $proizvodi[$i]->getNaziv(); ?>" id = "images"/>
                <p class = "price">Cena: <?php echo $proizvodi[$i]->getCena(); ?>RSD</p>
                <form action = "" method="post">
                        <input type = "hidden" name = 'id' value="<?php echo $proizvodi[$i]->getId(); ?>">
                        <input type = "submit" name ='submit' value="kupi" class="dugme">
                    </form>
                <br>
            </div>

            <?php
                }
            ?>

            </div>
            <br>
            <button class="dugmeKorpa"><a href="?vidi_korpu" class="dugmeKorpa1">Moja korpa</a></button>
    <footer class = "text-center" id = "footer">&copy; Copyright 2019 Studio Vukadinov</footer>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
    <script src="jscriptKatalog.js"></script>
</body>
</html>