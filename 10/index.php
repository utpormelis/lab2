<?php 
    $horas=$_GET["hr"];
    $minutos=$_GET["mt"];
    $segundos=$_GET["sg"];
    $calculo=($horas*3600)+($minutos*60)+$segundos;
    $result=$calculo*0.25;
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
    <title>Programa 10</title>
</head>
<body>
    <br>
    <FONT COLOR="navy"><h3 >Calculo de CASH $ x Tiempo</h3></FONT>
    
    <br>
    
    <div class="container-sm">
        
        Ingrese las horas trabajadas en el formato solicitado: H/MIN/S
            <br>
            <br>
            <b><?php echo $calculo?></b>  es el total de <b>Segundos trabajados</b>
            <br><br> eso equivale a<b> $ <?php echo $result?>.</b>

    </div>

    <div class="container-sm">
        <br>
        <br>
        <H3>Link url prueba</H3>
        <br>
        <h4>index.php?hr=2&mt=10&sg=60</h4>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>