   <!-- Topbar Start -->
   <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#"><?php echo date("l") . ', '.date('F j'). ', '.date('Y');?></a>
                        </li>                                                
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="<?=base_url('auth/login')?>">Login</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="<?=base_url('welcome')?>">Tambahkan Artikel</a>
                            
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="<?=base_url('membership')?>">Beli Membership</a>                            
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-auto mr-n2">
                    <?php if ($this->session->userdata('username')) { ?>
                        <?php foreach ($data_home_navbar as $dhn) :?>                                                                           
                            <?php $namaUser =  $this->session->userdata('username'); ?>
                            <?php
                            if ($namaUser ) {
                                # code...
                            }                                                        
                            ?>
                            
                                
                            <li><a href="<?=base_url('Profile')?>"><div>Selamat Datang <?=  $namaUser?></div></a> </li>   

                            <?php break; ?>
                            <?php endforeach; ?>
                    <?php } ; ?>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="<?=base_url('home')?>" class="navbar-brand p-0 d-none d-flex align-items-center">                
                <img src="<?= base_url() . '/assets/img/logo_sbi.png' ?>" height="70px">
                <!-- <h1 class="ml-2 m-0 display-4 text-uppercase text-primary"><span class="text-secondary font-weight-normal">Sbi</span></h1> -->
                <h5 style="font-size: 40px;" class="m-0 pl-2 display-4 text-primary font-weight-bold"><span class="text-secondary font-weight-bolder">Seputar Budaya</span> Indonesia</h5>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <a href="https://htmlcodex.com"><img class="img-fluid" href="<?= base_url()?>assets/ads-728x90.png" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">Bizs<span class="text-white font-weight-normal">News</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">                    
                    <a aria-current="page" href="<?= base_url('home') ?>" <?= $this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ? 'class="active nav-link"' : 'class="nav-link"' ?>>Beranda</a>                    
                    <a aria-current="page" href="<?= base_url('kategori') ?>" <?= $this->uri->segment(1) == 'kategori' || $this->uri->segment(1) == 'kategori' ? 'class="active nav-link"' : 'class="nav-link"' ?>>Kategori</a>                    
                    <?php if ($this->session->userdata('username')) { ?>
                                    <li>
                                        <a href="<?=base_url('auth/logout')?>" class="nav-item nav-link">Log out</a>
                                        
                                    </li>      
                                    <?php } else { ?>
                                    <!-- Jika blm login maka akan ada perintah suruh login -->
                                    <li>
                                    <a href="<?=base_url('auth/login')?>" class="nav-item nav-link">Login</a>
                                        </li>
                                <?php }; ?>                                          
                    <a href="<?=base_url('auth/register');?>" class="nav-item nav-link">DAFTAR</a>              
                </div>



                <?php if ($this->uri->segment(1) == 'home') {?>
                <?php echo form_open('home'); ?>
                
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword" name="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3" type="submit" name="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                
                <?php echo form_close(); ?>
                <?php } ; ?>





                <?php if ($this->uri->segment(2) == 'alat_musik') {?>
                <?php echo form_open('kategori/alat_musik'); ?>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword" name="keyword">
                    <div class="input-group-append">
                    <button class="input-group-text bg-primary text-dark border-0 px-3" type="submit" name="submit"><i class="fa fa-search"></i></button>
                    </div>
                    
                </div>
                <?php echo form_close(); ?>
                <?php } ; ?> 

                <?php if ($this->uri->segment(2) == 'makanan') {?>
                <?php echo form_open('kategori/makanan'); ?>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword" name="keyword">
                    <div class="input-group-append">
                    <button class="input-group-text bg-primary text-dark border-0 px-3" type="submit" name="submit"><i class="fa fa-search"></i></button>
                    </div>
                    
                </div>
                <?php echo form_close(); ?>
                <?php } ; ?> 

                <?php if ($this->uri->segment(2) == 'tarian') {?>
                <?php echo form_open('kategori/tarian'); ?>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword" name="keyword">
                    <div class="input-group-append">
                    <button class="input-group-text bg-primary text-dark border-0 px-3" type="submit" name="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <?php echo form_close(); ?>
                <?php } ; ?> 


                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->