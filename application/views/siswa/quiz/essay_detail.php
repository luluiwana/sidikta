<div class="container-fluid py-4">
    <div class="row">
        <div class="card">
            <div class="">
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
            <div class="mt-3 text-center">
                <div class="row " id="start" style="display:flex">
                    <div class=" text-black fw-bold  p-2 small"> <i class="fas fa-star text-warning"></i> Hadiah hingga 500 Poin</div>
                    <p class="text-black fs-30px fw-bold"><?= $quiz->QuizTitle ?></p>
                    <p class="text-black fs-20px"><?= $jmlsoal ?> Soal</p>

                    <a href="#" class="btn mt-3" onclick="hideshow('start','Q1')">Mulai Mengerjakan</a>
                </div>
                <form action="<?= base_url('quiz/EssayResult/' . $quiz->QuizID . '/' . $CourseID) ?>" method="post" id="quizForm">
                    <div class="row" id="end" style="display:none">
                        <?php $x = 1;
                        foreach ($question as $row) : ?>
                            <div class="mb-2">
                                <p class="fs-15px fw-bold text-black prewrap text-start"><?= $x ?>. <?= $row->Question ?></p>
                                <?php if ($row->question_img != null) : ?>
                                    <img src="<?= base_url() ?>media/essay/<?= $row->question_img ?>" class="w-100 mt-2" alt="">
                                <?php endif; ?>
                                <textarea name="essay<?= $row->EssayID ?>" class="form-control mt-2" placeholder="Tuliskan jawaban nomor <?= $x ?>" required></textarea>
                                <hr>


                            </div>
                        <?php $x++;
                        endforeach; ?>
                        <input type="submit" class="btn mt-3 text-wrap" value="Kumpulkan Jawaban">
                    </div>

                </form>

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