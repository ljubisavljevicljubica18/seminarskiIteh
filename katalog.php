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
    <!--<script src = "js/bootstrap.min.js"></script>-->
</head>
<body>

    <!--<header>
        <nav>
            <h3 id="logo">KATALOG</h3>
            <img class="slikaKataloga" src="slike/log.jpg" alt="Avon Katalog">-->
        <!--</nav>
        <section class="sekcija">
        <div class="hero">
            <img class="slikaKataloga" src="slike/11.jpg" alt="">
            <h1 class="headLine">AVON Cosmetics</h1>

        </div>
        </section>
    </header>

    <div class="slider"></div>

    <br><br><br>-->

    <!--<nav class = "navbar navbar-default navbar-fixed top" id = "navbar">
        <div class = "container">
            <a href = "/ITEH-Zadatak1/index.php" class = "navbar-brand" id = "text">KATEGORIJE</a>
            <ul class="nav navbar-nav">
                <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" id = "text"><span class = "caret"></span></a>
                    <ul class = "dropdown-menu" role = "menu">

                    <?php
                        /*$crudKategorije->select();
                        while($redKategorije=$crudKategorije->getResult()->fetch_object()){
                    ?>

                        <li><a href = "#"><?php echo $redKategorije->naziv ?></a></li>

                    <?php
                        }*/
                    ?>

                    </ul>
                </li>
            </ul>
        </div>
    </nav>-->

    <section class="plavo">
        <h1>KATALOG</h1>
    </section>

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title">Makeup studio Bojan Vukadinov</p>
                    <!--<p id="ispod">The company for women</p>-->
                </div>
                <div class="col-md-6 text-center">
                    <!--<img src ="slike/pozadinak11.jpg" class="img-fluid">-->
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
                /*$crud->select();
                while($red=$crud->getResult()->fetch_object()){
            ?>

            <<div class = "col-md-3">
                <h4><?php echo $red->naziv; ?></h4>
                <img src = "<?php echo $red->slika; ?>" alt = "<?php echo $red->naziv; ?>" id = "images"/>
                <p class = "price">Cena: <?php echo $red->cena; ?>RSD</p>
                <!--<button type = "button" class = "dugme" data-tongle = "modal" data-target="#details-1">Dodaj u korpu</button>-->
                <form action = "" method="post">
                        <input type = "hidden" name = 'id' value="id proizvoda">
                        <input type = "submit" name ='submit' value="Dodaj u korpu" class="dugme">
                    </form>
                <br>
            </div>

            <?php
                }*/
            ?>

            <?php
                for($i=0; $i<count($proizvodi); $i++){
            ?>

            <div class = "col-md-3">
                <h4><?php echo $proizvodi[$i]->getNaziv(); ?></h4>
                <p class = "price">Sifra: <?php echo $proizvodi[$i]->getId(); ?></p>
                <img src = "<?php echo trim($proizvodi[$i]->getSlika(), " "); ?>" alt = "<?php echo $proizvodi[$i]->getNaziv(); ?>" id = "images"/>
                <p class = "price">Cena: <?php echo $proizvodi[$i]->getCena(); ?>RSD</p>
                <!--<button type = "button" class = "dugme" data-tongle = "modal" data-target="#details-1">Dodaj u korpu</button>-->
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
            <!--<p class="tekstKorpa">Vaša korpa sadrži: </p>-->
            <button class="dugmeKorpa"><a href="?vidi_korpu" class="dugmeKorpa1">Moja korpa</a></button>
            <!--<button type = "button" class = "dugme1" data-tongle = "modal" data-target="#details-1"></button>-->
    <footer class = "text-center" id = "footer">&copy; Copyright 2019 Studio Vukadinov</footer>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
    <script src="jscriptKatalog.js"></script>
</body>
</html>