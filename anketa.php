
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html">
    <title>Anketa</title>
    <link rel="stylesheet" href="styleAnketa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" 
    integrity="sha256-/sdxenK1NDowSNuphgwjv8wSosSNZB0t5koXqd7XqOI=" crossorigin="anonymous" />

    <script type="text/javascript" src="jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
    $(".radiodugme").change(function(){
    var vrednost = $("input[name='vote']:checked").val();
    $.get("prikazGlasanja.php", { glas: vrednost },
    function(data){
    $("#poll").html(data);
    });
    });
    });
    </script>

</head>
<body>
    <div class="container">
        <?php
        include "oceneKonekcija.php";
        $sql="SELECT * FROM ocene";
        $rezultat = $mysqli->query($sql);
        ?>

        <div id="poll">
        <h2>Ocenite rad online prodavnice:</h2>
        <form>
        <?php
        while($red = $rezultat->fetch_object()){
        ?>
        <?php echo $red->naziv;?>
        <input type="radio" name="vote" value="<?php echo $red->id;?>" class="radiodugme">
        <br>
        <br>
        <?php
        }
        $mysqli->close();
        ?>
        </form>
        </div>

    </div>
</body>
</html>