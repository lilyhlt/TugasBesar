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

    <div class="row mt-3">
        <div class="col-md-12 p-3">
            <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari data mahasiswa..." name="keyword">
            <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
            </form>
        </div>
    </div>

    <!-- mt-3 artinya margin top 3 -->
    <div class="row-mt-4">
        <div class="col-md-12 p-2">
        <h3>Sistem Database Online Kemahasiswaan JTD</h3>
            
            <!-- alert -->
            <?php if (empty($terminal)) :?>
            <div class="alert alert-danger" role="alert">
                Data Mahasiswa tidak ditemukan!
            </div>
            <?php endif; ?>

            <table class="table table-bordered table-striped table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Keterangan</th>

                <!-- <th scope="col">Foto</th> -->
                <th scope="col">Detail</th>
                <th scope="col">Hapus</th>
                <th scope="col">Edit</th>
            </tr>
                <?php
                $no=1;
                foreach ($terminal as $tm){?> 
                <tr>
                <td><?= $no++; ?></td>
                <td><?= $tm["nim"];?></td>
                <td><?= $tm["nama"];?></td>
                <td><?= $tm["kelas"];?></td>
                <td><?= $tm["keterangan"];?></td>
                <td><a href="<?= base_url();?>admin/terminal/detail/<?= $tm['nim'];?>"
                class="btn btn-primary btn-sm float-right fas fa-question-circle ml-2 mr-2"> Detail</a></td>
                <td><a href="<?=base_url();?>admin/terminal/hapus/<?=$tm['nim'];?>"
                class="btn btn-danger btn-sm float-right fas fa-trash-alt ml-2 mr-2"
                onclick="return confirm('Yakin data ini akan di hapus?');"> Hapus</a></td>
                <td><a href="<?= base_url();?>admin/terminal/edit/<?= $tm['nim'];?>"
                class="btn btn-secondary btn-sm float-right fas fa-edit ml-2 mr-2"> Edit</a>
                <?php } ?>
                </tr>
        </div>
    </div>

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>
</html>


