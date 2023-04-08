 <!-- Featured News Slider Start -->
 <div class="container-fluid pt-5 mb-3">
     <div class="container">
         <div class="section-title">
             <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
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
                         <?php if ($ftr->kategori == "Tarian") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center" href=""><?= $ftr->kategori ?> <img src="<?= base_url() ?>assets/img/dance_icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                        <?php }; ?>
                         <?php if ($ftr->kategori == "Makanan") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center" href=""><?= $ftr->kategori ?> <img src="<?= base_url() ?>assets/img/food-icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                        <?php }; ?>
                         <?php if ($ftr->kategori == "Alat musik") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center" href=""><?= $ftr->kategori ?> <img src="<?= base_url() ?>assets/img/alat_musik.png" style="height: 23px;" class="ml-2" alt=""></a>
                        <?php }; ?>                             
                             <?php $originalDate = $ftr->tgl_konten; $newDate = date("d-m-Y", strtotime($originalDate));?>
                             <a class="text-white" href=""><small><?= $newDate ?></small></a>

                         </div>
                         <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                     </div>
                 </div>
             <?php endforeach; ?>
             <div class="position-relative overflow-hidden" style="height: 300px;">
                 <img class="img-fluid h-100" src="<?= base_url() ?>assets/img/news-700x435-2.jpg" style="object-fit: cover;">
                 <div class="overlay">
                     <div class="mb-2">
                         <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                         <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                     </div>
                     <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                 </div>
             </div>
             <div class="position-relative overflow-hidden" style="height: 300px;">
                 <img class="img-fluid h-100" src="<?= base_url() ?>assets/img/news-700x435-3.jpg" style="object-fit: cover;">
                 <div class="overlay">
                     <div class="mb-2">
                         <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                         <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                     </div>
                     <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                 </div>
             </div>
             <div class="position-relative overflow-hidden" style="height: 300px;">
                 <img class="img-fluid h-100" src="<?= base_url() ?>assets/img/news-700x435-4.jpg" style="object-fit: cover;">
                 <div class="overlay">
                     <div class="mb-2">
                         <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                         <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                     </div>
                     <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                 </div>
             </div>
             <div class="position-relative overflow-hidden" style="height: 300px;">
                 <img class="img-fluid h-100" src="<?= base_url() ?>assets/img/news-700x435-5.jpg" style="object-fit: cover;">
                 <div class="overlay">
                     <div class="mb-2">
                         <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                         <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                     </div>
                     <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Featured News Slider End -->