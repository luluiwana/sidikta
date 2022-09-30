<?php
if ($quiz->QuizType == 1) {
    $type = "Quiz";
} elseif ($quiz->QuizType == 2) {
    $type = "Tes";
}
?>
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
        <div class="card mt-2 p-0">
            <div class="mt-3 text-center">
                <div class="row p-3" id="start" style="display:flex">
                    <div class=" text-black fw-bold  p-2 small"> <i class="fas fa-star text-warning"></i> Hadiah hingga <?= $jmlsoal * 50 ?> Poin</div>
                    <p class="text-black fs-30px fw-bold"><?= $quiz->QuizTitle ?></p>
                    <p class="text-black fs-20px "><?= $jmlsoal ?> Soal</p>

                    <a href="#" class="btn mt-3" onclick="hideshow('start','Q1')">Mulai <?= $type ?></a>
                </div>
                <form action="<?= base_url('quiz/QuizResult/' . $quiz->QuizID . '/' . $CourseID) ?>" method="post" id="quizForm">
                    <?php $x = 1;
                    foreach ($question as $row) : ?>
                        <div class="row" id="Q<?= $x ?>" style="display:none">
                            <div class="col-md-6 text-black text-center my-auto ">

                                <p class=" fs-15px p-2 fw-bold prewrap text-start "><?= $x . ". " . $row->Question ?></p>
                                <?php if ($row->question_img != null) : ?>

                                    <img src="<?= base_url() ?>media/soal/<?= $row->question_img ?>" class="w-100 mt-2" alt="">


                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 mt-3">
                                <!-- optA -->
                                <label for="optA<?= $row->QuestionID ?>" class="d-block" onclick="hideshow('Q<?= $x ?>','Q<?= $x + 1 ?>')">
                                    <span class="btn btn-quiz  w-100"><?= $row->OptionA ?></span>
                                </label>
                                <input type="radio" class="d-none" name="pertanyaan<?= $row->QuestionID ?>" id="optA<?= $row->QuestionID ?>" value="A">
                                <!-- optB -->
                                <label for="optB<?= $row->QuestionID ?>" class="d-block" onclick="hideshow('Q<?= $x ?>','Q<?= $x + 1 ?>')">
                                    <span class="btn btn-quiz  w-100"><?= $row->OptionB ?></span>
                                </label>
                                <input type="radio" class="d-none" name="pertanyaan<?= $row->QuestionID ?>" id="optB<?= $row->QuestionID ?>" value="B">
                                <!-- OptC -->
                                <label for="optC<?= $row->QuestionID ?>" class="d-block" onclick="hideshow('Q<?= $x ?>','Q<?= $x + 1 ?>')">
                                    <span class="btn btn-quiz  w-100"><?= $row->OptionC ?></span>
                                </label>
                                <input type="radio" class="d-none" name="pertanyaan<?= $row->QuestionID ?>" id="optC<?= $row->QuestionID ?>" value="C">
                                <!-- OptD -->
                                <label for="optD<?= $row->QuestionID ?>" class="d-block" onclick="hideshow('Q<?= $x ?>','Q<?= $x + 1 ?>')">
                                    <span class="btn btn-quiz  w-100"><?= $row->OptionD ?></span>
                                </label>
                                <input type="radio" class="d-none" name="pertanyaan<?= $row->QuestionID ?>" id="optD<?= $row->QuestionID ?>" value="D">
                                <!-- OptE -->
                                <label for="optE<?= $row->QuestionID ?>" class="d-block" onclick="hideshow('Q<?= $x ?>','Q<?= $x + 1 ?>')">
                                    <span class="btn btn-quiz  w-100"><?= $row->OptionE ?></span>
                                </label>
                                <input type="radio" class="d-none" name="pertanyaan<?= $row->QuestionID ?>" id="optE<?= $row->QuestionID ?>" value="E">
                            </div>

                        </div>
                    <?php $x++;
                    endforeach; ?>
                    <div class="row p-4" id="end" style="display:none">

                        <p class="text-black fs-15px">Anda sudah mengerjakan <?= $type ?></p>
                        <input type="hidden" name="count" value="<?= $jmlsoal ?>">
                        <?php if ($type == "Quiz") : ?>
                            <input type="submit" class="btn mt-3 text-wrap" value="Simpan Jawaban dan Lihat Hasil">
                        <?php elseif ($type == "Tes") : ?>
                            <input type="submit" class="btn mt-3 text-wrap" value="Simpan Jawaban">
                        <?php endif; ?>

                    </div>
                    <!-- <input type="submit" value="Selesei" class="btn btn-block btn-primary" id="send" display:none> -->
                </form>

            </div>
        </div>
    </div>
</div>
<div class="mt-5" style="height: 50px;"></div>

</div>
</main>
<script>
    function hideshow(hid, sho) {
        var myEle = document.getElementById(sho);
        if (myEle) {
            document.getElementById(hid).style.display = "none";
            myEle.style.display = "flex"
        } else {
            document.getElementById(hid).style.display = "none";
            document.getElementById("end").style.display = "flex";
        }
    }
</script>