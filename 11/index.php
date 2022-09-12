<?php 
$cm=$_GET["cm"];
$plg=$cm*0.393701;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        h3 {
            width:700px;
            margin: 0 auto;
            text-align: center;
            }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 11</title>
</head>
<body>
    
    <div class="container-sm">
        <br>
        <br>
        <FONT COLOR="navy"><h3 >Conversiòn de </FONT><b>Cm</b><FONT COLOR="navy"> a </FONT><b>Pulgadas</b></h3>
        <br>
        <br>
        Ingrese los Centimetros en el url. 

    </div>

        <div class="container-sm">
            <br>
            <br>
            <h4><?php echo $cm?> Centimetros son  <?php echo $plg?> Pulgadas.</h4>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>