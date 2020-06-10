<!DOCTYPE html>
<html>
<head>
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
</head>
</html>