<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-body p-3">
                    <div class="text-center">
                        <img src="<?= base_url() ?>media/avatar/<?= $profil->UserAvatar ?>" class="profil-ava" alt="">
                        <div class="mt-2 text-black fw-bold fs-20px">
                            <?= $this->session->userdata('nama'); ?>
                        </div>
                        <div class="mt-2 text-danger fw-bold fs-15px"><?php echo $error; ?></div>

                    </div>
                    <div class="col-md-8 mt-5 mx-auto">
                        <div class="fw-bold text-black">
                            Pilih Foto Profil
                        </div>
                        <div class="row mt-3">
                            <?php for ($i = 1; $i <= 10; $i++) :  ?>
                                <div class="m-1 choose-ava">
                                    <a href="<?= base_url() ?>profil/updateAvatar/ava<?= $i ?>.png"> <img src="<?= base_url() ?>media/avatar/ava<?= $i ?>.png" class="w-100" alt=""></a>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="col-md-8 mx-auto mt-5">
                        <div class="fw-bold text-black">
                            Atau upload foto
                            <p class="small">Ukuran foto maksimal 200KB</p>
                            <form action="<?= base_url() ?>profil/updatePhoto" method="post" enctype='multipart/form-data' class="row ">
                                <div class="col-md-8 mt-3">
                                    <input type="file" name="avatar" id="" required class="form-control" accept="image/*">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <input type="submit" value="Simpan" class="btn btn-guru">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="mt-5" style="height: 50px;"></div>
</div>
</main>