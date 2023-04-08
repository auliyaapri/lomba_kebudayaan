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
        <h1 class="text-center">Masukan Konten</h1>
        <form action="<?= base_url() . 'user/menambahkan/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" name="judul_konten" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Pilih Daerah</label>
                <select class="custom-select mb-3 form-control" name="daerah">
                    <option selected>Pilih daerah</option>
                    <option value="jakarta">DKI Jakarta</option>
                    <option value="jawa tengah">Jawa barat</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Pilih Kategori</label>
                <select class="custom-select mb-3 form-control" name="kategori">
                    <option selected>Pilih daerah</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Alat musik">Alat Musik</option>
                    <option value="Tarian">Tarian</option>
                </select>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Isi Konten</label>
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Slider Home</label>
                <input type="text" name="kategori2" class="form-control">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Pilih Gambar</label>
                <input type="file" name="gambar" class="form-control">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>