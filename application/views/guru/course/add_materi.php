<div class="container-fluid px-2">
    <div class="row ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/kelas" class="text-primary fw-bold">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/course/<?= $id ?>" class="text-primary fw-bold"><?= $CourseName ?></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Buat Materi
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

    <div class="card mt-2">
        <div class="card-body">
            <form action="<?= base_url('guru/addLessonCourse/' . $id . '/' . $CompetenciesID) ?>" method="post" enctype="multipart/form-data">

                <div class="form-group ">
                    <label class=" text-black">Judul Materi</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control " name="title" placeholder="Judul Materi" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class=" text-black">Tambah Lampiran (opsional)</label>
                    <div class="col-md-4">
                        <input type="file" name="file" class='form-control '>
                    </div>
                </div>

                <div class="form-group row">
                    <label class=" text-black">Isi Materi</label>
                    <textarea name="content" id="add_materi" class="text-black form-control" cols="30" rows="30" required></textarea>
                </div>

                <div class="form-group row">
                    <input type="submit" class="btn btn-guru" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>