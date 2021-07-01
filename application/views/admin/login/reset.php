<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="bg-gradient-dark">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
              <h2>Reset Password</h2>
                <h5>Hello <span><?php echo $nama; ?></span>, Silahkan isi password baru anda.</h5>
                <?php echo form_open('forgotpassword/resetpassword/token/' . $token); ?>
                <p>Password Baru:</p>
                <p>
                    <input type="password" name="password" value="<?php echo set_value('password'); ?>" />
                </p>
                <p> <?php echo form_error('password'); ?> </p>
                <p>Konfirmasi Password:</p>
                <p>
                    <input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" />
                </p>
                <p> <?php echo form_error('passconf'); ?> </p>
                <p>
                    <input type="submit" name="btnSubmit" value="Reset" />
                </p>
                  CREATE
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('admin/login'); ?>">Back to Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php $this->load->view("admin/_partials/js.php") ?>

</body>
