<?php
    session_start();
    if(!isset($_SESSION['user1']))
    {
    header("Location: prijavaAdministratora.php");
    }

?>

<!DOCTYPE html>

<?php
include("databaseNovo.php");
$db = new DatabaseNovo("makeupstudiobojanvukadinov");

include "databaseKategorijeNovo.php";
$crudKategorije = new DatabaseKategorijeNovo("makeupstudiobojanvukadinov");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin - Rad sa bazom</title>
    <link rel="stylesheet" href="styleAdminIzmene.css">
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="lightbox.min.css">
    <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>

    <script type="text/javascript" src="jquery-1.10.2.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#tipTekst").blur(function(){
                var vrednost = $("#tipTekst").val();
                $.get("adminIzmeneValidacija.php", { nazivDodavanje: vrednost },
                function(data){
                    if (data == 0){
                        $("#poruka").html("Proizvod sa takvim nazivom već postoji u bazi");
                        $("#tipTekst").focus();
                    }
                    if (data == 1){
                        $("#poruka").html("Naziv proizvoda je dostupan");
                    }   
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#tipId").blur(function(){
                var vrednost = $("#tipId").val();
                $.get("adminIzmeneValidacijaUpdate.php", { idIzmena: vrednost },
                function(data){
                    if (data == 1){
                        $("#poruka1").html("Proizvod sa ovim id ne postoji u bazi");
                        $("#tipId").focus();
                    }
                    if (data == 0){
                        $("#poruka1").html("Ovaj proizvod se moze izmeniti");
                    } 
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#tipId1").blur(function(){
                var vrednost = $("#tipId1").val();
                $.get("adminIzmeneValidacijaDelete.php", { idBrisanje: vrednost },
                function(data){
                    if (data == 1){
                        $("#poruka2").html("Proizvod sa ovim id ne postoji u bazi");
                        $("#tipId1").focus();
                    }
                    if (data == 0){
                        $("#poruka2").html("Ovaj proizvod se moze obrisati");
                    }  
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(
            function () {
                $("#kombo_kategorije").change(
                    function(){
                        var vrednost = $("#kombo_kategorije").val();
                        $.get("prikazDodatnaNovo.php", { id: vrednost },
                            function(data){
                                $("#popuni").html(data);
                        });
                });
        });
    </script>

</head>
<body>

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color:black; font-size:80px"><b>Makeup studio Bojan Vukadinov</b></h1>
                    <h5 style="color:black">Dobrodošli <?php echo $_SESSION['user1']; ?></h5>
                </div>
            </div>
        </div>
    </section>

    <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><p>RAD SA BAZOM PROIZVODA</p></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="#insert">DODAJ</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#update">IZMENI</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#delete">OBRIŠI</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="odjaviMe.php">ODJAVI ME</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
    </section>

    <section id="sviProizvodi">
        <div id="zajedno">
            <div class="container">
                <h1 class="title text-center"><b>PROIZVODI:</b></h1>
                <form> 
                    <b>Izaberi kategoriju proizvoda:</b>
                    <select name="kategorije" id="kombo_kategorije">
                    <?php
                        $crudKategorije->select();
                        while($redKategorije=$crudKategorije->getResult()->fetch_object()){
                    ?>
                    <option value="<?php echo $redKategorije->id;?>"><?php echo $redKategorije->naziv;?></option>
                    <?php
                    }
                    ?>
                    </select>
                </form>
                <p><div id="popuni"></div></p>
            </div>
        </div>
    </section>

    <section id="insert">
        <div id="zajedno">
            <div class="container">
                <h1 class="title text-center"><b>DODAJ PROIZVOD</b></h1>
                <form action="admin.php" method="post">
            Unesite naziv: <input type="text" name="nazivDodavanje" id="tipTekst"><br>
                           <div id="poruka"></div><br><br>
            Unesite url slike: <input type="text" name="slikaDodavanje" id="tipTekst2"><br><br>
            Unesite cenu: <input type="text" name="cenaDodavanje" id="tipTekst3"><br><br>

            Izaberite kategoriju:
            <select id="kategorijaa" name="kategorijaa">
                <option value="1">Palete senki</option>
                <option value="2">Karmini</option>
                <option value="3">Cetkice za sminkanje</option>
            </select>

            <br><br>
            <input type="submit" name ="dodaj" value="Dodaj" class="btn-primary"><br>
        </form>
        <?php
            if(isset($_POST["dodaj"])){
                $naziv=$_POST["nazivDodavanje"];
                $slika=$_POST["slikaDodavanje"];
                $cena=$_POST["cenaDodavanje"];

                $kategorijaa = filter_input(INPUT_POST, "kategorijaa");
                if ($kategorijaa == 1) {
                    $kategorija = 1;
                } elseif ($kategorijaa == 2) {
                    $kategorija = 2;
                } elseif ($kategorijaa == 3) {
                    $kategorija = 3;
                }

                $kolone = "naziv, slika, cena, kategorija";
                $db->insert("proizvodi", $naziv, $slika, $cena, $kategorija, $kolone);
            }
        ?>
            </div>
        </div>
    </section>

        <section id="update">
        <div id="zajedno">
            <div class="container">
                <h1 class="title text-center"><b>IZMENI PROIZVOD</b></h1>
                <form action="admin.php" method="post">
            Unesite id za izmenu: <input type="text" name="idIzmena" id="tipId"><br><br>
                            <div id="poruka1"></div><br><br>
            Naziv: <input type="text" name="nazivIzmena" id="tekst1"><br><br>
            Slika: <input type="text" name="slikaIzmena" id="tekst2"><br><br>
            Cena: <input type="text" name="cenaIzmena" id="tekst3"><br><br>
            Kategorija: <input type="text" name="kategorijaIzmena" id="tekst4"><br><br>
            <input type="submit" name ="izmeni" value="Izmeni" class="btn-primary"><br>
        </form>
        <?php
            if(isset($_POST["izmeni"])){
                $id=$_POST["idIzmena"];
                $naziv=$_POST["nazivIzmena"];
                $slika=$_POST["slikaIzmena"];
                $cena=$_POST["cenaIzmena"];
                $kategorija=$_POST["kategorijaIzmena"];
                $nizVrednosti = array($id, $naziv, $slika, $cena, $kategorija);
                $db->update("proizvodi", $nizVrednosti);
            }
        ?>
                   
            </div>
        </div>
    </section>

    <section id="delete">
        <div id="zajedno">
            <div class="container">
                <h1 class="title text-center"><b>OBRIŠI PROIZVOD</b></h1>
                <form action="admin.php" method="post">
            Unesite id za brisanje: <input type="text" name="idBrisanje" id="tipId1"><br><br>
                                <div id="poruka2"></div><br><br>
            <input type="submit" name ="obrisi" value="Obrisi" class="btn-primary"><br>
        </form>
        <?php
            if(isset($_POST["obrisi"])){
                $id=$_POST["idBrisanje"];
                $id=(int)$id;
                $db->delete("proizvodi", $id);
            }
        ?>
                   
            </div>
        </div>
    </section>

    <script src="smooth-scroll.js">
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

</body>
</html>