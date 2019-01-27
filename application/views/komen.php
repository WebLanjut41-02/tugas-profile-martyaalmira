<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome My Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Martya Almira</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/folio">Portofolio</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/foto">Foto</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/komen">Komentar</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">Welcome My Blog :)</h1>
          <h2 class="masthead-subheading mb-0">Martya Almira</h2>
        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header>

    <body>
      <form action="<?php echo base_url(); ?>index.php/welcome/pesan" method="POST">
        <body>
          <br>
          <h2>Komentar</h2>
          <br>
    <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" class="form-control" id="jadwal" aria-describedby="nama" placeholder="" name="nama" required="">
              </div>

              <div class="form-group">
              <label for="nama">Komentar anda</label>
              <input type="text" class="form-control" id="komen" aria-describedby="komen" placeholder="" name="komen" required="">
              </div>

              <div class="form-group">
              
              <input type="submit" class="form-control" id="komen" aria-describedby="komen" placeholder="" name="submit" required="">
              </div>
    </form>
    <br>
    <?php if(isset($nama)){?>
    <div class="card text-center bg-info">
      <div class="card-header">
        Komentar
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $nama; ?></h5>
        <p class="card-text"><?php echo $kom; ?></p>
        
      </div>
      <div class="card-footer text-muted">
        
      </div>
    </div>
    <?php }?>
    </body>

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy;2019 - Martya Almira 6701174027</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
