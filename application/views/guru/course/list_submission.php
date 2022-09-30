<?php
$type = "Tugas"
?>
<div class="container py-4">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/kelas" class="text-primary fw-bold">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?= base_url() ?>guru/course/<?= $course->CourseID ?>" class="text-primary fw-bold">
                        <?= $course->CourseName ?> - <?= $course->ClassName ?>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $type . ' - ' . $quiz->QuizTitle ?>
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
                                                                                    } ?>>Warga belajar</option>
            <option value="<?= base_url() ?>guru/pengaturan/<?= $course->CourseID ?>" <?php if ($course_menu == "Pengaturan") {
                                                                                            echo "selected";
                                                                                        } ?>>Pengaturan</option>
        </select>

    </div>

    <a href="" class="btn btn-guru w-auto" data-bs-toggle="modal" data-bs-target="#editQuiz">Edit Judul <?= $type ?></a>
    <div class="modal" id="editQuiz" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <label for="">Judul <?= $type ?></label>
                    <form action="<?= base_url() ?>guru/editquiz/<?= $quiz->QuizID ?>/<?= $course->CourseID ?>" method="post">
                        <input required type="text" value="<?= $quiz->QuizTitle ?>" name="QuizTitle" class="form-control mb-3">
                        <input type="hidden" value="<?= $quiz->QuizType ?>" name="QuizType" class="form-control mb-3">
                        <input type="submit" class="btn btn-guru w-auto" value="Simpan">
                        <a href="<?= base_url() ?>guru/deleteQuiz/<?= $quiz->QuizID ?>/<?= $course->CourseID ?>" class="btn btn-guru bg-dark text-black3 w-auto float-end">Hapus <?= $type ?></a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 mt-3">

            <?php
            if (!empty($question)) {
                $i = 1;
                foreach ($question as $row) : ?>

                    <div class="card mb-2">

                        <div class="accordion-body">
                            <p class="text-black preline fs-15px">
                                <?= $row['Question'] ?>
                            </p>
                            <?php if ($row['question_img'] != NULL) : ?>
                                <a href="<?= base_url() ?>media/tugas/<?= $row['question_img'] ?>" target="_blank">
                                    <img src="<?= base_url() ?>media/tugas/<?= $row['question_img'] ?>" style="max-width:100%" class="rounded" alt="">
                                </a>
                            <?php endif; ?>

                            <div class="btn-group btn-group-sm mt-3 w-50" role="group" aria-label="Basic outlined example">
                                <a href="<?= base_url('guru/edit_question/' . $courseID . '/' . $row['EssayID']) ?>" class="btn " data-bs-toggle="modal" data-bs-target="#edit<?= $row['EssayID'] ?>"> <i class="fas fa-edit"></i>
                                    Edit</a>
                                <a href="<?= base_url('guru/hapus_tugas/' . $courseID . '/'  . $id . '/' . $row['EssayID']) ?>" class="btn  rounded-end bg-dark text-black3"><i class="fas fa-trash"></i>
                                    Hapus</a>
                                <div class="modal" id="edit<?= $row['EssayID'] ?>" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <span class="text-black fw-bolder">Edit Tugas</span>
                                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <hr>
                                                <form action="<?= base_url('guru/edit_submission/' . $courseID . '/' . $row['EssayID']) ?>" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="quizid" value="<?= $row['QuizID'] ?>">
                                                    <div class="col-12">
                                                        <label class="">Deskripsi Tugas </label>
                                                        <textarea name="soal" class="form-control  text-black" rows="5" required><?= $row['Question'] ?></textarea>
                                                    </div>

                                                    <div class="row mt-3">

                                                        <div class="col-md-5">
                                                            <label for="inputCity" class="">Gambar
                                                                (Opsional)</label>
                                                            <input type="file" name="file" class="form-control" id="inputCity">
                                                        </div>
                                                        <div class="col-md-3 mt-2">
                                                            <label for="inputCity" class=""></label>
                                                            <input type="submit" name="processed" value="Simpan" class="form-control btn btn-guru" id="inputCity">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                <?php
                    $i++;
                endforeach;
            } else {
                ?>
                <div class="card ">
                    <div class="card-body ">
                        Anda belum membuat tugas
                        <hr>
                        <a data-bs-toggle="modal" data-bs-target="#addMateri" class="btn btn-guru w-auto" href="<?= base_url('guru/create_question/' . $courseID . '/' . $id) ?>"><i class="fas fa-plus"></i> Buat Tugas</a>
                    </div>
                </div>
            <?php
            } ?>
        </div>
        <?php if (!empty($question)) : ?>
            <div class="col-md-3 mt-3 ">
                <div class="card card-body ">
                    <h1 class="text-black"><?= $countUserQuiz ?></h1>
                    <p class="text-black small">Warga belajar telah mengumpulkan <span class="text-lowercase"><?= $type ?></span></p>
                    <a href="<?= base_url() ?>guru/resultquiz/<?= $course->CourseID ?>/<?= $quiz->QuizID ?>" class="btn btn-guru mt-3"><i class="fas fa-file-alt me-2"></i> Lihat Hasil</a>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addMateri" tabindex="-1" aria-labelledby="addMateriLabel" aria-hidden="true" style="">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <hr>
                    <form action="<?= base_url('guru/create_submission/' . $courseID . '/' . $id) ?>" method="POST" enctype="multipart/form-data">
                        <div class="col-12">
                            <label class="">Deskripsi Tugas </label>
                            <textarea name="soal" class="form-control  text-black" rows="5" required></textarea>
                        </div>

                        <div class="row mt-3">

                            <div class="col-md-5">
                                <label for="inputCity" class="">Gambar (Opsional)</label>
                                <input type="file" name="file" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-3">
                                <label for="inputCity" class=""></label>
                                <input type="submit" name="processed" value="Buat Tugas" class="form-control btn btn-guru mt-2" id="inputCity">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>