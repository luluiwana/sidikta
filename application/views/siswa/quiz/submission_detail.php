<div class="container-fluid py-4">

    <div class="row">
        <div class="card">
            <div class="    ">
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
        <div class="card mt-2 p-3">

            <div class="row" id="start" style="display:flex">
                <div class=" text-black fw-bold  p-2 small"> <i class="fas fa-star text-warning"></i> Hadiah hingga 500 Poin</div>
                <p class="text-black fs-30px fw-bold"><?= $quiz->QuizTitle ?></p>
                <?php foreach ($question as $row) : ?>
                    <p class="text-black fs-15px prewrap text-start"><?= $row->Question ?></p>
                    <?php if ($row->question_img != null) : ?>
                        <img src="<?= base_url() ?>media/soal/<?= $row->question_img ?>" class="rounded ms-3 w-100 mt-2" alt="">
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class=" text-black fw-bold mt-2 "> Unggah Tugas</div>

        <div class="card mt-2 p-3">
            <div>
                <div class="" id="start" style="display:flex">
                    <form enctype='multipart/form-data' action="<?= base_url('quiz/SubmissionResult/' . $quiz->QuizID . '/' . $CourseID) ?>" method="post" id="quizForm" class="">
                        <label for="file" class="fs-15px fw-500">Pilih file</label>
                        <input type="file" name="tugas_siswa" id="" class="form-control" required>
                        <input type="submit" class="btn mt-3 text-wrap" value="Kirim Jawaban">
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="mt-5" style="height: 50px;"></div>

</div>
</main>