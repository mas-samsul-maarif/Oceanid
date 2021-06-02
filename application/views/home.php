<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><center>
    <br>
    <table border="1">
        <tr>
            <td>Umum</td>
            <td>Ilmiah</td>
            <td>Kedalaman</td>
            <td>Keterangan</td>
        </tr>
        <?php 
            foreach($data as $dat){
        ?>
        <tr>
            <td><?php echo $dat['umum']; ?></td>
            <td><?php echo $dat['ilmiah']; ?></td>
            <td><?php echo $dat['kedalaman']; ?></td>
            <td><?php echo $dat['keterangan']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>