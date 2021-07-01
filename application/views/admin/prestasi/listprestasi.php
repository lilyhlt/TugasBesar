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
                <input type="text" class="form-control" placeholder="Cari Data Prestasi..." name="keyword">
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
        <h3>Sistem Database Online Mahasiswa</h3>
            
            <!-- alert -->
            <?php if (empty($prestasi)) :?>
            <div class="alert alert-danger" role="alert">
                Data Prestasi tidak ditemukan!
            </div>
            <?php endif; ?>
			
			<?= $this->session->flashdata('message'); ?>

            <table class="table table-bordered table-striped table-light" id="dataTable">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Prestasi</th>
                <th scope="col">Tanggal Pelaksanaan</th>
                <th scope="col">Deskripsi</th>
               
               
                <!-- <th scope="col">Foto</th> -->
                <th scope="col">Detail</th>
                <th scope="col">Hapus</th>
                <th scope="col">Edit</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach ($prestasi as $prestasi){?> 
                <tr>
                <td><?= $no++; ?></td>
                <td><?= $prestasi["nim"];?></td>
                <td><?= $prestasi["prestasi"];?></td>
                <td><?= $prestasi["tgl_pelaksanaan"];?></td>
                <td><?= $prestasi["deskripsi"];?></td>              
                
                <td><a href="<?= base_url();?>admin/prestasi/detail/<?= $prestasi['nim'];?>"
                class="btn btn-primary btn-sm float-right fas fa-question-circle ml-2 mr-2"> Detail</a></td>
                <td><a href="<?=base_url();?>admin/prestasi/hapus/<?=$prestasi['nim'];?>"
                class="btn btn-danger btn-sm float-right fas fa-trash-alt ml-2 mr-2"
                onclick="return confirm('Yakin data ini akan di hapus?');"> Hapus</a></td>
                <td><a href="<?= base_url();?>admin/prestasi/edit/<?= $prestasi['nim'];?>"
                class="btn btn-secondary btn-sm float-right fas fa-edit ml-2 mr-2"> Edit</a>
                <?php } ?>
                </tr>
        </div>
    </div>
    </tbody>
    </table>
    <!--a href="<?php echo base_url('admin/prestasi/laporanprestasi_pdf') ?>"
                    class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-file-pdf "></i>
                    Cetak PDF</a-->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>
</html>


