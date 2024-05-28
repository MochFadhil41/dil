<?php
session_start();
if($_SESSION['level']==""){
    header("location:auth-login-petugas.php?pesan-gagal");
}
?>

<?php require('../template/header.php'); ?>

<?php require('../template/nav.php'); ?>

<?php require('../template/sidebar.php'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>TAMBAH DATA KELAS</h1>
</div>
<form method="POST" action="action-create.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID KELAS</label>
    <input type="number" class="form-control" name="id_kelas">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">NAMA KELAS</label>
    <input  class="form-control" name="nama_kelas" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">KOMPETEENSI KEAHLIAN</label>
    <select class="form-control" name="kompetensi_keahlian" >
      <option>RPL</option>
      <option>tav</option>
      <option>rtg</option>
      <option>ef</option>
      <option>wr</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</section>
</div>

<?php require('../template/footer.php'); ?>