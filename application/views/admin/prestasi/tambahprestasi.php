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
    <div class="row-mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <strong>Form Tambah Data Prestasi</strong>
                </div>
                <div class="cara body p-3">
                <?php if (validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
                </div>
                <?php endif ?>
                <form action="<?php echo base_url('admin/prestasi/tambah/')?>" method="post" style="width:1000px" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>
                    <form action="" method="post">
                    <div class="form-group">
                        <label for="prestasi">Prestasi</label>
                        <input type="text" class="form-control" id="prestasi" name="prestasi">
                    </div>
                    <div class="form-group">
                        <label for="tgl_pelaksanaan">Tanggal Pelaksanaan</label>
                        <input type="date" class="form-control" id="tgl_pelaksanaan" name="tgl_pelaksanaan">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                    </div>
					<div class="form-group">
						<label for="foto">Foto Prestasi</label>
						<input type="file" class="form-control" id="foto" name="foto">
					</div>
                   
                    
                    <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
        <!-- /.container-fluid -->

</div>
      <!-- End of Main Content -->

<!-- Footer -->
<?php $this->load->view("admin/_partials/footer.php") ?>
<!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
