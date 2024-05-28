<?php
session_start();
if($_SESSION['level']==""){
    header("location:auth-login-petugas.php?pesan-gagal");
}
?>



<?php require('../template/header.php'); ?>

<?php require('../template/nav.php'); ?>

<?php require('../template/sidebar.php'); ?>

<!-- main content -->
<div class="main-content"> 
    <div class="section">
        <div class="section-header">
            <h1> DATA KELAS </h1>            
        </div>
        <a href="create.php" class="btn btn-success mb-3">Tambah Data Kelas</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID KELAS</th>
      <th scope="col">NAMA KELAS</th>
      <th scope="col">KOMPETENSI KEAHLIAN</th>
      <th scope="col">ACTION</th>
    </tr>
    </thead>
    <?php
    include"../koneksi.php";
    $query_mysql = mysqli_query($koneksi, "select * from kelas");
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){ ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['0']; ?></td>
        <td><?php echo $data['1']; ?></td>
        <td><?php echo $data['2']; ?></td>
        <td style="width: 20%;">
        <a href="update.php?id_kelas=<?php echo $data['id_kelas']; ?>"
         class="btn btn-warning my-1">Update</a>
        <a href="action-delete.php?id_kelas=<?php echo $data['id_kelas']; ?>"
         class="btn btn-danger my-1">delete</a>
    </td>
    </tr>
    <?php } ?>

</table>
    </div>
</div>
<?php require('../template/footer.php'); ?>