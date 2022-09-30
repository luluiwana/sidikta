<div class="row mt-4">
    <p class="fw-bold text-black small"> <i class="fas fa-dot-circle text-warning me-1"></i> CP</p>
    <div class="col-md-9 mt-3">
        <?php
        if (!empty($competencies)) {
            foreach ($competencies as $row) : ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <span class="fw-bold text-black fs-5"><?= $row['CompetenciesName'] ?></span>

                        <hr>

                        <ol class="mt-0 ps-3">
                            <?php if (!empty($lesson[$row['CompetenciesID']])) {
                                foreach ($lesson[$row['CompetenciesID']] as $row2) : ?>
                                    <a class="text-black" href="<?= base_url('guru/detail_lesson/'  . $row2['LessonID'] . '/' . $CourseID) ?>">
                                        <li class="text-black py-1 ">
                                            <div class="row">
                                                <div class="w-90">Materi: <?= $row2['LessonTitle'] ?></div>
                                                <div class="w-10"><i class="fas fa-angle-double-right"></i></div>
                                            </div>
                                        </li>
                                    </a>
                            <?php endforeach;
                            } ?>
                            <?php if (!empty($quiz[$row['CompetenciesID']])) {
                                foreach ($quiz[$row['CompetenciesID']] as $row3) : ?>
                                    <?php
                                    if ($row3['QuizType'] == 1) {
                                        $type = "Quiz";
                                        $redirect = "list_question";
                                    } elseif ($row3['QuizType'] == 2) {
                                        $type = "Tes";
                                        $redirect = "list_question";
                                    } elseif ($row3['QuizType'] == 3) {
                                        $type = "Essay";
                                        $redirect = "list_essay";
                                    } elseif ($row3['QuizType'] == 4) {
                                        $type = "Tugas Upload";
                                        $redirect = "list_submission";
                                    }
                                    ?>
                                    <a class="text-black" href="<?= base_url('guru/' . $redirect . '/' . $CourseID . '/' . $row3['QuizID']) ?>">
                                        <li class="text-black py-1 ">
                                            <div class="row">
                                                <div class="w-90">

                                                    <?= $type ?>: <?= $row3['QuizTitle'] ?></div>
                                                <div class="w-10"><i class="fas fa-angle-double-right"></i></div>
                                            </div>
                                        </li>
                                    </a>
                            <?php endforeach;
                            } ?>
                        </ol>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example" style="width: -webkit-fill-available">
                            <a href="<?= base_url('guru/Lesson/' . $CourseID . '/' . $row['CompetenciesID']) ?>" class="btn  btn-sm px-2 small btn-outline-dark">+Tambah Materi</a>

                            <!-- <a href="<?= base_url('guru/create_quiz/' . $CourseID . '/' . $row['CompetenciesID']) ?>" class="btn  btn-sm px-2 small ">+Tambah Quiz</a> -->
                            <a href="<?= base_url('guru/create_assignment/' . $CourseID . '/' . $row['CompetenciesID']) ?>" class="btn  btn-sm px-2 small btn-outline-dark ">+Tambah Soal</a>
                            <a data-bs-toggle="modal" data-bs-target="#editKD<?= $row['CompetenciesID'] ?>" type="button" class="btn  btn-sm px-2 small btn-outline-dark"> <i class="fas fa-edit"></i> Edit CP</a>


                        </div>
                        <div class="modal fade" id="editKD<?= $row['CompetenciesID'] ?>" tabindex="-1" aria-labelledby="editKD" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah KD</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id='formEdit' action="<?= base_url('guru/editKD/' . $course->CourseID . '/' . $row['CompetenciesID']) ?>" method="post">
                                            <div class="form-group">
                                                <h6 class="text-black">CP</h6>
                                                <input type="text" name="nama-kd" placeholder="" value="<?= $row['CompetenciesName'] ?>" class="form-control text-black">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-guru w-auto" value="Edit Nama CP">
                                                <a class="btn btn-guru w-auto float-end " href="<?= base_url('guru/deleteKD/' . $course->CourseID . '/' . $row['CompetenciesID']) ?>">Hapus
                                                    CP</a>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach;
        } else { ?>
            <div class="card  mb-4">
                <div class="card-body p-0">
                    <div class="accordion text-dark " id="accordionFlushExample">
                        <div class="accordion-item text-dark">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Anda belum menambahkan CP
                                </button>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="col-md-3">
        <div class="card mb-4">
            <div class="card-body text-center">
                <h6 class="text-black text-center">Jumlah CP</h6>
                <h2 class="text-center text-black">
                    <?php
                    if (empty($countKD->value))
                        echo '0';
                    else
                        echo $countKD->value;
                    ?>
                </h2>
                <button data-bs-toggle="modal" data-bs-target="#addKD" class="btn btn-guru w-auto text-center " type="button">+Tambah
                    CP</button>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="addKD" tabindex="-1" aria-labelledby="addKD" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat KD</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('guru/addKD/' . $course->CourseID) ?>" method="post">
                    <div class="form-group">
                        <h6 class="text-black">Masukkan Nama CP</h6>
                        <input type="text" name="nama-kd" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-guru w-auto" value="Tambah CP">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>