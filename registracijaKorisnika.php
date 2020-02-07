<!DOCTYPE html>

<?php

include("databaseKorisnici.php");
$baza = new DatabaseKorisnici("makeupStudioBojanVukadinov");

?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registracija</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="fontsRegistracija/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<link rel="stylesheet" href="cssRegistracija/style.css">

		<script type="text/javascript" src="jquery-1.10.2.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$("#email").blur(function(){

					var email = $("#email").val();
					var regx = /^([a-z 0-9\.-]+)@([a-z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})?$/;

					if(!regx.test(email)){
						$("#email_message").html("Unesite email u ispravnom formatu!");
						window.setTimeout(function() { $("#email").focus()}, 0);
					}else{
						$("#email_message").html("");
					}
				});
			});
		</script>

	</head>

	<body>

		<div class="wrapper" style="background-image: url('https://media.giphy.com/media/xTiTnxpQ3ghPiB2Hp6/giphy.gif');">
			<div class="inner">
				<div class="image-holder">
					<img src="slikeRegistracija/slikaReg.jpg" alt="">
				</div>
				<form action="" method="post" id="form">
					<h3>Registracija</h3>
					<div class="form-group">
						<input type="text" placeholder="Ime" class="form-control" name="ime" id="ime" required>
						<input type="text" placeholder="Prezime" class="form-control" name="prezime" id="prezime" required>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Korisničko ime" class="form-control" name="korisnickoIme" id="korisnickoIme" required>
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email" class="form-control" name="email" id="email" required>
						<i class="zmdi zmdi-email"></i>
					</div>
					<p id="email_message"></p>
					<div class="form-wrapper">
						<input type="password" placeholder="Lozinka" class="form-control" name="lozinka" id="lozinka" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<p id="lozinka_message"></p>
					<input type="submit" name ="registruj" value="Registruj me" id="dugme"><br><br><br>
					<h3 id="login_message"></h3>
				</form>

				<?php
					if(isset($_POST["registruj"])){
						$ime=$_POST["ime"];
						$prezime=$_POST["prezime"];
						$korisnickoIme=$_POST["korisnickoIme"];
						$email=$_POST["email"];
						$lozinka=$_POST["lozinka"];
						$kolone = "ime, prezime, korisnickoIme, email, lozinka";

						include("konekcijaKorisnici.php");

						$sql = "SELECT * FROM korisnici WHERE korisnickoIme = '".$korisnickoIme."' LIMIT 1";
						$rezultat = $mysqli->query($sql);

						if(!empty($rezultat) && $rezultat->num_rows>=1){
							echo "<script type='text/javascript' src='jquery-1.10.2.js'></script>";
							echo 
								"<script type='text/javascript'>
									$(document).ready(function(){
										$(\"#login_message\").text('Ovaj korisnik već postoji. Pokušajte ponovo!');
									});
								</script>";
						}else{ 
							$insert = 'INSERT INTO korisnici ('.$kolone.') VALUES ("'.$ime.'", "'.$prezime.'", "'.$korisnickoIme.'", "'.$email.'", "'.$lozinka.'")';
							$baza->insert($insert);?>
							<script> location.replace("uspesnaRegistracija.php"); </script>
							<?php
							
						}
					
					}
        		?>

			</div>
		</div>
		
	</body>
</html>