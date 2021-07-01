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
                Detail Data Prestasi
            </div>
            <div class="card-body">
                <p class="card-text">
                    <label for=""><b> NIM : </b></label>
                    <?= $prestasi['nim']; ?></p>
                <p class="card-text">
                    <label for=""><b>Prestasi : </b></label>
                    <?= $prestasi['prestasi']; ?></p>    
                <p class="card-text">
                    <label for=""><b> Tanggal Pelaksanaan : </b></label>
                    <?= $prestasi['tgl_pelaksanaan']; ?></p>
                <a href="<?= base_url();?>admin/prestasi/" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>