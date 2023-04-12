    <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-4 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Indonesia</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>sbi.com</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Berita Popular</h5>
                <?php foreach ($berita_terbaru as $brt) :?>
                <div class="mb-3">
                    <div class="mb-2">
                    <?php if ($brt->kategori == "tarian") { ?>
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="<?=base_url('kategori/tarian')?>"><?= $brt->kategori ?> <img src="<?= base_url() ?>assets/img/dance_icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                        <?php }; ?>
                    <?php if ($brt->kategori == "makanan") { ?>
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="<?=base_url('kategori/makanan')?>"><?= $brt->kategori ?> <img src="<?= base_url() ?>assets/img/food-icon.png" style="height: 23px;" class="ml-2" alt=""></a>
                        <?php }; ?>
                    <?php if ($brt->kategori == "alat musik") { ?>
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="<?=base_url('kategori/alat_musik')?>"><?= $brt->kategori ?> <img src="<?= base_url() ?>assets/img/alat_musik.png" style="height: 23px;" class="ml-2" alt=""></a>
                        <?php }; ?>
                        <?php $originalDate = $brt->tgl_konten; $newDate = date("F-d-Y", strtotime($originalDate));?><a class="text-body" href=""><small><?= $newDate ?></small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href=""><?=$brt->judul_konten;?></a>
                </div>
                <?php endforeach ; ?>
         

            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
                <div class="m-n1">
                <a href="<?=base_url('kategori/makanan')?>" class="btn btn-sm btn-secondary m-1">Makanan</a>
                    <a href="<?=base_url('kategori/tarian')?>" class="btn btn-sm btn-secondary m-1">Tarian</a>
                    <a href="<?=base_url('kategori/alat_musik')?>" class="btn btn-sm btn-secondary m-1">Alat Musik</a>
                   
                </div>
            </div>    
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">SBI</a>. Seputar Budaya Indonesia
    </div>
    <!-- Footer End -->