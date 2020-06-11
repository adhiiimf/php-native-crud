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
<body class="bg-dark text-light">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#">
  <img src="style/img/joker.jpg" alt="YoiMapren's Logo" style="width:40px;"></a>
  <ul class="navbar-nav rounded-right mx-2">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">Insert</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="view.php">View</a>
    </li>
  </ul>
</nav>
    <br>
<div class="container" style="margin-top: 84px;">    
    <h1 class="text-center text-light">YoiMapren CRUD INSERT</h1>
    <h2 class="text-center text-light">Insert Your Data Here!</h2><br>
    <form action="addproduct.php" method="post">
    <div>
        <label>Nama Lengkap:</label>
        <input type="text" name="nama" class="form-control" placeholder="nama lengkap" required>
    </div>
    <div>
        <label>Username:</label>
        <input type="text" name="username" class="form-control" placeholder="yoiskuy" required>
    </div>
    <div>
        <label>Alamat:</label>
        <textarea name="alamat" cols="5" class="form-control" rows="4" placeholder="Street Yoimapren Number 51 Post Code 25376134"></textarea>

    </div>
    <div>
        <label>Nomor HP:</label>
        <input type="number" name="hp" class="form-control" placeholder="08xxxxxxxx" required>
    </div>
    <div>
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control" placeholder="********@gmail.com" required>
    </div>
    <div>
        <label>Password:</label>
        <input type="password" name="pass" class="form-control" placeholder="**********" required><br>
    </div>
    <div class="align-items-center">
        <button type="submit" class="btn btn-success">SUBMIT</button><br><div><?php
        if(isset($_SESSION["message"])){
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }
    ?></div>
    </div>
    </form><br>
</div>
<footer class="bg-dark text-center">
<p>©2020 Yoimapren</p>
<ul class="list-inline">
<li class="list-inline-item"><a href="https://daskomlab.com">Daskomweb</a></li>
<li class="list-inline-item"><a href="https://github.com/yoimapren">Github</a></li>
</ul>
</footer>
</body>
</html>