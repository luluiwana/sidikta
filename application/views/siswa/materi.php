<div class="container-fluid mt-4">

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
        <div class="card mt-2">
            <div class="p-3 text-black materi">
                <p class="text-black fw-bolder fs-3"><?= $lesson->LessonTitle ?></p>
                <p class="text-black "><?= $lesson->LessonContent ?></p>
            </div>
        </div>
        <?php if ($lesson->File != "") : ?>
            <div class="card mt-2">
                <div class="p-3">
                    <p class="text-black fw-bold fs-5">Berkas Lampiran</p>
                    <p class="text-black"><i class="fas fa-file me-2"></i> <?= $lesson->File ?> </p>
                    <a href="<?= base_url() ?>lesson/download/<?= $CourseID ?>/<?= $LessonID ?>" class="btn mt-4"><i class="fas fa-download me-2"></i> Download</a>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($check == 0) : ?>
            <form action="<?= base_url() ?>Lesson/complete/" method="post">
                <input type="hidden" name="lesson" value="<?= $lesson->LessonID ?>">
                <input type="hidden" name="course" value="<?= $lesson->ID_Course ?>">
                <input type="submit" class="form-control btn mt-4 text-wrap" value="Selesaikan materi <?= $lesson->LessonTitle ?>">
            </form>
        <?php else : ?>
            <a href="<?= base_url() ?>lesson/course/<?= $lesson->ID_Course ?>" class="btn mt-4">Kembali</a>
        <?php endif; ?>
    </div>
</div>
<div class="mt-5" style="height: 50px;"></div>
</div>
</main>