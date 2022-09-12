<?php 
$anios=$_GET["year"];
if($anios==1){
$bono=100;
}elseif($anios==2){
$bono=200;
}elseif($anios==3){
$bono=300;
}elseif($anios==4){
$bono=400;
}elseif($anios==5){
$bono=500;
}else{
$bono=1000;
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
    <title>Programa 14</title>
</head>
<body>
    <br>
     <h3>Bono por antiguedad : </h3>   
     <br>

        <div class="container-sm">
            
             Ingrese sus años de labores en nuestra empresa. 
            <br>
            <br>
            <h2>Estimad@ usted a recibido un bono de $<?php echo $bono?> por su compromiso.</h2>

        </div>

        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>