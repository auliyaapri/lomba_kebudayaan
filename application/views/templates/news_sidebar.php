   <!-- News With Sidebar Start -->
   <div class="container-fluid">
       <div class="container">
           <div class="row">
               <div class="col-lg-8">
                   <div class="row">
                       <div class="col-12">
                           <div class="section-title">
                               <h4 class="m-0 text-uppercase font-weight-bold">Berita Terbaru</h4>
                               <!-- <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a> -->
                           </div>
                       </div>
                       <?php foreach ($berita_terbaru as $brt) : ?>

                           <div class="col-lg-6">
                               <div class="position-relative ">
                                   <div class="mt-2 ">
                                       <?php
                                        $folder          = $brt->kategori;
                                        $daerah          = $brt->daerah;
                                        $kategori_folder = $brt->kategori;
                                        ?>
                                       <!-- <img class="img-fluid h-100" src="<?= base_url() ?>assets/img/news-700x435-1.jpg" style="object-fit: cover;"> -->
                                       <img src="<?= base_url() . '/upload_image/' . $daerah . '/' . strtolower($kategori_folder) . '/' . $brt->gambar ?>" class="img-fluid w-100 h-100" style="object-fit: cover;">
                                       <div class="bg-white border border-top-0 p-4">
                                           <div class="mb-2">
                                               <?php if ($brt->kategori == "makanan") { ?>
                                                   <a href="<?=base_url('kategori/makanan')?>" class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center " style="width: 35%;" href=""><?= $brt->kategori ?> <img src="<?= base_url() ?>assets/img/food-icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                                               <?php }; ?>
                                               <?php if ($brt->kategori == "tarian") { ?>
                                                   <a href="<?=base_url('kategori/tarian')?>" class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center " style="width: 30%;" href=""><?= $brt->kategori ?> <img src="<?= base_url() ?>assets/img/dance_icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                                               <?php }; ?>
                                               <?php if ($brt->kategori == "alat musik") { ?>
                                                   <a href="<?=base_url('kategori/alat_musik')?>" class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center " style="width: 35%;" href=""><?= $brt->kategori ?> <img src="<?= base_url() ?>assets/img/alat_musik.png" style="height: 23px;" class="ml-2" alt=""></a>
                                               <?php }; ?>                                               
                                               <?php $originalDate = $brt->tgl_konten; $newDate = date("F-d-Y", strtotime($originalDate));?>
                                               <a class="text-body mt-5" href=""><small><?= $newDate ?></small></a>
                                           </div>
                                           <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?= base_url('detail/detail_konten/' . $brt->id_konten); ?>"><?= $brt->judul_konten ?></a>                                           
                                           <p class="m-0"><?= substr($brt->isi_konten, 0, 150) . '...'; ?></p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       <?php endforeach; ?>

                   </div>
               </div>

               <div class="col-lg-4">
                   <!-- Popular News Start -->
                   <div class="mb-3">
                       <div class="section-title mb-0">
                           <h4 class="m-0 text-uppercase font-weight-bold">Berita Trending</h4>
                       </div>
                       <div class="bg-white border border-top-0 p-3">
                       <?php foreach ($berita_terbaru as $brt) : ?>
                        <?php
                    $folder          = $brt->kategori;
                    $daerah          = $brt->daerah;
                    $kategori_folder = $brt->kategori;
                    ?>

                           <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                               <!-- <img class="img-fluid" src="<?= base_url() ?>assets/img/news-110x110-1.jpg" alt=""> -->
                               <img src="<?= base_url() . '/upload_image/' . $daerah . '/' . strtolower($kategori_folder) . '/' . $brt->gambar ?>" class="img-fluid" style="height: 110px; width: 110px; object-fit: cover;">
                               <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                   <div class="mb-2">
                                       <!-- <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a> -->
                                       <?php if ($brt->kategori == "tarian") { ?>
                                                   <a href="<?=base_url('kategori/alat_musik')?>" class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center " style="width: 47%;" href=""><?= $brt->kategori ?> <img src="<?= base_url() ?>assets/img/dance_icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                                               <?php }; ?>
                                       <?php if ($brt->kategori == "makanan") { ?>
                                                   <a href="<?=base_url('kategori/makanan')?>" class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center " style="width: 57%;" href=""><?= $brt->kategori ?> <img src="<?= base_url() ?>assets/img/food-icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                                               <?php }; ?>
                                       <?php if ($brt->kategori == "alat musik") { ?>
                                                   <a href="<?=base_url('kategori/alat_musik')?>" class="badge badge-primary text-uppercase font-weight-semi-bold mr-1 d-flex align-items-center " style="width: 47%;" href=""><?= $brt->kategori ?> <img src="<?= base_url() ?>assets/img/alat_musik.png" style="height: 23px;" class="ml-2" alt=""></a>
                                               <?php }; ?>
                                       <?php $originalDate = $brt->tgl_konten; $newDate = date("F-d-Y", strtotime($originalDate));?><a class="text-body" href=""><small><?= $newDate ?></small></a>
                                   </div>
                                   <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="<?= base_url('detail/detail_konten/' . $brt->id_konten); ?>"><?=$brt->judul_konten?></a>
                               </div>
                           </div>
                        <?php endforeach; ?>
                    
                       </div>
                   </div>
                   <!-- Popular News End -->

                   <!-- Tags Start -->
                   <div class="mb-3">
                       <div class="section-title mb-0">
                           <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                       </div>
                       <div class="bg-white border border-top-0 p-3">
                           <div class="d-flex flex-wrap m-n1">
                               <a href="<?= base_url('kategori/makanan') ?>" class="btn btn-sm btn-outline-secondary m-1">Makanan</a>
                               <a href="<?= base_url('kategori/tarian') ?>" class="btn btn-sm btn-outline-secondary m-1">Tarian</a>
                               <a href="<?= base_url('kategori/alat_musik') ?>" class="btn btn-sm btn-outline-secondary m-1">Alat Musik</a>
                           </div>
                       </div>
                   </div>
                   <!-- Tags End -->
               </div>
           </div>
       </div>
   </div>
   <!-- News With Sidebar End -->