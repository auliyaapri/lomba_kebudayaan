 <!-- Main News Slider Start -->
 <div class="container-fluid">
     <div class="row">
         <div class="col-lg-7 px-0">
             <div class="owl-carousel main-carousel position-relative">
                 <!-- pengkondisian -->
                 <?php foreach ($home as $hm) {  ?>
                     <?php $folder          = $hm->kategori; ?>
                     <?php $daerah          = $hm->daerah; ?>
                     <?php $kategori_folder = $hm->kategori; ?>
                     <?php if ($hm->kategori2 == "slider_home"  ) :    ?>
                        
                         <div class="position-relative slider_bro overflow-hidden m-1" style=" height: 507px;">
                             <img  src="<?= base_url() . '/upload_image/' . $daerah . '/' . strtolower($kategori_folder) . '/' . $hm->gambar ?>" class="img-fluid h-100" alt="...">
                             <div class="overlay">  
                                 <div class="mb-2">
                                     <h5 class="d-flex">
                                         <?php if ($hm->kategori == "tarian") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2 d-flex align-items-center" href="<?=base_url('kategori/tarian')?>"><?= $hm->kategori ?> <img src="<?= base_url() ?>assets/img/dance_icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                                         <?php }; ?>
                                         <?php if ($hm->kategori == "makanan") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2 d-flex align-items-center" href="<?=base_url('kategori/makanan')?>"><?= $hm->kategori ?> <img src="<?= base_url() ?>assets/img/food-icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                                         <?php }; ?>
                                         <?php if ($hm->kategori == "alat musik") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2 d-flex align-items-center" href="<?=base_url('kategori/alat_musik')?>"><?= $hm->kategori ?> <img src="<?= base_url() ?>assets/img/alat_musik.png" style="height: 23px;" class="ml-2" alt=""></a>
                                         <?php }; ?>
                                         <?php $originalDate = $hm->tgl_konten; $newDate = date("d-m-Y", strtotime($originalDate));?><a class="text-white" href=""><small><?= $newDate ?></small></a>
                                     </h5>
                                 </div>
                                 <!-- <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="<?= base_url(strtolower($kategori_folder) . '/' . $daerah . '') ?>"><?= $hm->judul_konten ?></a> -->
                                 <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="<?= base_url('detail/detail_konten/' . $hm->id_konten); ?>"><?= $hm->judul_konten ?></a>                                 
                             </div>
                         </div>
                     <?php endif; ?>
                 <?php } ?>
             </div>
         </div>

         <style>
            /* @media(max-width: 576px){
                .slider_bro {
                    height: 350px;
                background:red;
            }
         

            }
          
            @media(max-width: 1400px){
                .slider_bro {
                    height: 507;
                    
                
            }
         

            } */
          
         </style>