
    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2 mr-2 px-1">Artikel Terbaru</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center"
                            style="width: calc(100% - 170px); padding-right: 9px;">
                            <?php foreach ($berita_terbaru as $brt) :?>
                            <!-- ========= START PENGKONDISIAN KATEGORI ===== -->
                                <?php   
                                        $folder          = $brt->kategori;
                                        $daerah          = $brt->daerah;
                                        $kategori_folder = $brt->kategori;
                                ?>
                                <?php $id_kontenn = $brt->id_konten ; ?>
                            <!-- ========= END PENGKONDISIAN KATEGORI ===== -->
                            <?php if ($brt->kategori == "makanan") { ?>                                
                                <a class="text-white text-uppercase font-weight-semi-bold d-flex align-items-center" href="<?=base_url('detail/detail_konten/'.$id_kontenn)?>">
                                    <?=$brt->judul_konten?> / <?=$brt->daerah?>  
                                    <!-- <img src="<?= base_url() ?>assets/img/artikel_terbaru/food-icon.png" style="width: 30px;" class="ml-2" alt=""> -->
                             </a>
                            <?php } ; ?>
                            <?php if ($brt->kategori == "alat musik") { ?>

                                <a class="text-white text-uppercase font-weight-semi-bold d-flex align-items-center" href="<?=base_url('detail/detail_konten/'.$id_kontenn)?>">
                                    <?=$brt->judul_konten?> / <?=$brt->daerah?> 
                                    <!-- <img src="<?= base_url() ?>assets/img/artikel_terbaru/alat_musik.png" style="width: 30px;" class="ml-2" alt=""> -->
                             </a>
                            <?php } ; ?>
                            <?php if ($brt->kategori == "tarian") { ?>

                                <a class="text-white text-uppercase font-weight-semi-bold d-flex align-items-center" href="<?=base_url('detail/detail_konten/'.$id_kontenn)?>">
                                    <?=$brt->judul_konten?> / <?=$brt->daerah?> 
                                    <!-- <img src="<?= base_url() ?>assets/img/artikel_terbaru/dance_icon.png" style="width: 30px;" class="ml-2" alt=""> -->
                             </a>
                            <?php } ; ?>
                                
                            <?php endforeach ; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->