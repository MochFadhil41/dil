<?php
    include '../koneksi.php';
    $ik = $_GET ['id_kelas'];
    $create = mysqli_query ($koneksi, "delete from kelas where id_kelas='$ik'");
    if ($create){
        header("location:read.php");
    }
?>