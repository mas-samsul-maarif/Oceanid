<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <br><center>
    <table class="table table-bordered border-dark table-striped" align="center">
        <tr bgcolor="#3498DB">
            <th width="10%"><center>NAMA UMUM</th>
            <th width="10%"><center>NAMA ILMIAH</th>
            <th width="9%"><center>KEDALAMAN</th>
            <th><center>KETERANGAN</th>
        </tr>
        <?php 
            foreach($data as $dat){
        ?>
        <tr class="table table-bordered border-secondary table-striped">
            <td><?php echo $dat['umum']; ?></td>
            <td><?php echo $dat['ilmiah']; ?></td>
            <td><?php echo $dat['kedalaman']; ?>m</td>
            <td><?php echo $dat['keterangan']; ?></td>
        </tr>
        <?php } ?>
    </table></center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>