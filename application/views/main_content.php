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

                     <?php if ($hm->kategori2 == "slider_home") :    ?>
                         <div class="position-relative overflow-hidden" style="height: 500px;">
                             <img src="<?= base_url() . '/upload_image/' . $daerah . '/' . strtolower($kategori_folder) . '/' . $hm->gambar ?>" class="img-fluid h-100" alt="...">
                             <div class="overlay">  
                                 <div class="mb-2">
                                     <h5 class="d-flex">
                                         <?php if ($hm->kategori == "Tarian") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2 d-flex align-items-center" href=""><?= $hm->kategori ?> <img src="<?= base_url() ?>assets/img/dance_icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                                         <?php }; ?>
                                         <?php if ($hm->kategori == "Makanan") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2 d-flex align-items-center" href=""><?= $hm->kategori ?> <img src="<?= base_url() ?>assets/img/food-icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                                         <?php }; ?>
                                         <?php if ($hm->kategori == "Alat musik") { ?>
                                             <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2 d-flex align-items-center" href=""><?= $hm->kategori ?> <img src="<?= base_url() ?>assets/img/alat_musik.png" style="height: 23px;" class="ml-2" alt=""></a>
                                         <?php }; ?>
                                         <?php $originalDate = $hm->tgl_konten; $newDate = date("d-m-Y", strtotime($originalDate));?><a class="text-white" href=""><small><?= $newDate ?></small></a>
                                     </h5>
                                 </div>
                                 <!-- <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="<?= base_url(strtolower($kategori_folder) . '/' . $daerah . '') ?>"><?= $hm->judul_konten ?></a> -->
                                 <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="<?= base_url('detail/detail_konten/' . $hm->id_konten); ?>"><?= $hm->judul_konten ?></a>
                                 <!-- <?php echo anchor('detail/detail_konten/' . $hm->id_konten, '<div class="btn btn-danger">Detail</div>'); ?> -->
                             </div>
                         </div>
                     <?php endif; ?>
                 <?php } ?>
             </div>
         </div>


         <div class="col-lg-5 px-0">
             <div class="row mx-0">
                 <?php foreach ($home as $hm) : ?>
                     <?php
                        $folder          = $hm->kategori;
                        $daerah          = $hm->daerah;
                        $kategori_folder = $hm->kategori;
                        ?>
                     <div class="col-md-6 px-0">
                         <div class="position-relative overflow-hidden" style="height: 250px;">
                             <img src="<?= base_url() . '/upload_image/' . $daerah . '/' . strtolower($kategori_folder) . '/' . $hm->gambar ?>" class="img-fluid w-100 h-100" style="object-fit: cover;">
                             <div class="overlay">
                                 <div class="mb-2">
                                     <?php if ($hm->kategori == "Tarian") { ?>
                                         <a class="badge badge-primary text-uppercase font-weight-semi-bold pt-1 pb-1 mr-2" href="<?= base_url('detail/detail_konten/' . $hm->id_konten); ?>"><?= $hm->kategori ?><img src="<?= base_url() ?>assets/img/dance_icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                                     <?php }; ?>
                                     <?php if ($hm->kategori == "Makanan") { ?>
                                         <a class="badge badge-primary text-uppercase font-weight-semi-bold pt-1 pb-1 mr-2" href="<?= base_url('detail/detail_konten/' . $hm->id_konten); ?>"><?= $hm->kategori ?><img src="<?= base_url() ?>assets/img/food-icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                                     <?php }; ?>
                                     <?php if ($hm->kategori == "Alat musik") { ?>
                                         <a class="badge badge-primary text-uppercase font-weight-semi-bold pt-1 pb-1 mr-2" href="<?= base_url('detail/detail_konten/' . $hm->id_konten); ?>"><?= $hm->kategori ?><img src="<?= base_url() ?>assets/img/alat_musik.png" style="height: 23px;" class="ml-2" alt=""></a>
                                     <?php }; ?>
                                     <!-- <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="<?= base_url('detail/detail_konten/' . $hm->id_konten); ?>"><?= $hm->kategori ?></a> -->

                                     <?php $originalDate = $hm->tgl_konten; $newDate = date("d-m-Y", strtotime($originalDate));?>
                             <a class="text-white" href=""><small><?= $newDate ?></small></a>
                                 </div>
                                 <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="<?= base_url('detail/detail_konten/' . $hm->id_konten); ?>"><?= $hm->judul_konten ?></a>
                             </div>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
 </div>
 <!-- Main News Slider End -->