<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SBI</title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/membership.css" />
  <link rel = "icon" href ="<?php echo site_url(); ?>assets_login2/logo.jpg" type = "image/x-icon">
  <!-- Font Awesome CDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <!-- Font awesome -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<?php $namaUser =  $this->session->userdata('username'); ?>
  <section>
    <div class="row">
      <h2 class="section-heading">Membership</h2>
    </div>
    <div class="row">
      
      <a href="<?=base_url('membership/standard/'.$namaUser)?>" class="column">
        <div class="card">
          <div class="icon-wrapper">
          <i class="fas fa-paper-plane"></i>
          </div>
          <h3>Standard</h3>
          <h4>Rp. 10.000</h4>
          <center>
          <p>
          Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 3 hari saja.
          </p>
          </center>
        </div>
      </a>
      <a href="<?=base_url('membership/basic/'. $namaUser)?>" class="column">
        <div class="card">
          <div class="icon-wrapper">
          <i class="fas fa-plane"></i>
          </div>
          <h3>Basic</h3>
          <h4>Rp. 15.000</h4>
          <center>
            <p>Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 7 hari saja.</p>
          </center>
        </div>
      </a>
      <a href="<?=base_url('membership/pro/'.$namaUser)?>" class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="fas fa-rocket"></i>
          </div>
          <h3>Pro</h3>
          <h4>Rp. 20.000</h4>
        <center>
          <p>
          Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 2 minggu saja.
          </p>
        </center>
        </div>
      </a>


    </div>


    <a href="<?=base_url('home')?>" class="button-9" style="line-height: 44px;"><i class="fa fa-chevron-circle-left"></i> Kembali</a>

  </section>
</body>

</html>