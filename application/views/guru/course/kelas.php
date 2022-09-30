<div class="container-fluid px-3">
    <div class="row mt-4">
        <?php if (!empty($courseList)) : ?>
            <div class="col-md-6">
                <div class="d-grid gap-2 d-md-flex ">
                    <a href="<?= base_url() ?>guru/buatkelas" class="btn btn-guru " type="button">Buat Kelas</a>
                </div>

                <?php foreach ($courseList as $row) : ?>
                    <div class="col-md-12 mt-2">
                        <a href="<?= base_url() ?>guru/course/<?= $row->CourseID ?>">
                            <div class="card">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class=" text-center course-logo my-auto">
                                            <img src="<?= base_url() ?>media/logo/<?= $row->CourseLogo ?>" class="w-100 " alt="">
                                        </div>
                                        <div class=" course-info">
                                            <p class=" text-black fw-bold mb-0"><?= $row->CourseName ?></p>
                                            <p class="text-black3 fw-bold mb-0 small"><?= $row->ClassName ?> -
                                                <?= $row->SchoolName ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-6 d-none d-sm-block">
                <img src="<?= base_url() ?>assets/img/vector/Thesis-rafiki.svg" class="w-100" alt="">
            </div>
        <?php else : ?>
            <div class="card">
                <div class="card-body">
                    <p>Anda belum membuat kelas</p>
                    <a href="<?= base_url() ?>guru/buatkelas" class="btn btn-guru w-auto ml-3 mt-3">Buat Kelas</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>