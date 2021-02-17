<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>css/style.css">

    <title>Login #8</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In to <strong>Colorlib</strong></h3>
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
            <form action="<?=site_url('login/cek');?>" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
                
              </div>
              <div class="form-group last mb-4">
                <label for="password">Akses</label>
               <select class="form-control" aria-label="Default select example" name="akses">
      <option selected>Pilih Akses</option>
      <option value="admin">admin</option>
      <option value="siswa">siswa</option>
       </select>
                
              </div>
              
             

              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="<?php echo base_url() . 'assets/'; ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>js/popper.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>js/main.js"></script>
  </body>
</html>