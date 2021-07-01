  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

<?=
form_open('admin/login/proses_login');
?>

<body class="bg-gradient-grey">
<!--body class="bg-gradient-success"-->

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <!--div class="col-lg-6"-->

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
			      
            <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
              <!--div class="col-lg"-->
                <div class="p-5">
                  <div class="text-center">
                  <!--img src="<?php echo base_url(); ?>img/logoo.png" alt="image" height="150" width="150">
				  <br><br></br-->
                    <!--h1 class="h4 text-gray-900 mb-4"><b>Welcome!</b></h1-->
                    <img src="<?php echo base_url(); ?>img/logoo.png" alt="image" height="150" width="150">
				  <br></br>
                    <h3 class="h5 text-gray-900 mb-2"><b>JARINGAN TELEKOMUNIKASI DIGITAL</b></h3>
                    <?= $this->session->flashdata('message');?>
                  </div>

                    <div class="card-body">
                        <form class="user" method="post" action="<?= base_url('admin/login'); ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="uname1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="pwd1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">LOGIN</button>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('admin/registration'); ?>">Don't have account? Create Now</a>
                        <!--a class="small" href="<?= base_url('admin/forgotpassword'); ?>">Forgot Password</a-->
                    </div>
                    </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
 

<!-- Bootstrap core JavaScript>
        <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  < Core plugin JavaScript>
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

  < Custom scripts for all pages>
  <script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>

<?=
form_close();
?>