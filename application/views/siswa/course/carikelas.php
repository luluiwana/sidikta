<div class="container-fluid py-4">
    <div class="row">
        <div class="card">
            <div class=" pb-2">
                <div class="row bg-blue p-3  round-up">
                    <img src="<?= base_url() ?>media/avatar/<?= $this->session->userdata('ava') ?>" id="ava-header" class="my-auto">
                    <span class="text-white fw-bold fs-20px w-80 my-auto" style="line-height: 20px;"><?= $user->UserName ?>
                    </span>
                </div>
                <div class="row p-3">
                    <!-- start badges -->
                    <span class="w-50"> <img src="<?= base_url() ?>assets/character/<?= $user->LevelID ?>.png" class="level-badge" alt=""></span>

                    <span class="text-black fw-700 fs-20px w-50 my-auto text-end"> <img src="<?= base_url() ?>assets/icon/star.png" class="w-auto" style="height:30px;margin-bottom:8px" alt="">
                        <?php if ($total_xp == "") {
                            echo "0";
                        } else {
                            echo $total_xp;
                        } ?>
                    </span>
                </div>


            </div>
        </div>
        <?php if (empty($course)) : ?>
            <div class="card mt-2">
                <div class="card-body">
                    Kamu sudah mengambil semua kelas
                </div>
            </div>
        <?php else : ?>
            <div class="row m-auto mt-2">
                <?php foreach ($course as $row) : ?>

                    <div class="card w-45 text-center p-2 m-1">
                        <div class="text-center course-logo m-auto lh-20px">
                            <img src="<?= base_url() ?>media/logo/<?= $row->CourseLogo ?>" class="w-100 " alt="">
                        </div>
                        <div class="course-info">
                            <p class="text-black fs-15px mb-0 fw-bold lh-20px mt-2"><?= $row->CourseName ?></p>
                            <p class=" text-black mb-0 fs-10px"><?= $row->ClassName ?> -
                                <?= $row->SchoolName ?></p>
                            <a href="<?= base_url() ?>siswa/join/<?= $row->id ?>" class="btn btn-sm mt-2">Masuk</a>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="mt-5" style="height: 50px;"></div>
</div>
</main>