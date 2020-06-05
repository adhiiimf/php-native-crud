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
    <table border="5" style="display:inline-table;width:200px;">
        <tr>
        <td><strong><?=$fetchdata_peserta["nama"]?></strong></td>
            <td><?=$fetchdata_peserta["telp"]?></td>
            <td><?=$fetchdata_peserta["jenis_kelamin"]?></td>
            <td><?=$fetchdata_peserta["pendidikan"]?></td>
        </tr>
    </table>
    <?php
        }
    ?>
    
</body>
</head>
</html>