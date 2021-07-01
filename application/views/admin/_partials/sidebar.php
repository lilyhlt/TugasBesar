    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
        <div class="sidebar-brand-icon">
          <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">J T D</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Kemahasiswaan Prodi</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Database Mahasiswa
      </div>

      <!-- Nav Item - Pages Collapse Menu Data Mahasiswa -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Data Mahasiswa</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Aksi:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/mahasiswa')?>">Daftar Mahasiswa</a>
            <a class="collapse-item" href="<?php echo base_url('admin/mahasiswa/tambah')?>">Tambah Data Mahasiswa</a>
          </div>
        </div>
      </li>

       <!-- Nav Item - Pages Collapse Menu Prestasi-->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
          <i class="fas fa-id-card fa-cog"></i>
          <span>Data Prestasi </span>
        </a>
        <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Aksi:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/prestasi')?>">Daftar Prestasi</a>
            <a class="collapse-item" href="<?php echo base_url('admin/prestasi/tambah')?>">Tambah Data Prestasi</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu Non-Aktif-->
      <!--li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
          <i class="fas fa-id-card fa-cog"></i>
          <span>Data Non-Aktif </span>
        </a>
        <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Aksi:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/nonaktif')?>">Daftar Non-Aktif</a>
            <a class="collapse-item" href="<?php echo base_url('admin/nonaktif/tambah')?>">Tambah Data Non-Aktif</a>
          </div>
        </div>
      </li>


      <!-- Nav Item - Utilities Collapse Menu Laporan/Report
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-download"></i>
          <span>Cetak Laporan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('admin/mahasiswa/laporanmahasiswa_pdf')?>">Data Mahasiswa</a>
            <a class="collapse-item" href="<?php echo base_url('admin/prestasi/laporanprestasi_pdf')?>">Data Prestasi</a>
          </div>
        </div>
      </li>-->

      <!-- Divider -->
      <!-- hr class="sidebar-divider">

      <!-- Heading -->
      <!--div class="sidebar-heading">
        Database Fungsional
      </div>

      <!-- Nav Item - Pages Collapse Menu Jabatan-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          <i class="fas fa-stamp"></i>
          <span>Mahasiswa Non-Aktif</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Aksi:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/nonaktif')?>">Mahasiswa Non-Aktif</a>
            <a class="collapse-item" href="<?php echo base_url('admin/nonaktif/tambah')?>">Tambah Data Non-Aktif</a>
          </div>
        </div>
      </li>
 
    <!-- Nav Item - Pages Collapse Menu Petugas-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          <i class="fas fa-suitcase"></i>
          <span>Mahasiswa Terminal</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Aksi:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/terminal')?>">Mahasiswa Terminal</a>
            <a class="collapse-item" href="<?php echo base_url('admin/terminal/tambah')?>">Tambah Data Terminal</a>
          </div>
        </div>
      </li> 


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Setting
      </div>

      <!-- Nav Item - Pages Collapse Menu Setting akun-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages2">
          <i class="fas fa-check-circle"></i>
          <span>Verifikasi Akun</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages2" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Akun Belum Terverifikasi:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/verification') ?>">Lihat Data</a>
            

          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->