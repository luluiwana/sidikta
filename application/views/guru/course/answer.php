<?php if ($quiz->QuizType == 1) {
    $type = "Quiz";
} elseif ($quiz->QuizType == 2) {
    $type = "Tes";
} elseif ($quiz->QuizType == 3) {
    $type = "Essay";
} elseif ($quiz->QuizType == 4) {
    $type = "Tugas";
}

?>
<div class="container-fluid py-4">
    <div class="row mx-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/kelas" class="text-primary fw-bold">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/course/<?= $course->CourseID ?>" class="text-primary fw-bold"><?= $course->CourseName ?></a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/rekap/<?= $course->CourseID ?>" class="text-primary fw-bold">Rekap
                        Nilai</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/resultquiz/<?= $course->CourseID ?>/<?= $hasil->QuizID ?>" class="text-primary fw-bold"><?= $quiz->QuizTitle ?></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $hasil->UserName ?>
                </li>
            </ol>
        </nav>
    </div>
    <div class="row mx-0">
        <select class="form-select form-select-lg mt-2" id="select_menu" aria-label=".form-select-lg example" onchange="javascript:location.href = this.value;">
            <option value="<?= base_url() ?>guru/course/<?= $course->CourseID ?>" <?php if ($course_menu == "Kelas") {
                                                                                        echo "selected";
                                                                                    } ?>>
                Kelas</option>
            <option value="<?= base_url() ?>guru/aktivitas/<?= $course->CourseID ?>" <?php if ($course_menu == "Aktivitas") {
                                                                                            echo "selected";
                                                                                        } ?>>Aktivitas</option>
            <option value="<?= base_url() ?>guru/rekap/<?= $course->CourseID ?>" <?php if ($course_menu == "Rekap Nilai") {
                                                                                        echo "selected";
                                                                                    } ?>>Rekap Nilai</option>
            <option value="<?= base_url() ?>guru/siswa/<?= $course->CourseID ?>" <?php if ($course_menu == "Daftar Siswa") {
                                                                                        echo "selected";
                                                                                    } ?>>Warga Belajar</option>
            <option value="<?= base_url() ?>guru/pengaturan/<?= $course->CourseID ?>" <?php if ($course_menu == "Pengaturan") {
                                                                                            echo "selected";
                                                                                        } ?>>Pengaturan</option>
        </select>

    </div>

    <div class="row mx-0">

        <div class="card card-body mt-2">
            <table class="d-block text-black">
                <tr>
                    <td>Judul Soal</td>
                    <td>:</td>
                    <td><?= $quiz->QuizTitle ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $hasil->UserName ?></td>
                </tr>
                <tr>
                    <td>Selesai</td>
                    <td>:</td>
                    <td><?= date("d M Y (H:i", strtotime($hasil->time_taken));  ?> WIB)</td>
                </tr>
                <tr>
                    <td class="pe-5">Reward</td>
                    <td class="pe-2">:</td>
                    <td><?= $hasil->addXP ?> Poin</td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td>:</td>
                    <td>
                        <?= $hasil->result ?></td>
                </tr>
                <?php if ($type == "Essay" || $type == "Tugas") : ?>
                    <tr>
                        <td>Komentar</td>
                        <td>:</td>
                        <td>
                            <?= $hasil->comment ?></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="btn  btn-guru w-auto mt-3" data-bs-toggle="modal" data-bs-target="#edit_nilai">Ubah Nilai</a>
                            <div class="modal" id="edit_nilai" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <hr>
                                            <form action="<?= base_url('guru/edit_nilai/' . $course->CourseID . '/' . $hasil->QuizID . '/' . $hasil->UserID) ?>" method="post">

                                                <div class="col-12">
                                                    <label class="">Nilai </label>
                                                    <input type="number" name="nilai" min="0" max="100" value="<?= $hasil->result ?>" required class="form-control">
                                                    <label class="">Komentar </label>
                                                    <textarea name="comment" class="form-control  text-black" rows="5" required><?= $hasil->comment ?></textarea>
                                                    <input type="submit" name="processed" value="Simpan" class="form-control btn btn-guru" id="inputCity">
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>

            </table>
        </div>
        <p class="fw-bold text-black fs-20px mt-2"> <i class="fas fa-dot-circle text-primary me-1"></i>
            Jawaban</p>
        <?php if ($type == "Quiz" || $type == "Tes") : ?>
            <div class="card  card-body mt-3">
                <?php $x = 1;
                foreach ($feedback as $row) : ?>
                    <?php $t = $row->TrueOption;
                    $a = $row->answer; ?>
                    <p class="text-black mb-1 fs-6 fs-15px preline "><?= $x ?>. <?= $row->Question ?>
                    </p>
                    <?php if ($row->question_img != null) : ?>
                        <img src="<?= base_url() ?>media/soal/<?= $row->question_img ?>" class="rounded ms-3" alt="" style="max-width:100%">
                    <?php endif; ?>
                    <div class="mb-4 ms-3">
                        <p class=" <?php if ($t == $a && $a == 'A') {
                                        echo 'text-success fw-bold ';
                                    } elseif ($t !== $a && $a == 'A') {
                                        echo 'text-black';
                                    } elseif ($t == 'A') {
                                        echo 'text-success fw-bold ';
                                    } else {
                                        echo ' text-black';
                                    } ?>">
                            A. <?= $row->OptionA ?>
                            <?php if ($t == 'A') : ?>
                                <i class="fas fa-check text-success fw-bold"></i>
                            <?php endif; ?>
                            <?php if ($t !== $a && $a == 'A') : ?>
                                <i class="fas fa-times text-danger"></i>
                            <?php endif; ?>
                        </p>
                        <p class=" <?php if ($t == $a && $a == 'B') {
                                        echo 'text-success fw-bold ';
                                    } elseif ($t !== $a && $a == 'B') {
                                        echo 'text-black';
                                    } elseif ($t == 'B') {
                                        echo 'text-success fw-bold ';
                                    } else {
                                        echo ' text-black';
                                    } ?>">
                            B. <?= $row->OptionB ?>
                            <?php if ($t == 'B') : ?>
                                <i class="fas fa-check text-success fw-bold"></i>
                            <?php endif; ?>
                            <?php if ($t !== $a && $a == 'B') : ?>
                                <i class="fas fa-times text-danger"></i>
                            <?php endif; ?>
                        </p>
                        <p class=" <?php if ($t == $a && $a == 'C') {
                                        echo 'text-success fw-bold ';
                                    } elseif ($t !== $a && $a == 'C') {
                                        echo 'text-black';
                                    } elseif ($t == 'C') {
                                        echo 'text-success fw-bold ';
                                    } else {
                                        echo ' text-black';
                                    } ?>">
                            C. <?= $row->OptionC ?>
                            <?php if ($t == 'C') : ?>
                                <i class="fas fa-check text-success fw-bold"></i>
                            <?php endif; ?>
                            <?php if ($t !== $a && $a == 'C') : ?>
                                <i class="fas fa-times text-danger"></i>
                            <?php endif; ?>
                        </p>
                        <p class=" <?php if ($t == $a && $a == 'D') {
                                        echo 'text-success fw-bold ';
                                    } elseif ($t !== $a && $a == 'D') {
                                        echo 'text-black';
                                    } elseif ($t == 'D') {
                                        echo 'text-success fw-bold ';
                                    } else {
                                        echo ' text-black';
                                    } ?>">
                            D. <?= $row->OptionD ?>
                            <?php if ($t == 'D') : ?>
                                <i class="fas fa-check text-success fw-bold"></i>
                            <?php endif; ?>
                            <?php if ($t !== $a && $a == 'D') : ?>
                                <i class="fas fa-times text-danger"></i>
                            <?php endif; ?>
                        </p>
                        <p class=" <?php if ($t == $a && $a == 'E') {
                                        echo 'text-success fw-bold ';
                                    } elseif ($t !== $a && $a == 'E') {
                                        echo 'text-black';
                                    } elseif ($t == 'E') {
                                        echo 'text-success fw-bold ';
                                    } else {
                                        echo ' text-black';
                                    } ?>">
                            E. <?= $row->OptionE ?>
                            <?php if ($t == 'E') : ?>
                                <i class="fas fa-check text-success fw-bold"></i>
                            <?php endif; ?>
                            <?php if ($t !== $a && $a == 'E') : ?>
                                <i class="fas fa-times text-danger"></i>
                            <?php endif; ?>
                        </p>
                    </div>


                <?php $x++;
                endforeach; ?>

            </div>
        <?php elseif ($type == "Essay") : ?>
            <div class="col-md-12 mt-2">

                <?php $x = 1;
                foreach ($feedback_essay as $row) : ?>
                    <div class="card card-body  mb-3">
                        <p class="text-black fw-bold small text-uppercase">pertanyaan no <?= $x ?></p>
                        <p class="text-black fs-15px preline"> <?= $row->Question ?></p>
                        <?php if ($row->question_img != null) : ?>
                            <img src="<?= base_url() ?>media/essay/<?= $row->question_img ?>" style="max-width:100%" class="rounded " alt="">
                        <?php endif; ?>
                        <p class="p-3 bg-dark text-black3 fs-15px preline"> <?= $row->Answer ?></p>
                    </div>
                <?php $x++;
                endforeach; ?>
            </div>
        <?php elseif ($type == "Tugas") : ?>
            <div class="col-md-12 mt-2">
                <?php foreach ($feedback_essay as $row) : ?>

                    <a href="<?= base_url() ?>guru/download_submission/<?= $row->EssayID ?>/<?= $row->UserID ?>" class="btn  btn-guru w-auto"><i class="fas fa-download me-2"></i> Unduh jawaban <?= $hasil->UserName ?></a>
                    <div class="card card-body mb-3">
                        <p class="text-black fw-bold small text-uppercase">pertanyaan</p>
                        <p class="text-black fs-15px preline"><?= $row->Question ?></p>
                        <?php if ($row->question_img != null) : ?>
                            <img src="<?= base_url() ?>media/tugas/<?= $row->question_img ?>" style="max-width:100%" class="rounded " alt="">
                        <?php endif; ?>

                    </div>
                <?php
                endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

</div>
</main>