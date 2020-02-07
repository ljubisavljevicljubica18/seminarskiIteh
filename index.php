<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
    header("Location: prijavaKorisnika.php");
    }

?>

<?php
include("database.php");
$db = new Database("makeupstudiobojanvukadinov");

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Makeup studio Bojan Vukadinov</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Početna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Usluge</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#test">Online prodavnica</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Galerija</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Aktuelno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Kontakt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="odjaviMe.php">Odjavi me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading text-uppercase">Makeup studio Bojan Vukadinov</div>
        <div class="intro-lead-in">Dobrodošli <?php echo $_SESSION['user']; ?>!</div>
      </div>
    </div>
  </header>

  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="section-heading text-uppercase">Bojan Vukadinov</h1><br>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/bojan111.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-body">
                  <p class="text-muted">Umetnik Bojan Vukadinov je završio Master i po profesiji je akademski slikar. Završio je Akademiju umetnosti u Novom Sadu, gde je stekao široka znanja iz oblasti istorije umetnosti, ali i slikarskih tehnika, hospitovanja, estetike, filozofije, kao i savremenih tendencija umetnosti 21. veka. Devojke oko njega su često smatrale da bi mogao preciznije da izvuče ajlajner, nego one i tako je shvatio da je šminkanje vrlo slično slikarstvu.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/bojan222.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-body">
                  <p class="text-muted">Bojan je samouki šminker. Prijatelji iz šminkerske kuće “Inglot” su mu obezbedili nekolko časova, gde je otkrio neke tajne šminkanja. Tamo je naučio tehničke stvari. Često kaže “dok pratiš aktuelnosti, postojiš” i zbog toga prati blogove i inovacije koje se dešavaju na polju kozmetike i testiram ih. Uvek ide u korak sa vremenom, prati sve što se dešava na svetskoj makeup sceni i taj novi i sveži izgled donosi i kod nas.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/bojan3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-body">
                  <p class="text-muted">Ubrzo Bojan otvara svoj salon "Studio šminkanja Bojan Vukadinov" na Voždovcu u Beogradu, koji je za kratko vreme postao omiljeno mesto za šminkanje mnogih devojaka, a pogotovo javnih ličnosti. U tom salonu svakodnevno se mogu sresti najveće zvezde kako Srbije tako i okoline, koje u Bojanovo znanje i umeće imaju maksimalno poverenja. Studio se nalazi u Ulici Vojvode Stepe 113.</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class="izmedju">
  </div>

  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="section-heading text-uppercase">Usluge</h1><br>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <img class="uslugaSlika" src="img/prva.png" alt="">
          <h4 class="service-heading">Šminkanje za sve prilike</h4>
          <p class="text-muted">Studio šminkanja nudi vam različite usluge šminkanja u zavisnosti od prilike za koju se pripremate. Takođe, moguća je i proba šminke da biste za vaš bitan događaj tačno znale šta vam treba.</p>
        </div>
        <div class="col-md-4">
          <img class="uslugaSlika" src="img/druga.jpg" alt="">
          <h4 class="service-heading">Konsultacije</h4>
          <p class="text-muted">Ukoliko niste sigurni kakvu šminku želite i šta najbolje pristaje vašem licu i ide uz vašu kosu, možete zakazati konsultacije kod Bojana i dobiti stručne savete.</p>
        </div>
        <div class="col-md-4">
          <img class="uslugaSlika" src="img/treca.jpg" alt="">
          <h4 class="service-heading">Izlazak na teren</h4>
          <p class="text-muted">Jedna od najvećih vrlina Bojana Vukadinova jeste to što magiju može da stvori uvek i svuda, bez obzira na okolnosti. Ako vam je potrebna posebna šminka za neki film, seriju ili spot, ovaj studio je pravi izbor za vas.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="izmedju">
  </div>

  <section id="test">
      <div class="container">
          <h1 class="title text-center"><b>ONLINE PRODAVNICA</b></h1>

          <div class="row text-center">
                  <p style="text-align:center;">Veliki izbor paleta senki, karmina i četkica za šminkanje po najpovoljnijim cenama. Poručite vaš proizvod brzo i lako!</p><br><br>
                  <img src="sminka1.jpg" style="position: center; width:1000px; height:auto; margin-left:70px;">
          </div><br>

          <a href="dodatnaKatalog.php" class="btn btn-primary btn-xl text-uppercase" target="_blank" style="margin-left:40%">Pogledajte katalog</a><br>
          <a href="anketa.php" class="anketa" target="_blank" style="margin-left:44%">Ocenite rad online prodavnice<a>
      </div>
    </section>

    <div class="izmedju">
    </div>

  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="section-heading text-uppercase">Galerija</h1><br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <img class="img-fluid" src="img/portfolio/1.jpg" alt="" id="s1">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <img class="img-fluid" src="img/portfolio/2.jpg" alt="" id="s2">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <img class="img-fluid" src="img/portfolio/3.jpg" alt="" id="s3">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <img class="img-fluid" src="img/portfolio/4.jpg" alt="" id="s4">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <img class="img-fluid" src="img/portfolio/5.jpg" alt="" id="s5">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <img class="img-fluid" src="img/portfolio/11.jpg" alt="" id="s6">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
            <img class="img-fluid" src="img/portfolio/12.jpg" alt="" id="s7">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
            <img class="img-fluid" src="img/portfolio/13.jpg" alt="" id="s8">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
            <img class="img-fluid" src="img/portfolio/14.jpg" alt="" id="s9">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal10">
            <img class="img-fluid" src="img/portfolio/15.jpg" alt="" id="s10">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal11">
            <img class="img-fluid" src="img/portfolio/16.jpg" alt="" id="s11">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal12">
            <img class="img-fluid" src="img/portfolio/17.jpg" alt="" id="s12">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal13">
            <img class="img-fluid" src="img/portfolio/18.jpg" alt="" id="s13">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal14">
            <img class="img-fluid" src="img/portfolio/19.jpg" alt="" id="s14">
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal15">
            <img class="img-fluid" src="img/portfolio/20.jpg" alt="" id="s15">
          </a>
        </div>
      </div>
      <div class="col-lg-12 text-center">
        <div id="success"></div>
        <a href="galerija.html" target="_blank" id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase">Prikaži više</a>
      </div>
    </div>
  </section>

  <div class="izmedju">
  </div>

  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="section-heading text-uppercase">Aktuelno</h1><br>

          <div class="row">
            <div class="col-lg-12">
              <ul class="timeline">
                <li>
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="img/uredna1.jpg" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-body">
                      <h2>IN</h2>
                      <p class="text-muted">Tečni iluminatori za lep ten, jer je moderan glossy izgled lica, a oni naglašavaju onaj deo lica na koji se nanesu.</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="img/polomljena2.jpg" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-body">
                      <h2>OUT</h2>
                      <p class="text-muted">Ne postoji mera u šminkanju. Pogrešan način iscrtavanja obrva je jedna od stvari koja šminkere najviše boli.</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <br><br>

          <h2 class="text-uppercase text-lg-left">Novosti:</h2><br>

      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <!--<img class="img-fluid" src="img/skolaSminkanja1.jpg" alt="" id="za">-->
          <img class="img-fluid" src="promocija.jpg" alt="" id="za">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h2 class="text1">Promocija novih paleta</h2>
                <p class="text1">U subotu 01.02.2020. održana je prva po redu promocija novih paleta Bojana Vukadinova. U udobnom ambijentu hotela Metropol predstavljene su nove nijanse senki za kojima su devojke poludele. Nove palete uskoro izlaze u prodaju i moći ćete da ih nabavite putem našeg sajta, na stranici online prodavnice. </p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/masterclass.jpg" alt="" id="protiv">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h2 class="text1">Masterclass u Podgorici</h2>
                <p class="text1">Posle brojnih masterclass-ova održanih po Srbiji, znanje i dobru energiju preneli smo i na Crnu Goru. Masterclass na kom je Bojan kroz smeh i dobru atmosferu omogućio da naučite koje su najčešće greške u šminkanju, kako da brzo i lako našminkate sebe, konačno savršeno izvučete taj ajlajner i mnoge druge trikove održan je 27. januara u Podgorici u hotelu Hilton. Očekujte uskoro druženja i u drugim gradovima!</p>
                <!--<a href="#" class="text-center">Prijavite se</a>-->
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/youtube.jpg" alt="" id="za">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h2 class="text1">Makeup trik na klik</h2>
                <p class="text1">Male tajne Bojana Vukadinova sada su vam dostupne na samo jedan klik. Sada možete pogledati isečak sa prošlogodišnjeg Masterclass-a i pokupiti neke makeup trikove.</p>
                <a href="https://www.youtube.com/watch?v=36iJPkouimY" target="_blank" class="text-center">Pogledaj</a>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

        </div>
      </div>
      <br><br>
      
  </section>

  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="section-heading text-uppercase">Kontakt</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
            <div class="row">
              <div class="col-md-6" style="color: white; text-align:right">
                <div class="form-group">
                  <p>Vojvode Stepe 113, Beograd</p>
                </div>
                <div class="form-group">
                  <p>060/020-7189</p>
                </div>
                <div class="form-group">
                  <a href="https://www.google.com/maps/place/%D0%92%D0%BE%D1%98%D0%B2%D0%BE%D0%B4%D0%B5+%D0%A1%D1%82%D0%B5%D0%BF%D0%B5+113,+%D0%91%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D0%B4/@44.7793031,20.4714006,17z/data=!3m1!4b1!4m5!3m4!1s0x475a705cf35b5257:0xdf4f3fb55a775bfb!8m2!3d44.7793031!4d20.4735946?hl=sr" target="_blank"><img src="slikaAdrese1.jpg" style="width:500px; height:140px;"></img></a>
                </div>
              </div>
              <form action="#" method="post">
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" name="komentar" placeholder="Komentar *" required="required" data-validation-required-message="Please enter a message." style="width:500px;"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" name ="dodaj">Pošaljite komentar</button>
              </div>
            </form>
            <?php
              if(isset($_POST["dodaj"])){
                  $korisnik=$_SESSION['user'];
                  $komentar=$_POST["komentar"];
                  $kolone = "korisnik, komentar";
                  $db->insert("komentari", $korisnik, $komentar, $kolone);
              }
          ?>
            </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/1.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/2.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/3.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/4.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/5.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/11.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 7 -->
  <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/12.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 8 -->
  <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/13.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 9 -->
  <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/14.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 10 -->
  <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/15.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 11 -->
  <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/16.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 12 -->
  <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/17.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 13 -->
  <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/18.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 14 -->
  <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/19.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 15 -->
  <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <img class="img-fluid d-block mx-auto" src="img/portfolio/20.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <script src="js/agency.min.js"></script>

</body>

</html>
