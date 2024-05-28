<?php
        $ik = $_POST['idkelas'];
        $nk = $_POST['namakelas'];
        $kk = $_POST['kompetensikeahlian'];
        
        include("../koneksi.php");
        $result = mysqli_query($koneksi,"UPDATE kelas SET id_kelas='$ik',nama_kelas='$nk',kompetensi_keahlian='$kk' WHERE id_kelas='$ik'");

        if($result) {
            echo "<script>alert('Data Kelas Berhasil Diupdate'); window.location.href='read.php'</script>";
        }else{
            echo "<script>alert('Data Kelas Gagal Diupdate'); window.location.href='read.php'</script>";
        }
        
        
    ?>
    
