<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 21</title>
</head>
<body>
    
    <div class="container-sm">
    <br>
    <br>

            <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">valor</th>
                        <th scope="col">grafico utilizando progres bar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    for($i=0; $i<=10;$i++){
                        $numero=rand(0,100);
                        $color="";
                        if ($numero<61){
                            $color="secondary";
                            }elseif ($numero<=70){
                                $color="danger";
                            }elseif ($numero<=80){
                                $color="warning";
                            }elseif ($numero<=90){
                                $color="info";
                            }else{
                                $color="success";
                            }
                            
                            ?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $numero?></td>
                            <td><div class="progress">
                                <div class="progress-bar bg-<?php echo $color?> progress-bar-striped progress-bar-animated" role="progressbar" style="width:<?php echo $numero?>%;" aria-valuenow="<?php echo $numero?>" aria-valuemin="0" aria-valuemax="100"><?php echo $numero?>%</div>
                            </div></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>