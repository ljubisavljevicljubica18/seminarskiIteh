<!DOCTYPE html>

<?php

include("databasePorudzbine.php");
$baza = new DatabasePorudzbina("makeupstudiobojanvukadinov");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moja korpa</title>
    <link rel = "stylesheet" href = "styleKatalog.css" />
    <link rel = "stylesheet" href = "bootstrap.min.css" />
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src = "bootstrap.min.js"></script>
</head>
<body>

    <header>
        <nav>
            <h3 id="logo">MOJA KORPA</h3>
            <!--<img class="slikaKataloga" src="slike/log.jpg" alt="Avon Katalog">-->
        </nav>
        <section class="sekcija">
        <div class="hero">
            <img class="slikaKataloga" src="slike/p4.jpg" alt="">
            <h1 class="headLine">Makeup studio Bojan Vukadinov</h1>

        </div>
        </section>
    </header>

    <div class="slider"></div>

    <br><br><br>

    <section>

    <div class = "col-md-2"></div>

    <div class = "col-md-8">
        <div class = "row">

            <?php
                /*$crud->select();
                while($red=$crud->getResult()->fetch_object()){
            ?>

            <div class = "col-md-3">
                <h4><?php echo $red->naziv; ?></h4>
                <img src = "<?php echo $red->slika; ?>" alt = "<?php echo $red->naziv; ?>" id = "images"/>
                <p class = "price">Cena: <?php echo $red->cena; ?>RSD</p>
                <!--<button type = "button" class = "dugme" data-tongle = "modal" data-target="#details-1">Dodaj u korpu</button>-->
                <form action = "">
                        <input type = "hidden" name = 'id' value="id proizvoda">
                        <input type = "submit" name ='submit' value="Dodaj u korpu" class="dugme">
                    </form>
                <br>
            </div>

            <?php
                }*/
            ?>

            <?php if(count($korpa)>0) : ?>

            <?php
                foreach($korpa as $proizvod): 
            ?>

            <div class = "col-md-3">
                <h4><?php echo $proizvod->getNaziv(); ?></h4>
                <img src = "<?php echo trim($proizvod->getSlika(), " "); ?>" alt = "<?php echo $proizvod->getNaziv(); ?>" id = "images"/>
                <p class = "price">Cena: <?php echo $proizvod->getCena(); ?>RSD</p>
                <!--<button type = "button" class = "dugme" data-tongle = "modal" data-target="#details-1">Dodaj u korpu</button>-->
                <br>
            </div>

            <?php
                endforeach;
            ?>

            <?php else: ?>
            
            <p>Nema proizvoda</p><br>

            <?php endif; ?>

            </div>
            <br>
            <p>Ukupna cena: <?php echo $ukupno; ?>RSD</p>
            <br>

            <form action = "" method="post">
                        <a href="?" class="dugmeKorpa">Nastavi sa kupovinom</a><br>
                        <input type = "submit" name ='submit' value="Isprazni" class="dugmeKorpa"><br><br>
                    </form>

            <!--<button class="dugmeKorpa"><a href="korpa.php" class="dugmeKorpa" target="_blank">Moja korpa</a></button><br>-->
            <!--<button type = "button" class = "dugme1" data-tongle = "modal" data-target="#details-1"></button>-->
    <!--<footer class = "text-center" id = "footer">&copy; Copyright 2019 Avon Cosmetics</footer>-->
    </div>

    </section>

    

        <section id="insert">
        <div id="zajedno">
            <div class="container">
                <h1 class="title text-center"><b>PODACI ISPORUKE:</b></h1>
                <form action="" method="post">
                Korisnik: <?php echo $_SESSION['user'] ?> <br><br>
            <!--Ime: <input type="text" name="imeDodavanje" id="tipTekst"><br><br>
            Prezime: <input type="text" name="prezimeDodavanje" id="tipTekst2"><br><br>
            Telefon: <input type="text" name="telefonDodavanje" id="tipTekst3"><br><br>-->
            Grad: <input type="text" name="gradDodavanje" id="tipTekst4"><br><br>
            Adresa: <input type="text" name="adresaDodavanje" id="tipTekst5"><br><br>
            Postanski broj: <input type="text" name="postanskiBrojDodavanje" id="tipTekst6"><br><br>
            <input type="submit" name ="dodaj" value="Završi kupovinu" class="btn-primary"><br>
        </form>
        <?php
            if(isset($_POST["dodaj"])){
                $korisnik=$_SESSION['user'];
                $grad=$_POST["gradDodavanje"];
                $adresa=$_POST["adresaDodavanje"];
                $postanskiBroj=$_POST["postanskiBrojDodavanje"];
                $kolone = "korisnik, grad, adresa, postanskiBroj, proizvodiId, ukupnaCena";
                $insert = 'INSERT INTO porudzbine ('.$kolone.') VALUES ("'.$korisnik.'", "'.$grad.'", "'.$adresa.'", "'.$postanskiBroj.'", "'.$proizvodiId.'", "'.$ukupno.'")';
                echo "Kupovina uspešno obavljena.";
                /*$baza->insert("porudzbine", $ime, $prezime, $telefon, $grad, $adresa, $postanskiBroj, $proizvodiId, $ukupno, $kolone);*/
                $baza->insert($insert);
            }
        ?>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
    <script src="jscriptKatalog.js"></script>
</body>
</html>