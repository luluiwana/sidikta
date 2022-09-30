<div class="container-fluid py-4">
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
                    Buat Soal
                </li>
            </ol>
        </nav>
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
        <p class="fw-bold text-black small mt-4 text-uppercase"> <i class="fas fa-dot-circle text-blue me-1"></i>Buat
            Soal</p>
        <div class="col-md-6 card card-body m-2 mt-3">
            <form id="add-Soal" method="post" action="<?= base_url('guru/create_quiz/' . $courseID . '/' . $id) ?>" enctype="multipart/form-data">
                <label for="judul">Judul Soal</label>
                <input type="text" name='judul' class="form-control " required>
                <div class="form-group">
                    <label for="quiz-type">Tipe Soal</label>

                    <select name="quiz-type" class="form-control" required>
                        <option value="">---Pilih---</option>
                        <option value="1">Quiz (Pilihan Ganda)</option>
                        <option value="2">Tes (Pilihan Ganda)</option>
                        <option value="3">Essay</option>
                        <option value="4">Tugas Upload</option>
                    </select>
                </div>

                <input type="submit" class="btn btn-guru" value="Buat Soal">
            </form>


        </div>
        <div class="col-md-4 card card-body m-2 mt-3">
            <p class="fw-bold text-black small text-uppercase"> </i>Keterangan</p>
            <ol class="small text-black mt-3">
                <li> <span class="fw-bold text-blue">Quiz</span>: Warga belajar dapat mengetahui nilai dan kunci jawaban setelah mengerjakan</li>
                <li><span class="fw-bold text-blue">Tes</span>: Warga belajar hanya dapat mengetahui nilai tanpa kunci jawaban</li>
                <li><span class="fw-bold text-blue">Essay</span>: Soal uraian</li>
                <li><span class="fw-bold text-blue">Tugas Upload</span>: Jenis soal yang mengharuskan siswa mengunggah file tertentu</li>
            </ol>

        </div>
    </div>


</div>