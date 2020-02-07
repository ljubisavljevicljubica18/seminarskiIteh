<?php

session_start();
if(isset($_SESSION['user']))
    {
        header("Location: index.php");
    }

if(isset($_POST['username'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    include("konekcijaKorisnici.php");

    $sql = "SELECT * FROM korisnici WHERE korisnickoIme = '".$user."' AND lozinka='".$pass."' LIMIT 1";
	$rezultat = $mysqli->query($sql);

    if(!empty($rezultat) && $rezultat->num_rows==1){
		$_SESSION['user'] = $user;
        header("Location: index.php");
    }else{
        echo "<script type='text/javascript' src='jquery-1.10.2.js'></script>";
        echo 
            "<script type='text/javascript'>
                $(document).ready(function(){
                    $(\"#login_message\").text('Greska pri unosu! Pokušajte ponovo.');
                });
            </script>";
    }
    $mysqli->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Prijava korisnika</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorPrijaveKorisnika/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontsPrijaveKorisnika/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontsPrijaveKorisnika/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorPrijaveKorisnika/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendorPrijaveKorisnika/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorPrijaveKorisnika/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorPrijaveKorisnika/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendorPrijaveKorisnika/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cssPrijaveKorisnika/util.css">
	<link rel="stylesheet" type="text/css" href="cssPrijaveKorisnika/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('slikePrijaveKorisnika/slika2.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="#">

					<span class="login100-form-title p-b-34 p-t-27">
						<h1>Korisnik:</h1>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Unesite korisničko ime">
						<input class="input100" type="text" name="username" placeholder="Korisničko ime">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Unesite lozinku">
						<input class="input100" type="password" name="password" placeholder="Lozinka">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn" value="Prijavi me">
							Prijavi me
						</button>
                    </div><br>
                    <h5 id="login_message" class="text-center"></h5>

					<div class="text-center p-t-90">
						<p class="txt1">
							Nemate nalog? Registrujte se <a class="txt1" href="registracijaKorisnika.php">OVDE</a>.
						</p>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendorPrijaveKorisnika/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorPrijaveKorisnika/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorPrijaveKorisnika/bootstrap/js/popper.js"></script>
	<script src="vendorPrijaveKorisnika/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorPrijaveKorisnika/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorPrijaveKorisnika/daterangepicker/moment.min.js"></script>
	<script src="vendorPrijaveKorisnika/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendorPrijaveKorisnika/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="jsPrijaveKorisnika/main.js"></script>

</body>
</html>