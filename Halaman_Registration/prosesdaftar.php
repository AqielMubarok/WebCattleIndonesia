<?php

if(isset($_POST['daftar'])){
    include 'connect.php';
    $insert = mysqli_query($conn, "INSERT INTO login VALUES
        (NULL,
            '".$_POST['nama']."',
            '".$_POST['nohp']."',
            '".$_POST['pass']."',
            '".$_POST['konfirmasi']."')");
       if ($insert){
            header ('location: ../Halaman_Login/login.php');
       }else{
            echo 'gagal daftar';
       }
    }
?>
