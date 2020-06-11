<?php
    session_start();
    if(isset($_POST["nama"])){
        include 'connect.php';
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $alamat = $_POST['alamat'];
        $hp = $_POST['hp'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        
        $message ="";

        if($nama==""){
            $message = "nama kamu harus diisi!";
        }else if($username==""){
            $message = "username harus diisi ya!";
        }else if($alamat==""){
            $message = "alamat harus diisi ya!";
        }else if($hp==""){
            $message = "nomor hp harus diisi ya!";
        }else if($email==""){
            $message = "email kamu harus diisi ya!";
        }else if($pass==""){
            $message = "eits password itu penting, diisi ya!";
        }else{
            //untuk input datanya
            $connection->query("INSERT INTO dataku VALUES (null,'".$nama."','".$username."','".$alamat."','".$hp."','".$email."','".$pass."')");
            $message = "Data kamu berhasil diinput, terima kasih telah melakukan registrasi yaa";
        }
        $_SESSION["message"] = $message;
    }
    header("location:insert.php");
    exit();
?>