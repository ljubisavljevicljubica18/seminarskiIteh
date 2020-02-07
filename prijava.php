<?php

session_start();
if(isset($_SESSION['user']))
    {
        header("Location: index.php");
    }
if(isset($_SESSION['user1']))
    {
        header("Location: admin.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/prijava.css" rel="stylesheet">
    <title>Makeup studio Bojan Vukadinov</title>
</head>
<body>
    <header class="masthead">
        <div class="container">
          <div class="intro-text">
            <div class="intro-heading text-uppercase">MAKEUP STUDIO BOJAN<br> VUKADINOV</div>
            <div class="intro-lead-in">Dobrodošli!</div>
          </div>
        </div>
      </header>
    <div class="container">
        <button class="btn btn1"><a href="prijavaKorisnika.php">KORISNIK</a></button>
        <button class="btn btn2"><a href="prijavaAdministratora.php">ADMINISTRATOR</a></button>
    </div>
</body>
</html>