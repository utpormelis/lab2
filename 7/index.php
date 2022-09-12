<?php 
    $pres=$_GET["ps"];
    $p1=$pres*0.4;
    $p2=$pres*0.3;
    $p3=$pres*0.3;
    $total=$p1+$p2+$p3;

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
    <title>Programa 7</title>
</head>
<body>
    <br>
    <h3>Division Anual del Presupuesto</h3>
    <br>
    <br>
<div class="container-sm">

    <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Area</th>
                <td scope="col">Monto Presupuestal</td>
                <td scope="col">Ginecologia</td>
                <td scope="col">Traumatologia</td>
                <td scope="col">Pediatria</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Porcentaje $</th>
                <th scope="row"><?php echo $total?></th>
                <td><?php echo $p1?></td>
                <td><?php echo $p2?></td>
                <td><?php echo $p3?></td>
            </tr>
        </tbody>
    </table>

</div>

<div class="container-sm">
<br>
    <h4>index.php?ps=1600</h4>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>