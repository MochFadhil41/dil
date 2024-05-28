
<?php
session_start();
if($_SESSION['level']==""){
    header("location:auth-login-petugas.php?pesan-gagal");
}

    include "../koneksi.php";
    $ik = $_GET['id_kelas'];
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas=$ik");
    $data = mysqli_fetch_array($query_mysql); 
?>

<?php require('../template/header.php'); ?>

<?php require('../template/nav.php'); ?>

<?php require('../template/sidebar.php'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Kelas</h1>

</div> <div class="d-flex justify-content-center"> <div class="col-4 card" > 
<form method="POST" action="action_update.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">ID KELAS</label>
                    <input id="email" type="" class="form-control" name="idkelas" value="<?php echo $data["id_kelas"]; ?>" readonly>
                    <div class="invalid-feedback">
                     
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="text" class="control-label">NAMA KELAS</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                         
                        </a>
                      </div>
                    </div>
                    <input id="password" type="" class="form-control" name="namakelas" value="<?php echo $data["nama_kelas"]; ?>">
                    <label class=""> Kompetensi Keahlian</label>
                  <select class="form-control" name="kompetensikeahlian">
                    <option>RPL</option>
                    <option>DPIB</option>
                    <option>TAV</option>
                    <option>TBSM</option>
                    <option>TKR</option>
</select>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
</form>
</div>
</div>

</div>
</div>
</section>
</div>

<?php require('../template/footer.php'); ?>