<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Services Section</title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/membership.css" />
  <!-- Font Awesome CDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <!-- Font awesome -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <section>
    <div class="row">
      <h2 class="section-heading">Membership</h2>
    </div>
    <div class="row">
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
          <i class="fas fa-paper-plane"></i>
          </div>
          <h3>Standard</h3>
          <p>
            user dapat mengupload lebih dari 10 konten.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
          <i class="fas fa-plane"></i>
          </div>
          <h3>Basic</h3>
          <p>
            user dapat mengupload lebih dari 20 konten

          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
          <i class="fas fa-rocket"></i>
          </div>
          <h3>Pro</h3>
          <p>
            user dapat mengupload unlimited
          </p>
        </div>
      </div>


    </div>


    <a href="<?=base_url('home')?>" class="button-9" style="line-height: 44px;"><i class="fa fa-chevron-circle-left"></i> Kembali</a>

  </section>
</body>

</html>