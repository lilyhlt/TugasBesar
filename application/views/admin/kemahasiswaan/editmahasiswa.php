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
                Form Edit Data Mahasiswa
                </div>
                <div class="card-body">

                <form action="" method="post" style="width:1000px" enctype="multipart/form-data">
                <input type="hidden" name="nim" value="<?= $mahasiswa['nim'];?>">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ;?>">
                 </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="number" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'] ;?>">
                </div>
                <div class="form-group">
                    <label for="prodi">PRODI</label>
                    <input type="text" class="form-control" id="prodi" name="prodi" value="<?= $mahasiswa['prodi'] ;?>">
                </div>
                <div class="form-group">
                    <label for="jurusan">JURUSAN</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mahsiswa['jurusan'] ;?>">
                </div>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'] ;?>">
                </div>
                
                <button type="submit" name="edit" class="btn btn-primary float-right">Selesai</button>
            </form>
        </div>
    </div>
</div>
</div>

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

