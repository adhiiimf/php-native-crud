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
        <label>Username:</label>
        <input type="text" name="username" class="form-control" placeholder="08xxxxxxxx" required>
    </div>
    <div>
        <label>Alamat:</label>
        <input type="text" name="alamat" class="form-control" placeholder="08xxxxxxxx" required>
    </div>
    <div>
        <label>Nomor HP:</label>
        <input type="number" name="hp" class="form-control" placeholder="08xxxxxxxx" required>
    </div>
    <div>
        <label>E-mail:</label>
        <input type="text" name="email" class="form-control" placeholder="***@gmail.com" required>
    </div>
    <div>
        <label>Password:</label>
        <input type="password" name="pass" class="form-control" placeholder="**********" required>
    </div>
    <div>
        <button type="submit" class="btn btn-success">SUBMIT</button>
    </div>
    </form>
    <?php
        if(isset($_SESSION["message"])){
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }
    ?>
</body>
</html>