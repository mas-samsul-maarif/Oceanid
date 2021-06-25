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
    <table class="table table-bordered border-dark table-striped table1" align="center">
        <tr bgcolor="#3498DB">
            <th width="10%"><center>NAMA UMUM</th>
            <th width="10%"><center>NAMA ILMIAH</th>
            <th width="9%"><center>KEDALAMAN</th>
            <th><center>KETERANGAN</th>
            <th width="11%"><center>AKSI</td>
        </tr>
        <?php 
            foreach($data as $dat){
        ?>
        <tr>
            <td><?php echo $dat['umum']; ?></td>
            <td><?php echo $dat['ilmiah']; ?></td>
            <td><?php echo $dat['kedalaman']; ?></td>
            <td><?php echo $dat['keterangan']; ?></td>
            <td><center><a class='btn btn-danger' href="<?php echo base_url()."index.php/hal_admin/hapus_pending/".$dat['nomer']; ?>">Hapus</a>
                <a class='btn btn-primary' href="<?php echo base_url()."index.php/hal_admin/ambil_pending/".$dat['nomer']; ?>">Edit</a>
                <a class='btn btn-success' href="<?php echo base_url()."index.php/hal_admin/kirim_pending/".$dat['nomer']; ?>">Accept</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>