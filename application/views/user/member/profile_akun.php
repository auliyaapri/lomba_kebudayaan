<div class="container-fluid">
    <div class="row align-items-center bg-white py-3 px-lg-5">
        <div class="col-lg-12">
        
            <form class="ml-3">
                <?php foreach ($data_profile_user as $dpu) : ?>
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
                        <div class="form-group">
                            <label for="exampleInputEmail1">Membership</label>
                            <input type="email" class="form-control" value="Belum Ada" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                        </div>
                    <?php } else {; ?>
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
                    <div class="form-group">
                        <label for="exampleInputEmail1">Paket Membership</label>
                        <input type="email" class="form-control" value="<?= $dpu->nama_paket; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Berlaku hingga</label>
                        <?php $paket = $dpu->nama_paket ?>
                        <?php if ($paket === "basic") : ?>
                            <?php $tgl_membership = date("F-d-Y", strtotime('+7 days', strtotime($dpu->tgl_membership))); ?>
                            <input class="form-control" type="text" value="<?= $tgl_membership ?>" placeholder="19210483" readonly>
                        <?php endif; ?>
                        <?php if ($paket === "standard") : ?>
                            <?php $tgl_membership = date("F-d-Y", strtotime('+3 days', strtotime($dpu->tgl_membership))); ?>
                            <input class="form-control" type="text" value="<?= $tgl_membership ?>" placeholder="19210483" readonly>
                        <?php endif; ?>
                        <?php if ($paket === "pro") : ?>
                            <?php $tgl_membership = date("F-d-Y", strtotime('+14 days', strtotime($dpu->tgl_membership))); ?>
                            <input class="form-control" type="text" value="<?= $tgl_membership ?>" placeholder="19210483" readonly>
                        <?php endif; ?>
                    </div>
                    <?php } ; ?>
                    
                <?php endforeach; ?>
                
                <a href="<?= base_url('home') ?>" class="btn btn-danger"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
            </form>
        </div>
    </div>
</div>