<div class="bg-white">
    <div class="container-fluid">
        <div class="row align-items-center h-100 py-3 px-lg-5">
            <div class="col-lg-12">
                <div class="ml-3 mr-3">
                    <!-- ================ PHP TANGGAL KONDISI ================= -->
                    <?php foreach ($isi_konten as $dpu) : ?>
                        <?php $originalDate = $dpu->tgl_membership;
                        $newDate = date("F-d-Y"); ?>
                        <?php $paket = $dpu->nama_paket ?>
                        <?php
                        if ($paket === "basic") {
                            $new_date = date("F-d-Y", strtotime('+7 days', strtotime($originalDate)));
                        } elseif ($paket === "standard") {
                            $new_date = date("F-d-Y", strtotime('+3 days', strtotime($originalDate)));
                            # code...
                        } elseif ($paket === "pro") {
                            $new_date = date("F-d-Y", strtotime('+4 days', strtotime($originalDate)));
                        } else {
                            $new_date = null;
                        }
                        ?>
                    <?php endforeach; ?>
                    <!-- ================ PHP TANGGAL KONDISI ================= -->
                    
                    <?php if ($paket == FALSE && $new_date < $newDate) { ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                            <strong>Anda belum berlangganan</strong> anda harus berlangganan jika ingin menambahkan artikel!!.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
               
                        <form action="<?= base_url() . 'user/menambahkan/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                            <h1 class="mt-5">Masukan Konten</h1>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul</label>
                                <input type="text" name="judul_konten" class="form-control" readonly>
                                <div class="text-danger small mt-2"> <?php echo validation_errors('Judul Konten'); ?></div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Daerah</label>
                                <select class="custom-select mb-3 form-control" name="daerah" readonly>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Kategori</label>
                                <select class="custom-select mb-3 form-control" name="kategori" readonly>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Isi Konten</label>
                                <textarea class="form-control" name="isi_konten" id="floatingTextarea2" style="height: 100px" readonly></textarea>
                                <div class="text-danger small mt-2"> <?php echo validation_errors('Isi Konten'); ?></div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Penulis</label>

                                    <input type="text" name="nama_penulis" class="form-control" readonly>
                                    <div class="text-danger small mt-2"> <?php echo validation_errors('Nama Penulis'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pilih Gambar</label>
                                    <input type="text" name="gambar" class="form-control" readonly>
                                    <div class="text-danger small mt-2"> <?php echo validation_errors('Gambar'); ?></div>
                                </div>
                                <a type="submit" class="btn btn-danger" href="<?= base_url('home') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a>

                        </form>



                    <?php } else {; ?>
                        <form action="<?= base_url() . 'user/menambahkan/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                            <h1 class="mt-5">Masukan SKonsen</h1>
                                              
                            <?php foreach ($isi_konten as $dpu) : ?>
                                <input type="hidden" value="<?=$dpu->id_user?>" name="id_user" class="form-control">
                                <?php endforeach ; ?>
                  
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul</label>

                                <input type="text" name="judul_konten" class="form-control" required>
                                
                                <div class="text-danger small mt-2"> <?php echo validation_errors('judul_konten'); ?></div>
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
                                <select class="custom-select mb-3 form-control" name="kategori" required>
                                    <option value="makanan">Makanan</option>
                                    <option value="alat musik">Alat Musik</option>
                                    <option value="tarian">Tarian</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Isi Konten</label>
                                <textarea class="form-control" name="isi_konten" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                                <div class="text-danger small mt-2"> <?php echo validation_errors('Isi Konten'); ?></div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Penulis</label>

                                    <input type="text" name="nama_penulis" value="<?php echo $this->session->userdata('username') ?>" class="form-control" readonly>
                                    <div class="text-danger small mt-2"> <?php echo validation_errors('Nama Penulis'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pilih Gambar</label>
                                    <input type="file" name="gambar" class="form-control" required>
                                    <div class="text-danger small mt-2"> <?php echo validation_errors('Gambar'); ?></div>
                                </div>


                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="submit" class="btn btn-danger" href="<?= base_url('home') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a>

                        </form>


                    <?php }; ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>