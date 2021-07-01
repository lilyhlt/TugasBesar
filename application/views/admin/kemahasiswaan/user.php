<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Sistem Informasi Kemahasiswaan Prodi</h1>
<p class="mb-4">Jaringan Telekomunikasi Digital</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama Mahasiswa</th>
            <th>Nim</th>
            <th>Alamat</th>
            <th>Cetak Data</th>
          </tr>
        </thead>
        <tbody>
      <?php $no=1;
          foreach ($kemahasiswaan as $kmhs): ?>
          <tr>
              <td><?= $no++; ?></td>
              <td>
                  <img src="<?php echo base_url('upload/mahasiswa/'.$kmhs->Image);?>" width="100"></td>
              <td><?= $kmhs->Nama; ?></td>
              <td><?= $kmhs->Nim; ?></td>
              <td><?= $kmhs->Alamat; ?></td>
              <td><a class="btn btn-warning" href="<?php echo base_url('admin/user/laporan_pdf/'.$kmhs->Id)?>"><i class="fa fa-print" aria-hidden="true"></i> Print</a></td>
          </tr>
      <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<?php $this->load->view("user/_partials2/footer.php") ?>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Are you sure to logout?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">Select "Logout" to leave the page!</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
<a class="btn btn-primary" href="<?= base_url('admin/login'); ?>">Logout</a>
</div>
</div>
</div>
</div>