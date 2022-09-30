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
        <div class="card mt-2 p-3">
            <div class="row">
                <div class="w-50 row me-3">
                    <div class="w-20 my-auto">
                        <img src="<?= base_url() ?>assets/icon/goal.png" class="" style="width:30px;margin-left: -0.5rem;position:absolute;top:30px" alt="">
                    </div>
                    <div class=" w-80 my-auto">
                        <span class="text-blue d-block">Nilai</span>
                        <span class="text-black fw-700 fs-20px"><?= $user_quiz->result ?></span>
                    </div>
                </div>
                <div class="w-50 row">
                    <div class="w-20 my-auto">
                        <img src="<?= base_url() ?>assets/icon/star.png" class="" style="width:30px;margin-left: -0.5rem;position:absolute;top:30px" alt="">
                    </div>
                    <div class=" w-80 my-auto">
                        <span class="text-blue d-block">Hadiah</span>
                        <span class="text-black fw-700 fs-20px">+<?= $user_quiz->addXP ?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($quiz->QuizType == 1) : ?>


            <div class="p-0 mt-4">
                <p class="fs-20px fw-bold text-black mb-2">
                    Pembahasan</p>
                <?php $x = 1;
                foreach ($feedback as $row) : ?>
                    <?php $t = $row->TrueOption;
                    $a = $row->answer; ?>
                    <div class="card py-2 px-0 mb-2">
                        <p class="text-black p-3 prewrap"><?= $x ?>. <?= $row->Question ?></p>
                        <?php if ($row->question_img != null) : ?>
                            <img src="<?= base_url() ?>media/soal/<?= $row->question_img ?>" class="rounded w-100 mt-2" alt="">

                        <?php endif; ?>
                        <div class="ms-3 mt-3">
                            <p class=" <?php if ($t == $a && $a == 'A') {
                                            echo 'text-primary border-success';
                                        } elseif ($t !== $a && $a == 'A') {
                                            echo 'text-black';
                                        } elseif ($t == 'A') {
                                            echo 'text-primary border-success';
                                        } else {
                                            echo 'text-black';
                                        } ?>">
                                A. <?= $row->OptionA ?>
                                <?php if ($t == 'A') : ?>
                                    <i class="fas fa-check text-primary"></i>
                                <?php endif; ?>
                                <?php if ($t !== $a && $a == 'A') : ?>
                                    <i class="fas fa-times text-danger"></i>
                                <?php endif; ?>
                            </p>
                            <p class=" <?php if ($t == $a && $a == 'B') {
                                            echo 'text-primary border-success';
                                        } elseif ($t !== $a && $a == 'B') {
                                            echo 'text-black';
                                        } elseif ($t == 'B') {
                                            echo 'text-primary border-success';
                                        } else {
                                            echo 'text-black';
                                        } ?>">
                                B. <?= $row->OptionB ?>
                                <?php if ($t == 'B') : ?>
                                    <i class="fas fa-check text-primary"></i>
                                <?php endif; ?>
                                <?php if ($t !== $a && $a == 'B') : ?>
                                    <i class="fas fa-times text-danger"></i>
                                <?php endif; ?>
                            </p>
                            <p class=" <?php if ($t == $a && $a == 'C') {
                                            echo 'text-primary border-success';
                                        } elseif ($t !== $a && $a == 'C') {
                                            echo 'text-black';
                                        } elseif ($t == 'C') {
                                            echo 'text-primary border-success';
                                        } else {
                                            echo 'text-black';
                                        } ?>">
                                C. <?= $row->OptionC ?>
                                <?php if ($t == 'C') : ?>
                                    <i class="fas fa-check text-primary"></i>
                                <?php endif; ?>
                                <?php if ($t !== $a && $a == 'C') : ?>
                                    <i class="fas fa-times text-danger"></i>
                                <?php endif; ?>
                            </p>
                            <p class=" <?php if ($t == $a && $a == 'D') {
                                            echo 'text-primary border-success';
                                        } elseif ($t !== $a && $a == 'D') {
                                            echo 'text-black';
                                        } elseif ($t == 'D') {
                                            echo 'text-primary border-success';
                                        } else {
                                            echo 'text-black';
                                        } ?>">
                                D. <?= $row->OptionD ?>
                                <?php if ($t == 'D') : ?>
                                    <i class="fas fa-check text-primary"></i>
                                <?php endif; ?>
                                <?php if ($t !== $a && $a == 'D') : ?>
                                    <i class="fas fa-times text-danger"></i>
                                <?php endif; ?>
                            </p>
                            <p class=" <?php if ($t == $a && $a == 'E') {
                                            echo 'text-primary border-success';
                                        } elseif ($t !== $a && $a == 'E') {
                                            echo 'text-black';
                                        } elseif ($t == 'E') {
                                            echo 'text-primary border-success';
                                        } else {
                                            echo 'text-black';
                                        } ?>">
                                E. <?= $row->OptionE ?>
                                <?php if ($t == 'E') : ?>
                                    <i class="fas fa-check text-primary"></i>
                                <?php endif; ?>
                                <?php if ($t !== $a && $a == 'E') : ?>
                                    <i class="fas fa-times text-danger"></i>
                                <?php endif; ?>
                            </p>
                        </div>

                    </div>
                <?php $x++;
                endforeach; ?>


            </div>
        <?php elseif ($quiz->QuizType == 2) : ?>
            <div class="card card-body mt-2">
                <div class="row">

                    <div class="col-md-7 my-auto ">
                        <p class="text-black mb-2 fs-20px fw-bold">Anda sudah mengerjakan soal <?= $quiz->QuizTitle ?></p>

                        <span class="text-black">Kunci jawaban tidak ditampilkan karena soal ini bersifat rahasia
                            </p>
                    </div>
                </div>
            </div>
        <?php elseif ($quiz->QuizType == 3) : ?>
            <div class="card card-body mt-2">
                <div class="row">

                    <?php if ($user_quiz->result == 0 && $user_quiz->addXP == 0) : ?>
                        <div class="col-md-7 my-auto">
                            <p class="fs-20px fw-bold text-black mb-2">Anda sudah mengumpulkan jawaban essay <?= $quiz->QuizTitle ?></p>
                            <p> <span class="text-black fs-15px"> Jawaban belum dikoreksi, hadiah poin akan diberikan setelah dinilai oleh fasilitator</span></p>
                        </div>
                    <?php else : ?>
                        <div class="col-md-7 my-auto text-center">
                            <p class="text-black mb-2 fs-20px fw-bold"><?= $quiz->QuizTitle ?></p>

                            <div class="text-black mt-3 p-3">
                                <p class="fw-bold text-uppercase text-blue">Komentar fasilitator</p>
                                <p><?= $user_quiz->comment ?></p>
                            </div>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <p class="fs-20px fw-bold text-black my-2">Jawaban Anda</p>
            <?php $x = 1;
            foreach ($feedback_essay as $row) : ?>
                <div class="card card-body mb-2">
                    <p class="text-black fs-15px fw-bold">No. <?= $x ?></p>
                    <p class="text-black fs-15px prewrap"> <?= $row->Question ?></p>
                    <?php if ($row->question_img != null) : ?>
                        <img src="<?= base_url() ?>media/essay/<?= $row->question_img ?>" class="rounded w-100 mt-2" alt="">
                    <?php endif; ?>
                    <p class="p-3 bg-dark text-white prewrap fs-15px mt-2"> <?= $row->Answer ?></p>
                </div>
            <?php $x++;
            endforeach; ?>
        <?php elseif ($quiz->QuizType == 4) : ?>
            <div class="card card-body mt-2">
                <div class="row">
                    <?php if ($user_quiz->result == 0 && $user_quiz->addXP == 0) : ?>
                        <div class="col-md-7 my-auto ">
                            <p class="text-black fs-20px fw-bold mb-2">Anda sudah mengumpulkan tugas: <?= $quiz->QuizTitle ?></p>
                            <p> <span class="text-black"> Jawaban belum dikoreksi, hadiah poin akan diberikan setelah dinilai oleh fasilitator</span></p>


                        </div>
                    <?php else : ?>
                        <div class="col-md-7 my-auto text-center">
                            <p class="text-black mb-2 fs-20px fw-bold"><?= $quiz->QuizTitle ?></p>

                            <div class="text-black mt-3 p-3">
                                <p class="fw-bold text-uppercase text-blue">Komentar</p>
                                <p><?= $user_quiz->comment ?></p>
                            </div>

                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <?php foreach ($feedback_essay as $row) : ?>
                <div class="card mt-2 p-0">
                    <p class="text-black fs-20px fw-bold p-3">Pertanyaan</p>
                    <p class="text-black p-3 prewrap"><?= $row->Question ?></p>
                    <?php if ($row->question_img != null) : ?>
                        <img src="<?= base_url() ?>media/tugas/<?= $row->question_img ?>" class="rounded w-100 mt-2" alt="">
                    <?php endif; ?>
                    <a href="<?= base_url('quiz/download/' . $quizID . '/' . $CourseID) ?>" class="btn mt-3">Download Jawaban Anda</a>

                </div>
            <?php
            endforeach; ?>
        <?php endif; ?>
    </div>


</div>
<div class="mt-5" style="height: 50px;"></div>

</div>
</main>