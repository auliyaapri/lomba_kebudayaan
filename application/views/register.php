<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Login Cuyy</title>
	<link rel = "icon" href ="<?php echo site_url(); ?>assets_login2/logo.jpg" type = "image/x-icon">
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets_login2/all.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets_login2/toast/toast.min.css">
	<script src="<?php echo site_url(); ?>assets_login2/toast/jqm.js"></script>
	<script src="<?php echo site_url(); ?>assets_login2/toast/toast.js"></script>
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<!-- <img src="<?php echo site_url(); ?>assets_login2/logo.jpg" alt="logo" width="100"> -->
					</div>
					<div class="card shadow-lg">
					<center> <img class="mt-3" src="<?php echo site_url(); ?>assets_login2/logo.jpg" alt="logo" width="150"></center>    
						<div class="card-body px-5">
							<h1 class="fs-4 card-title fw-bold">Pendaftaran</h1>							
							<form action="<?=base_url('Register/index')?>" method="post" >
							
							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">Nama Lengkap</label>
								<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda">
								<?php echo form_error('nama', '<div class="text-danger small mt-2">', '</div>'); ?>                                
							</div>
							<!-- <input type="hidden" name="id_user" class="form-control" placeholder="Masukan Nama Anda"> -->


							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">Username</label>								
								<input type="text" name="username" class="form-control" placeholder="Masukan username Anda">   
                                    <?php echo form_error('username', '<div class="text-danger small mt-2">', '</div>'); ?>                          

							</div>
							<div class="mb-3">
								<label class="mb-2 text-muted" for="password">Password</label>								
								<input type="password" name="password" class="form-control" placeholder="Masukan password Anda">
                                    <?php echo form_error('password', '<div class="text-danger small mt-2">', '</div>'); ?>                                 
							</div>
							<div class="mb-3">
								<label class="mb-2 text-muted" for="password">Ketik Ulang Password</label>
								<input type="password" name="password2" class="form-control" placeholder="Ulangi password Anda">
                                    <?php echo form_error('password', '<div class="text-danger small mt-2">', '</div>'); ?>                                        
							</div>
							<div class="d-flex align-items-center">
								<button type="submit" class="btn btn-primary ">
									Daftar
								</button>
							</div>
						</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Sudah Punya Akun? <a href="<?php echo site_url(); ?>auth/login" class="text-dark"> Ayo, Login!</a>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		<?php if ($this->session->flashdata('suc')) { ?>
			toastr.success("<?php echo $this->session->flashdata('suc'); ?>");
		<?php } else if ($this->session->flashdata('worng')) {  ?>
			toastr.error("<?php echo $this->session->flashdata('worng'); ?>");
		<?php } else if ($this->session->flashdata('warning')) {  ?>
			toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
		<?php } else if ($this->session->flashdata('info')) {  ?>
			toastr.info("<?php echo $this->session->flashdata('info'); ?>");
		<?php } ?>
		<?php
		$this->session->unset_userdata('suc'); ?>

		<?php
		$this->session->unset_userdata('worng'); ?>
	</script>
</body>

</html>