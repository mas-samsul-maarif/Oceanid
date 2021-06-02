<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($datanya as $dat){ ?>
    <form action="<?php echo base_url()."index.php/hal_admin/update_data"?>" method="POST">
        nomer: <input type="text" name="nomer" readonly value="<?php echo $dat['nomer']; ?>"><br>
        umum: <input type="text" name="umum" value="<?php echo $dat['umum']; ?>"><br>
        ilmiah: <input type="text" name="ilmiah" value="<?php echo $dat['ilmiah']; ?>"><br>
        kedalaman: <input type="text" name="kedalaman" value="<?php echo $dat['kedalaman']; ?>"><br>
        keterangan: <input type="text" name="keterangan" value="<?php echo $dat['keterangan']; ?>"><br>
        <input type="submit"> <input type="reset">
    </form> 
    <?php } ?>
</body>
</html>