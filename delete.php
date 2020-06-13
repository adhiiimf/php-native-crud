<?php 

include 'connect.php';
 
$id = $_GET['id'];

mysqli_query($connection,"DELETE FROM dataku WHERE no_id='$id'");

header("location:view.php");
 
?>