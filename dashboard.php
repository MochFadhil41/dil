<?php
session_start();
if($_SESSION['level']==""){
    header("location:auth-login-petugas.php?pesan-gagal");
}
?>

<?php include('../template/header.php'); ?>

<?php include('../template/nav.php'); ?>

<?php include('../template/sidebar.php'); ?>

<!-- main content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
</div>
<div class="main-content">
        <div class="row">
        <div class="col">
            <p class="display-1">Selamat Datang <?php echo $_SESSION['nama']; ?></p>
</div>
</div>
</section>
</div>

<?php require('../template/footer.php'); ?>