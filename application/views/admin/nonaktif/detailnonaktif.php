<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php") ?>
        <!-- End of Topbar -->

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Mahasiswa Non-Aktif
            </div>
            <div class="card-body">
                <h5 class="card-title"><strong><?= $nonaktif['nama']; ?></strong></h5>
                <p class="card-text">
                    <label for=""><b> NIM : </b></label>
                    <?= $nonaktif['nim']; ?></p>
                <p class="card-text">
                    <label for=""><b> Kelas : </b></label>
                    <?= $nonaktif['kelas']; ?></p>    
                <p class="card-text">
                    <label for=""><b> Keterangan : </b></label>
                    <?= $nonaktif['keterangan']; ?></p>
                <a href="<?= base_url();?>admin/nonaktif" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>