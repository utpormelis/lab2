<?php 
$clientes=$_GET["ps"];
if ($clientes>200 && $clientes<=300){
    $result=$clientes*300;
}elseif($clientes>300){
    $result=$clientes*75;
}else{
    $result=$clientes*95;
};

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
    <title>Programa 13</title>
</head>
<body>
    
    <div class="container-sm">
        <br>
        <FONT COLOR="brown"><h3>La Langosta ahumada</h3></FONT>
        <br>
        <br>
        <h4 color-text:#229954>Ingrese la cantidad de personas para su reserva :</h4>
        
            <br>
            <br>
            <h4>El monto a pagar es de: <FONT COLOR="brown"><b><?php echo $result?></b></FONT>.</h4>
             

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>