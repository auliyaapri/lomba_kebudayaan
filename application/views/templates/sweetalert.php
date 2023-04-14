<script>
    <?php if ($this->session->flashdata('success_login')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Login Berhasil',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_tambah_data')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Konten Berhasil ditambahkan!',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_beli')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Membership berhasil di beli!',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('belum_login')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Anda Belum Login',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_daftar_login')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Anda Berhasil Daftar',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_tambah_keranjang')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Tambah Keranjang Berhasil',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>

    <?php if ($this->session->flashdata('success_hapussurat')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Surat Berhasil dihapus',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_ubahsurat')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Surat Berhasil diubah',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('keranjang_kosong_pembayaran')) { ?>
        Swal.fire({
            title: 'Oops...!',
            text: 'Anda belum mempunyai keranjang',
            icon: 'error',
            confirmButtonText: 'Oke'
        })
    <?php } ?>

    
</script>