 <!-- Featured News Slider Start -->
 
 <div class="container-fluid bg-white d-flex align-items-center" style="height: 350px;">
    <div class="container">
 
         
             <h1 class="text-primary font-weight-bold">About <span class="text-secondary font-weight-bolder"> Us<span></h4>             
             <p class="text-dark" style="line-height: 35px;"> Tentang website kebudayaan, website ini berisikan mengenai budaya-budaya di Indonesia. Mulai dari tarian tradisional, makanan khas daerah, dan alat musik tradisional. Di website ini kami hanya berfokus untuk ke tiga budaya indonesia tersebut, dan juga berfokus hanya untuk 4 daerah saja. Yaitu <b>  DKI Jakarta, Jawa Tengah, Jawa Timur, Jawa Barat.</b> Di website ini kami menyediakan paket membership untuk user jika ingin meng-upload mengenai kebudayaan Indonesia sehingga informasi yang dihasilkan dapat menjadi lebih detail dan dapat memuat kebudayaan di provinsi lebih banyak".</p>
     </div>
     </div>
 <div class="container-fluid mb-3">

    
 
    
     <div class="container mt-5">
         <div class="section-title">
             <h4 class="m-0 text-uppercase font-weight-bold">Berita Unggulan</h4>
         </div>
         <div class="owl-carousel news-carousel carousel-item-4 position-relative">
             <?php foreach ($featured_newss as $ftr) : ?>
                 <?php
                    $folder          = $ftr->kategori;
                    $daerah          = $ftr->daerah;
                    $kategori_folder = $ftr->kategori;
                    ?>

                 <div class="position-relative overflow-hidden" style="height: 300px;">
                     <!-- <img class="img-fluid h-100" src="<?= base_url() ?>assets/img/news-700x435-1.jpg" style="object-fit: cover;"> -->
                     <img src="<?= base_url() . '/upload_image/' . $daerah . '/' . strtolower($kategori_folder) . '/' . $ftr->gambar ?>" class="img-fluid w-100 h-100" style="object-fit: cover;">
                     <div class="overlay">
                         <div class="mb-2">
                         <?php if ($ftr->kategori == "tarian") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center" href="<?=base_url('kategori/tarian')?>"><?= $ftr->kategori ?> <img src="<?= base_url() ?>assets/img/dance_icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                        <?php }; ?>
                         <?php if ($ftr->kategori == "makanan") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center" href="<?=base_url('kategori/makanan')?>"><?= $ftr->kategori ?> <img src="<?= base_url() ?>assets/img/food-icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                        <?php }; ?>
                         <?php if ($ftr->kategori == "alat musik") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center" href="<?=base_url('kategori/alat_musik')?>"><?= $ftr->kategori ?> <img src="<?= base_url() ?>assets/img/alat_musik.png" style="height: 23px;" class="ml-2" alt=""></a>
                        <?php }; ?>                             
                             <?php $originalDate = $ftr->tgl_konten; $newDate = date("F-d-Y", strtotime($originalDate));?>
                             <a class="text-white" href=""><small><?= $newDate ?></small></a>
                         </div>                         
                         <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="<?= base_url('detail/detail_konten/' . $ftr->id_konten); ?>"><?= $ftr->judul_konten ?></a>
                     </div>
                 </div>
             <?php endforeach; ?>

             
 

         </div>
     </div>
 </div>
 <!-- Featured News Slider End -->