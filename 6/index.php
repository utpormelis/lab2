<?php 
    $nombre=$_GET["nb"];
    $nota1=$_GET["n1"];
    $nota2=$_GET["n2"];
    $nota3=$_GET["n3"];
    $examen=$_GET["n4"];
    $trabajo=$_GET["n5"];
    $p=($nota1+$nota2+$nota3)/3;
    $promedio=$p*0.55;
    $pexamen=$examen*0.3;
    $ptrabajo=$trabajo*0.15;
    $pfinal=$promedio+$pexamen+$ptrabajo;
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
    <title>Programa 6</title>
</head>
<body>
    
    <div class="container-sm">
    <br>
        <h3 text-align:center>Calificación final en la materia de Algoritmos</h3>
    <br>

    <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Alumno</th>
                <th scope="col">% 3 Parciales</th>
                <th scope="col">% examen final</th>
                <th scope="col">% trabajo final</th>
                <th scope="col">Calificacion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nombre?></td>
                <td><?php echo $promedio?></td>
                <td><?php echo $pexamen?></td>
                <td><?php echo $ptrabajo?></td>
                <td><?php echo $pfinal?></td>
            </tr>

        </tbody>
    </table>

    </div>
     <div class="container-sm">
        <br>
            <H4>index.php?nb=ormelis&n1=70&n2=100&n3=100&n4=100&n5=100</H4>   
    </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>