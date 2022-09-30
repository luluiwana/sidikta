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
        <?php if (!empty($courseList)) : ?>
            <?php foreach ($courseList as $row) : ?>
                <a href="<?= base_url() ?>discussion/all/<?= $row->CourseID ?>" class="p-0">
                    <div class="card mt-2">
                        <div class="card-body ">
                            <div class="row">
                                <div class="w-20 text-center my-auto">
                                    <img src="<?= base_url() ?>media/logo/<?= $row->CourseLogo ?>" class="w-100" alt="">
                                </div>
                                <div class="w-80 course-info">
                                    <p class=" text-black mb-0">Forum <?= $row->CourseName ?></p>
                                    <p class=" text-black3 mb-0 small"><?= $row->ClassName ?> -
                                        <?= $row->SchoolName ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>
            <?php endforeach; ?>


        <?php else : ?>
            <div class="card mt-2">
                <div class="card-body">
                    <p>Kamu belum mendaftar kelas apapun</p>
                    <a href="<?= base_url() ?>siswa/carikelas" class="btn  ml-3 mt-3">Masuk Kelas Baru</a>
                </div>
            </div>
        <?php endif; ?>



    </div>
    <div class="mt-5" style="height: 50px;"></div>

</div>
</main>