<?php 
    $aport1=$_GET["p1"];
    $aport2=$_GET["p2"];
    $aport3=$_GET["p3"];
    $suma=$aport1+$aport2+$aport3;
    $porc1=$aport1/$suma*100;
    $porc2=$aport2/$suma*100;
    $porc3=$aport3/$suma*100;
    $total=$porc1+$porc2+$porc3;
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
    <title>Programa 8</title>
</head>
<body>
    <br>
    <h3>Fundar Empresa</h3>
    <br>
    <br>
    <div class="container-sm">
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Monto $</th>
                    <th scope="col">Aporte 1</th>
                    <th scope="col">Aporte 2</th>
                    <th scope="col">Aporte 3</th>
                    <th scope="col">% Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $suma?></th>
                    <td><?php echo $porc1. " %"?></td>
                    <td><?php echo $porc2. " %"?></td>
                    <td><?php echo $porc3. " %"?></td>
                    <td><?php echo $total. " %"?></td>
                </tr>
            </tbody>
        </table>
    </div>
        <br>
    <div class="container-sm">
        <h4>index.php?p1=200&p2=500&p3=150</h4>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>