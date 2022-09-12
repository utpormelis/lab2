<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 18</title>
</head>
<body>
    
    <div class="container-sm">
        <br>   
        <br> 

        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Encriptado</th>
                    <th scope="col">ver</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i=0; $i<=100;$i++){?>
                <tr>
                    <th scope="row"><?php echo $i?></th>
                    <td><?php echo md5($i)?></td>
                    <td><a href="md5.php?valor=<?php echo $i?>&num=<?php echo md5($i)?> "><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button></a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>