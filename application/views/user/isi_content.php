<div class="container-fluid bg-white">
    <div class="row align-items-center bg-white py-3 px-lg-5">
        <div class="col-lg-12">
            <form class="ml-3">

                <?php if (strlen( $this->session->userdata('nama_paket')) == 0) {  ?>
                    <script>
                        alert('Anda Belum Bayar')
                    </script>
                </div>
                <?php  } ; ?>
                
                                
    
      
                
                
                <?php foreach ($isi_konten as $dpu) : ?>
                    <?php if ($dpu->nama_paket === "") { ?>
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="email" class="form-control" value="<?= $dpu->nama; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="email" class="form-control" value="<?= $dpu->username; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="email" class="form-control" value="<?= $dpu->password; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                        </div>



                    <?php } else {; ?>
                        <h1 class="mt-5">Masukan Konten</h1>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Judul</label>
                            <input type="text" name="judul_konten" class="form-control">
                            <div class="text-danger small mt-2"> <?php echo validation_errors('Judul Konten'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pilih Daerah</label>
                            <select class="custom-select mb-3 form-control" name="daerah">
                                <option value="jakarta">DKI Jakarta</option>
                                <option value="jawa barat">Jawa Barat</option>
                                <option value="jawa tengah">Jawa Tengah</option>
                                <option value="jawa timur">Jawa Timur</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pilih Kategori</label>
                            <select class="custom-select mb-3 form-control" name="kategori">
                                <option value="makanan">Makanan</option>
                                <option value="alat musik">Alat Musik</option>
                                <option value="tarian">Tarian</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Isi Konten</label>
                            <textarea class="form-control" name="isi_konten" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <div class="text-danger small mt-2"> <?php echo validation_errors('Isi Konten'); ?></div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Penulis</label>

                                <input type="text" name="nama_penulis" value="<?php echo $this->session->userdata('username') ?>" class="form-control" readonly>
                                <div class="text-danger small mt-2"> <?php echo validation_errors('Nama Penulis'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                                <div class="text-danger small mt-2"> <?php echo validation_errors('Gambar'); ?></div>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a type="submit" class="btn btn-danger" href="<?= base_url('home') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a>




                        <?php }; ?>
                    <?php endforeach; ?>

            </form>
        </div>
    </div>
</div>