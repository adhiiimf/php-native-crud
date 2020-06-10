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
    <?php
        include 'connect.php';
        $getdata = $connection->query("SELECT * FROM data_peserta");
        while($fetchdata_peserta = $getdata->fetch_assoc()){
    ?>
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
    <tbody>
    <tr>
    <td><?fetchdata_peserta[""]?></td>
    <td><?fetchdata_peserta[""]?></td>
    <td><?fetchdata_peserta[""]?></td>
    <td><?fetchdata_peserta[""]?></td>
    <td><?fetchdata_peserta[""]?></td>
    <td><?fetchdata_peserta[""]?></td>
    <td><?fetchdata_peserta[""]?></td>
    <td><?fetchdata_peserta[""]?></td>
    </tr>
    </tbody>
    </table>
    <?php
        }
    ?>
</body>
</html>