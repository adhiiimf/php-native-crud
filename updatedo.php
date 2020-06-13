<?php 
include 'connect.php';
 
    $id = $_POST['no_id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
 
    mysqli_query($connection,"UPDATE dataku SET nama='$nama', username='$username', alamat='$alamat', hp='$hp', email='$email' WHERE no_id='$id'");
 

header("location:view.php");
 
?>