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
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Akun Belum Terverifikasi</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($verification as $verif) :
                    $id = $verif['id'];
                    $nama_mahasiswa = $verif['username'];
                    $email = $verif['email'];
                    ?>
                <tbody>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td width="150">
                      <?php echo $nama_mahasiswa; ?>
                    </td>
                    <td>
                      <?php echo $email; ?>
                    </td>
                    <td>
                      <?php echo 'Belum Aktif'; ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo base_url('admin/verification/verification/' . $id) ?>" class="btn btn-primary">Verifikasi User
                    </td>
                  </tr>

                <?php endforeach; ?>

                <!-- Scroll to Top Button-->
                <?php $this->load->view("admin/_partials/scrolltop.php") ?>

                <!-- Logout Modal-->
                <?php $this->load->view("admin/_partials/modal.php") ?>
                <!-- Bootstrap core JavaScript-->
                <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>