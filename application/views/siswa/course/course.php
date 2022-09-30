<div class="row mt-2">
    <div class="card w-50 me-2 bg-blue pb-3">
        <div class="card-body p-0">
            <div class="text-center text-black fw-bold mt-3">
                <input type="hidden" id="completed_mission" value="<?= $completed_mission ?>">
                <input type="hidden" id="ongoing_mission" value="<?= $total_mission - $completed_mission ?>">
                <input type="hidden" id="total_mission" value="<?= $total_mission ?>">
                <canvas id="myChart" class="mt-3"></canvas>
            </div>
        </div>
    </div>
    <div class="card w-45">
        <div class="row my-auto">

            <div class="w-100 fs-15px text-black text-center">
                <span class="d-block">Skor Kelas</span>
                <span class="fs-20px"><?= $score ?></span>
            </div>
            <input type="hidden" value="<?= $score ?>" id="total_skor_course">
        </div>
    </div>
</div>
<div class="row">
    <?php foreach ($kd as $row) : ?>
        <div class="card bg-blue mt-2">
            <div class="card-body p-0 ">
                <div class="accordion text-dark " id="accordionFlushExample">
                    <div class="accordion-item text-dark">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#KD<?= $row->CompetenciesID ?>" aria-expanded="false" aria-controls="KD<?= $row->CompetenciesID ?>">
                                <img src="<?= base_url() ?>assets/icon/goal.png" class="" style="width:30px;margin-left: -0.5rem;" alt="">
                                <?= $row->CompetenciesName ?>
                            </button>
                        </h2>
                        <div id="KD<?= $row->CompetenciesID ?>" class="accordion-collapse collapse bg-white text-black" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">

                            <div class="accordion-body">

                                <?php $lessons = $this->M_Lesson->getLessons($row->CompetenciesID) ?>
                                <?php foreach ($lessons as $lesson) : ?>
                                    <a href="<?= base_url() ?>lesson/study/<?= $course->CourseID ?>/<?= $lesson->LessonID ?>">
                                        <?php if ($this->M_Lesson->isLessonComplete($lesson->LessonID) == true) : ?>
                                            <div class="mt-2 text-black">
                                                <img src="<?= base_url() ?>assets/icon/book.png" class="" style="width:30px;margin-left: -0.5rem;" alt="">
                                                <span class=""><?= $lesson->LessonTitle ?></span>
                                            </div>
                                        <?php else : ?>
                                            <div class="mt-2 text-secondary">
                                                <img src="<?= base_url() ?>assets/icon/book.png" class="" style="width:30px;margin-left: -0.5rem;" alt="">
                                                <span class=""><?= $lesson->LessonTitle ?></span>

                                            </div>
                                        <?php endif ?>
                                    </a>
                                    <hr>
                                <?php endforeach; ?>
                                <?php $quiz = $this->M_Lesson->getQuiz($row->CompetenciesID) ?>
                                <?php foreach ($quiz as $q) : ?>
                                    <?php $uquiz = $this->M_Lesson->isQuizComplete($q->QuizID); ?>
                                    <?php
                                    if ($q->QuizType == 1 || $q->QuizType == 2) {
                                        $link = 'quiz_detail';
                                    } elseif ($q->QuizType == 3) {
                                        $link = 'essay_detail';
                                    } elseif ($q->QuizType == 4) {
                                        $link = 'submission_detail';
                                    }
                                    ?>
                                    <?php if ($uquiz == false) : ?>
                                        <a href="<?= base_url() ?>quiz/<?= $link ?>/<?= $q->QuizID ?>/<?= $course->CourseID ?>">
                                            <div class="mt-2 text-secondary">
                                                <img src="<?= base_url() ?>assets/icon/quiz.png" class="" style="width:30px;margin-left: -0.5rem;" alt="">
                                                <?= $q->QuizTitle ?>
                                            </div>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?= base_url() ?>quiz/result/<?= $q->QuizID ?>/<?= $course->CourseID ?>">
                                            <div class="mt-2 text-black">
                                                <img src="<?= base_url() ?>assets/icon/quiz.png" class="" style="width:30px;margin-left: -0.5rem;" alt="">
                                                <?= $q->QuizTitle ?>
                                            </div>
                                        </a>
                                    <?php endif; ?>

                                    <hr>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>



</div>
<div class="mt-5" style="height: 50px;"></div>
</div>
</main>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<script src="<?= base_url() ?>assets/js/animechart.js"></script>