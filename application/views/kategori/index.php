 <!-- Featured News Slider Start -->
 <div class="container-fluid pt-5 mb-3">
     <div class="container">
         <div class="section-title">
         <?php foreach ($makanan as $ftr) : ?>
             <h4 class="m-0 text-uppercase font-weight-bold">Kategori <?=$ftr->kategori;?></h4>
             <?php break; ?>
             <?php endforeach; ?>
         </div>
         <div class="ss">
                 <div class="row gx-1">
                 <?php foreach ($makanan as $ftr) : ?>
                    
             <?php
                $folder          = $ftr->kategori;
                $daerah          = $ftr->daerah;
                $kategori_folder = $ftr->kategori;
            ?>
                     <div class="col ml-3">
                     <img src="<?= base_url() . '/upload_image/' . $daerah . '/' . strtolower($kategori_folder) . '/' . $ftr->gambar ?>" class="img-fluid w-100 h-100" style="object-fit: cover;">
                     <div class="overlay">
                         <div class="mb-2">
                         <?php if ($ftr->kategori == "tarian") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center" href=""><?= $ftr->kategori ?> <img src="<?= base_url() ?>assets/img/dance_icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                        <?php }; ?>
                         <?php if ($ftr->kategori == "makanan") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center" href=""><?= $ftr->kategori ?> <img src="<?= base_url() ?>assets/img/food-icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                        <?php }; ?>
                         <?php if ($ftr->kategori == "alat musik") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center" href=""><?= $ftr->kategori ?> <img src="<?= base_url() ?>assets/img/alat_musik.png" style="height: 23px;" class="ml-2" alt=""></a>
                        <?php }; ?>                             
                             <?php $originalDate = $ftr->tgl_konten; $newDate = date("d-m-Y", strtotime($originalDate));?>
                             <a class="text-white" href=""><small><?= $newDate ?></small></a>
                         </div>                         
                         <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="<?= base_url('detail/detail_konten/' . $ftr->id_konten); ?>"><?= $ftr->judul_konten ?></a>
                     </div>
                     </div>
                     <?php endforeach; ?>
                 </div>

             </div>
         

     </div>
 </div>
 <!-- Featured News Slider End -->