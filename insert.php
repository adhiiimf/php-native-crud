<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>YoiMapren CRUD INSERT</title>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    body{font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: auto;
        margin-left: 12px;
    }
</style>
</head>
<body class="container">
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