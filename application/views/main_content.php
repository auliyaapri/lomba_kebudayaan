
<!-- ================================================================ -->
         <div class="col-lg-5 px-0">
             <div class="row mx-0">
                 <?php foreach ($home as $hm) : ?>
                     <?php
                        $folder          = $hm->kategori;
                        $daerah          = $hm->daerah;
                        $kategori_folder = $hm->kategori;
                        ?>
                     <div class="col-md-6 px-0">
                         <div class="position-relative overflow-hidden m-1" style="height: 250px;">
                             <img src="<?= base_url() . '/upload_image/' . $daerah . '/' . strtolower($kategori_folder) . '/' . $hm->gambar ?>" class="img-fluid w-100 h-100" style="object-fit: cover;">
                             <div class="overlay">
                                 <div class="mb-2 ">
                                     <?php if ($hm->kategori == "tarian") { ?>
                                         <a class="badge badge-primary text-uppercase font-weight-semi-bold pt-1 pb-1 mr-2" href="<?=base_url('kategori/tarian')?>"><?= $hm->kategori ?><img src="<?= base_url() ?>assets/img/dance_icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                                     <?php }; ?>
                                     <?php if ($hm->kategori == "makanan") { ?>
                                         <a class="badge badge-primary text-uppercase font-weight-semi-bold pt-1 pb-1 mr-2" href="<?=base_url('kategori/makanan')?>"><?= $hm->kategori ?><img src="<?= base_url() ?>assets/img/food-icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                                     <?php }; ?>
                                     <?php if ($hm->kategori == "alat musik") { ?>
                                         <a class="badge badge-primary text-uppercase font-weight-semi-bold pt-1 pb-1 mr-2" href="<?=base_url('kategori/alat_musik')?>"><?= $hm->kategori ?><img src="<?= base_url() ?>assets/img/alat_musik.png" style="height: 23px;" class="ml-2" alt=""></a>
                                     <?php }; ?>                                     

                                     <?php $originalDate = $hm->tgl_konten; $newDate = date("d-m-Y", strtotime($originalDate));?><a class="text-white" href=""><small><?= $newDate ?></small></a>
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