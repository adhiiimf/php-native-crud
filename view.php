<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style/main.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<h1>LIHAT DATA</h1>
    <table class="table-bordered table table-hover">
    <br>
    <thead>
    <tr>
    <th>NO.</th>
    <th>Nama Lengkap</th>
    <th>Username</th>
    <th>Alamat</th>
    <th>No. HP</th>
    <th>Email</th>
    <th>Password</th>
    <th colspan="2">Action</th>
    </tr>
    </thead>
    <?php
        include 'connect.php';
        $getdata = $connection->query("SELECT * FROM dataku");
        while($fetchdataku = $getdata->fetch_assoc()){
    ?>
    <tbody>
    <tr>
    <td><?fetchdataku["no_id"]?></td>
    <td><?fetchdataku["nama"]?></td>
    <td><?fetchdataku["username"]?></td>
    <td><?fetchdataku["alamat"]?></td>
    <td><?fetchdataku["hp"]?></td>
    <td><?fetchdataku["email"]?></td>
    <td><?fetchdataku["pass"]?></td>
    </tr>
    </tbody>
    </table>
    <?php
        }
    ?>
</body>
</html>