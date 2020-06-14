<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style/main.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<style></style>
</head>
<body class="bg-dark text-light">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#">
  <img src="style/img/joker.jpg" alt="YoiMapren's Logo" style="width:40px;"></a>
  <ul class="navbar-nav rounded-right mx-2">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="insert.php">Insert</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="view.php">View</a>
    </li>
  </ul>
</nav>

<div class="container" style="margin-top: 84px;">  
<h1 class="text-center">LIHAT DATA</h1>
 
    <table class="table table-hover table-bordered text-center">
    <br>
    <thead>
    <tr class=" bg-secondary">
    <th scope="col">NO.</th>
    <th scope="col">Nama</th>
    <th scope="col">Username</th>
    <th scope="col">Alamat</th>
    <th scope="col">No. HP</th>
    <th scope="col">Email</th>
    <th scope="col">Password</th>
    <th scope="col" colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
      include 'connect.php';
      $getdata=$connection->query("SELECT * FROM dataku");
      $nomor=1;
      while($data = $getdata->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $nomor++;?></td>
    <td class="text-uppercase"><?php echo $data['nama'];?></td>
    <td><?php echo $data['username'];?></td>
    <td><?php echo $data['alamat'];?></td>
    <td><?php echo $data['hp'];?></td>
    <td class="text-lowercase"><?php echo $data['email'];?></td>
    <td><?php echo "*************";?></td>
    <td><button class="button btn btn-info text-light"><a href="update.php?id=<?=$data["no_id"]?>" class="text-light card-link">UPDATE</a></button></td>
    <td><button class="button btn btn-danger text-light"><a href="delete.php?id=<?=$data["no_id"]?>" class="text-light card-link">DELELE</a></button></td>
    </tr>
    <?php
        }
    ?>
    </tbody>
    </table>
</div>
</body>
</html>