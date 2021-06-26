<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
    <title>Ocean.id</title>
</head>
<body>
    <br><center>
    <?php foreach($datanya as $dat){ ?>
    <div class='card' style="width: 500px; height: 270px;">
        <form action="<?php echo base_url()."index.php/hal_admin/update_data"?>" method="POST">
            <table class='table1'><br>
                <tr><td>No: </td><td><input type="text" name="nomer" readonly value="<?php echo $dat['nomer']; ?>"></td>
                <tr><td>Nama Umum: </td><td><input type="text" name="umum" value="<?php echo $dat['umum']; ?>"></td>
                <tr><td>Nama Ilmiah: </td><td><input type="text" name="ilmiah" value="<?php echo $dat['ilmiah']; ?>"></td>
                <tr><td>Kedalaman: </td><td><input type="text" name="kedalaman" value="<?php echo $dat['kedalaman']; ?>"></td>
                <tr><td>Keterangan: </td><td><input type="text" name="keterangan" value="<?php echo $dat['keterangan']; ?>"></td>
            </table><br>
            <input class='btn btn-success' type="submit"> <input class='btn btn-danger' type="reset">
    </form> 
    <?php } ?>
</body>
</html>