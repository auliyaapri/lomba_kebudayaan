<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "icon" href ="<?php echo site_url(); ?>assets_login2/logo.jpg" type = "image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SBI!</title>
</head>

<body>
<?php $nama_paket = $this->uri->segment(2); ?>
    <div class="container mt-5">
    <h1 class="text-center">Paket Membership  <span class="font-weight-bolder"><?php echo ucfirst($nama_paket) ?></span></h1>
        <form action="<?= base_url() . 'user/Tambah_membership'; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Paket Member</label>
                <input class="form-control" type="text" value="<?php echo $nama_paket ?>" placeholder="Standard" name="nama_paket" readonly>                
            </div>
            <div class="form-group">
                
                <?php foreach ($data_user as $ud) : ?>                    
                    <input class="form-control" type="hidden" value="<?php echo $ud->id_user ?>" name="id_user" readonly>                
                    <?php endforeach ; ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pembeli / Username</label>
                <input class="form-control" type="text" value="<?php echo $this->session->userdata('username') ?>" placeholder="Standard" name="nama_pembeli" readonly>                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Keterangan</label>
                <input class="form-control" type="text" value="Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 7 hari saja." name="keterangan" placeholder="user dapat mengupload lebih dari 10 konten. " readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Harga</label>
                <input class="form-control" type="text" value="Rp. 15.000" name="harga" placeholder="Rp. 15.000 " readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nomor rekening</label>
                <input class="form-control" type="text" value="BCA 19210483" name="nomor_rekening" placeholder="19210483" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Berlaku hingga</label>
                <?php $tgl_membership = date("F-d-Y", strtotime('+7 days')) ; ?>
                <input class="form-control" type="text" value="<?=$tgl_membership?>" placeholder="19210483" readonly>
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Bayar Melalui</label>
                <select class="custom-select mb-3 form-control" name="bank">
                    <option value="ovo"> <i class="fas fa-shopping-cart"></i> OVO</option>
                    <option value="gopay">Gopay</option>
                    <option value="dana">Dana</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Upload Bukti Bayarr</label>                
                <input type="file" name="gambar" class="form-control" required>
                
                
            </div>
            <a href="<?= base_url('membership') ?>" class="btn btn-danger"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
            <button class="btn btn-success" type="submit"><i class="fas fa-shopping-cart"></i> Lanjutkan Pembelian</button>            


        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>