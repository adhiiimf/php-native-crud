<!DOCTYPE html>
<html>
<head>
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
 
    <table class="text-center table-hover table-sm table-responsive table-bordered card-header-tabs tab-pane card-text">
    <?php
    include 'connect.php';
    $getdata=mysqli_query($connection,"SELECT * FROM dataku");
    ?> 
    <br>
    <thead>
    <tr class=" bg-secondary">
    <th>NO.</th>
    <th>Nama</th>
    <th>Username</th>
    <th>Alamat</th>
    <th>No. HP</th>
    <th>Email</th>
    <th>Password</th>
    <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if(mysqli_num_rows($getdata)>0)?>
    <?php
        $nomor=1;
        while($data = mysqli_fetch_array($getdata)){
    ?>
    <tr>
    <td><?php echo $nomor++;?></td>
    <td><?php echo $data['nama'];?></td>
    <td><?php echo $data['username'];?></td>
    <td><?php echo $data['alamat'];?></td>
    <td><?php echo $data['hp'];?></td>
    <td><?php echo $data['email'];?></td>
    <td><?php echo $data['pass'];?></td>
    <td><button class="button btn btn-info text-light"><a href="" class="text-light">EDIT</a></button></td>
    <td><button class="button btn btn-danger text-light"><a href="" class="text-light">DELELE</a></button></td>

    </tr>
    <?php
        }
    ?>
    </tbody>
    </table>
</div> 
</body>
</html>