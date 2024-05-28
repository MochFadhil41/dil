<?php
    include '../koneksi.php';
    $ik = $_POST ["id_kelas"];
    $nk = $_POST ["nama_kelas"];
    $kk = $_POST ["kompetensi_keahlian"];
    $create = mysqli_query ($koneksi, "INSERT INTO  kelas(id_kelas,nama_kelas,kompetensi_keahlian) VALUES ('$ik','$nk','$kk') ");
    if ($create){
        header("location:read.php");
    }
?>