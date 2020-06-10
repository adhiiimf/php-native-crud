<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>YoiMapren CRUD INSERT</title>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style/main.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="container" id="main">
    <h1>YoiMapren CRUD INSERT</h1>
    <h2>Insert Your Data Here!</h2><br>
    <form action="addproduct.php" method="post">
    <div>
        <label>Nama Lengkap:</label>
        <input type="text" name="nama" class="form-control" placeholder="input your name here" required>
    </div>
    <div>
        <label>Nomor Telepon:</label>
        <input type="number" name="telp" class="form-control" placeholder="08xxxxxxxx" required>
    </div>
    <div>
        <label>Jenis Kelamin:</label>
        <select name="jenis_kelamin" class="form-control">
        <option value="PRIA">L</option>
        <option value="PEREMPUAN">P</option>
        </select>
    </div>
    <div>
        <label>Tingkat Pendidikan:</label>
        <select name="pendidikan" class="form-control">
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="KULIAH">KULIAH</option>
        </select><br>
    </div>
    <div>
        <button type="submit" class="btn btn-success">SUBMIT</button>
    </div>
    <!--
    <table>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Nomor Telepon</td>
        <td>:</td>
        <td><input type="number" name="telp"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><select name="jenis_kelamin" id="jenis_kelamin">
            <option value="PRIA">L</option>
            <option value="PEREMPUAN">P</option>
        </select></td>
    </tr>
    <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td><select name="pendidikan" id="pendidikan">
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="KULIAH">KULIAH</option>
        </select></td>
    </tr>
    <tr>
        <td><button>SUBMIT</button></td>
    </tr>
    </table>!-->
    </form>
    <?php
        if(isset($_SESSION["message"])){
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }
    ?>
</body>
</html>