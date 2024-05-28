<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">APLIKASI SPP</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              
              <?php if ($_SESSION['level'] =="admin") { ?>
              <li class="menu-header">Pengolahan Data </li>
              <li?><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>DATA PETUGAS</span></a></li>
              <li?><a class="nav-link" href="../data-kelas/read.php"><i class="far fa-square"></i> <span>DATA KELAS</span></a></li>
              <li?><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>DATA SISWA</span></a></li>
              <li?><a class="nav-link" href="../data-spp/read.php"><i class="far fa-square"></i> <span>DATA SPP</span></a></li>
              <li class="menu-header">Transaksi</li>
              <li?><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Transaksi
               pembayaran</span></a></li>
               <li?><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>History
               pembayaran</span></a></li>
              <?php } elseif($_SESSION['level']=="petugas") { ?>
              <li class="menu-header">Transaksi</li>
              <li?><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Transaksi
               pembayaran</span></a></li>
               <li?><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <spa>History
               pembayaran</span></a></li> 
              <?php } else { ?>
                <li?><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>History
               pembayaran</span></a></li>
              <?php } ?>
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="../logout.php" class="btn btn-danger btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Log out
            </a>
          </div>        </aside>
      </div>