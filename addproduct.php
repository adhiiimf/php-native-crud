<?php
    session_start();
    if(isset($_POST["nama"])){
        include 'connect.php';
        $nama = $_POST['nama'];
        $telp = $_POST['telp'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $pendidikan = $_POST['pendidikan'];
        
        $message ="";

        if($nama==""){
            $message = "name must be filled!";
        }else if($telp==""){
            $message = "Phone Number must be filled!";
        }else{
            //untuk input datanya
            $connection->query("INSERT INTO data_peserta VALUES (null,'".$nama."','".$telp."','".$jenis_kelamin."','".$pendidikan."')");
            $message = "Successfully submit your data, THANKYOU!";
        }
        $_SESSION["message"] = $message;
    }
    header("location:insert.php");
    exit();
?>