<div class="container-fluid py-4">
    <div class="row ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/kelas" class="text-primary fw-bold">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/course/<?= $CourseID ?>" class="text-primary fw-bold"><?= $CourseName ?></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $lesson['LessonTitle'] ?>
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
                                                                                    } ?>>Warga belajar </option>
            <option value="<?= base_url() ?>guru/pengaturan/<?= $course->CourseID ?>" <?php if ($course_menu == "Pengaturan") {
                                                                                            echo "selected";
                                                                                        } ?>>Pengaturan</option>
        </select>

    </div>

    <div class="row">
        <div class="col-md-3 mt-2">
            <?php if (!empty($lesson['File'])) { ?>
                <div class="card mb-2">
                    <div class="card-body ">
                        <p class="text-black fw-bold fs-20px">Berkas Lampiran</p>
                        <p class="text-black mt-3"><i class="fas fa-file me-2"></i> <?= $lesson['File'] ?> </p>

                        <a href="<?= base_url() ?>guru/download_lesson/<?= $lesson['LessonID'] ?>" class="btn btn-guru"><i class="fas fa-download me-2"></i> Unduh</a>
                    </div>
                </div>
            <?php } ?>
            <div class="card card-body mb-2 ">
                <h1 class="text-black fs-20px fw-bold">Opsi</h1>
                <div class="btn-group">
                    <a class="btn  btn-guru w-50 " href="<?= base_url('guru/editLesson/' . $CourseID . '/' . $lesson['LessonID']) ?>">
                        <i class="fas fa-edit"></i> Edit Materi
                    </a>
                    <a class="btn btn-guru w-50 bg-dark text-black3 " href="<?= base_url('guru/deleteLesson/' . $CourseID . '/' . $lesson['LessonID']) ?>">
                        <i class="fas fa-trash"></i> Hapus Materi
                    </a>
                </div>
            </div>
            <div class="card card-body mb-2">
                <h1 class="text-black"><?= $countUserLesson ?></h1>
                <p class="text-black small">Warga Belajar sudah membaca materi</p>
                <a href="<?= base_url() ?>guru/result/<?= $lesson['LessonID'] ?>/<?= $CourseID ?>" class="btn btn-guru mt-2"><i class="fas fa-eye me-2"></i> Lihat </a>
            </div>


        </div>
        <div class="col-md-9 mt-2">

            <div class="card">
                <div class="card-body">

                    <p class="text-black fw-bold fs-30px mb-4"><?= $lesson['LessonTitle'] ?>
                    </p>

                    <div class="text-black"><?= $lesson['LessonContent'] ?></div>

                </div>
            </div>
        </div>


    </div>



</div>