<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-5">
        <?php foreach ($data_home_navbar as $dhn ) :?>
            
                <?php $originalDate = $dhn->tgl_membership; 
                $newDate = date("F-d-Y", strtotime('+4 days', strtotime($originalDate))); ?>
                <a href="" ><?= $newDate ?></a>
            
            
        <?php endforeach;?>

        <?php echo $newDate ; ?>
        <br>
        <br>
        <br>
        <?php $tgl_sekarang = date("F-d-Y"); ?>
        
        <?php if ($newDate > $tgl_sekarang) :?>
            <h1 class="text-center">Masukan KontenSSS</h1>
            
            <?php endif; ?>
            
        
        
        <h1 class="text-center">Masukan Konten</h1>


        <form action="<?= base_url() . 'user/menambahkan/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
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
                    <input type="text" name="nama_penulis" class="form-control">
                    <div class="text-danger small mt-2"> <?php echo validation_errors('Nama Penulis'); ?></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Pilih Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                    <div class="text-danger small mt-2"> <?php echo validation_errors('Gambar'); ?></div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="submit" class="btn btn-danger" href="<?= base_url('home') ?>"><i class="fa fa-chevron-circle-left"></i>  Kembali</a>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>