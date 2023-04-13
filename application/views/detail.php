<div class="container-fluid">
  <div class="card">

    <div class="card-bodyS">
      <?php foreach ($barang as $brg) : ?>
        <div class="row">
          <div class="col-md-5">
            <!-- ========== PENGKONDISIAN ==========-->
            <?php $folder          = $brg->kategori; ?>
            <?php $daerah          = $brg->daerah; ?>
            <?php $kategori_folder = $brg->kategori; ?>
          </div>

        </div>

    </div>
  </div>
</div>





<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

  <title>Stand Blog - Post Details</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>assets_blog/css/fontawesome.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_blog/css/templatemo-stand-blog.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_blog/css/owl.css">

</head>

<body>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4><?php echo $brg->kategori;  ?> / <?php echo $brg->daerah;  ?></h4>
              <h2><?php echo $brg->judul_konten;  ?></h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Banner Ends Here -->


  <section class="blog-posts grid-system">
    <div class="container">
    
      
      <div class="row">
        <div class="col-lg-8">
          <div class="all-blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <img src="<?= base_url() . '/upload_image/' . $daerah . '/' . strtolower($kategori_folder) . '/' . $brg->gambar ?>">
                  </div>
                  <div class="down-content">
                    <span><?php echo $brg->kategori; ?></span>
                    <a href="post-details.html">
                      <h4><?php echo $brg->judul_konten;  ?></h4>
                    </a>
                    <ul class="post-info">
                      <li>Penulis <a class="font-weight-bold" href="#"><?=$brg->nama_penulis?></li>
                      <li><?php $originalDate = $brg->tgl_konten; 
                      $newDate = date("F-d-Y", strtotime($originalDate));?><a href="" ><?= $newDate ?></a></li>                      
                    </ul>
                    <p><?php echo $brg->isi_konten;  ?></p>
                    <br>
                    <br>
                    <br>
                    
                  </div>
                
                <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="row">
              <!-- <div class="col-lg-12">
                <div class="sidebar-item search">
                  <form id="search_form" name="gs" method="GET" action="#">
                    <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                  </form>
                </div>
              </div> -->
              <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                  <div class="sidebar-heading">
                    <div class="sidebar-item recent-posts">
                      <div class="sidebar-heading">
                        <h2>Upload Terbaru</h2>
                      </div>
                      <div class="content">
                        <ul>
                          <?php foreach ($home as $brg) : ?>
                            <li>
                              <a href="<?= base_url('detail/detail_konten/' . $brg->id_konten); ?>">
                                <h5><?= $brg->judul_konten; ?></h5>
                              </a>
                              <?php $originalDate = $brg->tgl_konten;
                              $newDate = date("d-m-Y", strtotime($originalDate)); ?>
                              <h6 class="text-danger" href=""><?= $newDate ?></h6>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            
            

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>


</body>

</html>