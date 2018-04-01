<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css">

    <title>Login-Blotter-System</title>
  </head>
  <body>

 
    <?php echo form_open('pages/login')  ?>

    <div class="container m-top10 ">        
        <div class="row">
            <div class="col-md-4 col-xs-6"></div>
        
            <div class="col-md-4 col-xs-6 bg-light p-5">
                <form>
                    <div class="form-group align-middle text-center h4">
                        Login
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                            <?php if($this->session->flashdata('username_error')): ?>
                            <span class="text-danger">
                            <?php echo $this->session->flashdata('username_error'); ?>
                            <?php endif; ?>
                            </span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                            <span class="text-danger">
                            <?php if($this->session->flashdata('password_error')): ?>
                            <?php echo $this->session->flashdata('password_error'); ?>
                            <?php endif; ?>
                            </span>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-block">Login</button>
                </form>
            </div>
        
        <div class="col-md-4 col-xs-6"></div>

        </div>
      </div>
      <?php echo form_close(); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src= "<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
    <script src= "<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>