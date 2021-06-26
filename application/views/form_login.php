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
<br>
    <center>
    <div class='card' style="width: 500px; height: 270px;"><br>
    <form action="<?php echo base_url()."index.php/hal_utama/aksi_login"?>" method="POST">
    <table class='table1'>
        <tr><td>Username:</td><td> <input style="width: 350px;" type="text" name="user"> </td>
        <tr><td>Password: </td><td><input style="width: 350px;" type="text" name="pass"></td>
    </table><br>
        <input class='btn btn-success' type="submit"> <input class='btn btn-danger' type="reset">      
    </form> 
    </div>
</body>
</html>