<!DOCTYPE html>

<?php

include("databaseKategorije.php");
$crudKategorije = new DatabaseKategorije("makeupstudiobojanvukadinov");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Skole sminkanja</title>
    <link rel = "stylesheet" href = "stylePrikazTabeleMalaDopuna.css" />
    <link rel = "stylesheet" href = "css/bootstrap.min.css" />
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src = "js/bootstrap.min.js"></script>
    
</head>
<body>

<div class = "col-md-2"></div>

<div class = "col-md-8">
        <div class = "row">

        <table border ="1" width="300" cellpadding="5" cellspacing="2" style="text-align:center ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cena</th>
                        <th>Datum od</th>
                        <th>Datum do</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                for($i=0; $i<count($skole); $i++){
                ?>
                    <tr>
                        <td><?php echo $skole[$i]->getId(); ?></td>
                        <td><?php echo $skole[$i]->getCena(); ?></td>
                        <td><?php echo $skole[$i]->getDatumOd(); ?></td>
                        <td><?php echo $skole[$i]->getDatumDo(); ?></td>
                        <td><a href="#">Prijavi se</a></td>
                    </tr>

                <?php
                }
                ?>

                </tbody>
            </table>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
    <script src="jscriptKatalog.js"></script>
</body>
</html>
