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

include "databaseKategorije.php";
$crudKategorije = new DatabaseKategorije("makeupstudiobojanvukadinov");

?>

<!DOCTYPE html>

<?php

include("databaseKorisnici.php");
$baza = new DatabaseKorisnici("makeupStudioBojanVukadinov");

?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Skola sminkanja</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="fontsRegistracija/material-design-iconic-font/css/material-design-iconic-font.min.css">

        <link rel="stylesheet" href="cssRegistracija/style.css">
        
        <script type="text/javascript" src="jquery-1.10.2.js"></script>
        <script type="text/javascript">
        $(document).ready(
            function () {
                $("#kombo_kategorije").change(
                    function(){
                        var vrednost = $("#kombo_kategorije").val();
                        $.get("prikazDodatna.php", { id: vrednost },
                            function(data){
                                $("#popuni").html(data);
                        });
                });
        });
    </script>

	</head>

	<body>

		<div class="wrapper" style="background-image: url('https://media.giphy.com/media/xTiTnxpQ3ghPiB2Hp6/giphy.gif');">
			<div class="inner">
				<div class="image-holder">
					<img src="img/druga.jpg" alt="">
				</div>
				<form action="" method="post" id="form">
                    <h3>Prijavite se za skolu sminkanja:</h3>
                    <h4>Korisnik : <?php echo $_SESSION['user']; ?> </h4><br><br>
					
                    <div class="container">
                        <form> 
                            <b>Izaberite mesto:</b>
                            <select name="kategorije" id="kombo_kategorije">
                            <?php
                                $crudKategorije->select();
                                while($redKategorije=$crudKategorije->getResult()->fetch_object()){
                            ?>
                            <option value="<?php echo $redKategorije->id;?>"><?php echo $redKategorije->nazivMesta;?></option>
                            <?php
                            }
                            ?>
                            </select><br>
                        </form>
                        <p><div id="popuni"></div></p>
                    </div>

			</div>
		</div>
		
	</body>
</html>