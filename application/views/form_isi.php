<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <title>Document</title>
</head>
<body>
    <br>
    <center>
    <div class='card' style="width: 500px; height: 270px;"><br>
    <form action="<?php echo base_url()."index.php/hal_utama/tambah_data"?>" method="POST">
    <table class='table1'>
        <tr><td>Nama Umum:</td><td> <input style="width: 350px;" type="text" name="umum"> </td>
        <tr><td>Nama Ilmiah: </td><td><input style="width: 350px;" type="text" name="ilmiah"></td>
        <tr><td>kedalaman: </td><td><input style="width: 350px;" type="text" name="kedalaman"></td>
        <tr><td>keterangan: </td><td><input style="width: 350px;" type="text" name="keterangan"></td>
    </table><br>
        <input type="submit"> <input type="reset">
    </form> 
    </div>
</body>
</html>