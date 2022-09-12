<?php

$ht= $_GET["ht"];
$pph=$_GET["pph"];
$sb=$ht*$pph;
$descuento=$sb*0.2;
$sn=$sb-$descuento;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 4</title>
</head>
<body>
    `http://lab2.com/4/index.php?pph=10&ht=80`
<div class="container-sm">
    
<table class="table">
    <thead>
        <tr>
            <th scope="col">Horas trabajadas</th>
            <th scope="col">Pago por hora</th>
            <th scope="col">Salario bruto</th>
            <th scope="col">Descuento</th>
            <th scope="col">Salario neto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row"><?php echo $ht?></th>
            <td><?php echo $pph?></td>
            <td><?php echo $sb?></td>
            <td><?php echo $descuento?></td>
            <td><?php echo $sn?></td>
        </tr>
    </tbody>
</table>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>