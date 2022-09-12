<?php 
    $nombre=$_GET["nb"];
    $nota1=$_GET["n1"];
    $nota2=$_GET["n2"];
    $nota3=$_GET["n3"];
    $nota4=$_GET["n4"];
    $nota5=$_GET["n5"];
    $promedio=($nota1+$nota2+$nota3+$nota4+$nota5)/5;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        h3 {
            width:500px;
            margin: 0 auto;
            text-align: center;
            }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 5</title>
</head>
<body>
    <br>
        <h3>Promedio de calificaciones</h3>
    <br>
<div>
    <div class="container-sm">
    
<table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
    <thead>
        <tr>
            <th scope="col">Alumno</th>
            <th scope="col">Promedio</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $nombre?></td>
            <td><?php echo $promedio?></td>
        </tr>
    </tbody>
</table>

    </div>
</div>
<br>
<h5>index.php?nb=ormelis&n1=90&n2=90&n3=70&n4=40&n5=70</h5>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
º