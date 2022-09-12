<?php 
$monto=$_GET["mt"];
$tipo=$_GET["tp"];
if($tipo==1){
$result=($monto*0.25)+$monto;
$porc="25%";
}elseif($tipo==2){
$result=($monto*0.35)+$monto;
$porc="35%";
}elseif($tipo==3){
$result=($monto*0.40)+$monto;
$porc="40%";
}else{
$result=($monto*0.50)+$monto;
$porc="50%";
}
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
    <title>Programa 15</title>
</head>
<body>
    <br>
    <h3>Banco "Pueblo desconocido"</h3>
    <br>
    <br>
    <div class="container-sm">
        <h4>Ingrese el monto de su tarjeta, Tipo de tarjeta!</h4>
        <br>
        <br>
        <h6>Como cliente tipo <?php echo $tipo?> El banco "Pueblo desconocido" le aumentara un <FONT COLOR="red"><?php echo $porc?></FONT> a su credito.</h6>
        <br>
        <br>
        <h5>Su nuevo limite es de <FONT COLOR="green">$<?php echo $result?></FONT>.</h5>
    </div>
    
    <div class="container-sm">
        <br>
        <br>
        <h6>prueba url... index.php?mt=100&tp=2</h6>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>