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
              <h2>Lupa Password</h2>
                <p>Untuk melakukan reset password, silakan masukkan alamat email anda. </p>
                <?php echo form_open('forgotpassword'); ?>
                <p>Email:</p>
                <p>
                    <input type="text" name="email" value="<?php echo set_value('email'); ?>" />
                </p>
                <p> <?php echo form_error('email'); ?> </p>
                <p>
                    <input type="submit" name="btnSubmit" value="Submit" />
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
