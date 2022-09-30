<div class="container-fluid px-4">
    <div class="row ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/kelas" class="text-primary fw-bold">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/course/<?= $id ?>" class="text-primary fw-bold"><?= $CourseName ?></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Edit Materi: <?= $lesson['LessonTitle'] ?>
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
                                                                                    } ?>>Warga belajar</option>
            <option value="<?= base_url() ?>guru/pengaturan/<?= $course->CourseID ?>" <?php if ($course_menu == "Pengaturan") {
                                                                                            echo "selected";
                                                                                        } ?>>Pengaturan</option>
        </select>
        <div class="card card-body mt-3">

            <form action="<?= base_url('guru/editLessonCourse/' . $id . '/' . $lesson['LessonID']) ?>" method="post" enctype="multipart/form-data">

                <div class="form-group ">
                    <label class="">Judul Materi</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control text-black" name="title" value='<?= $lesson['LessonTitle'] ?>' placeholder="Judul Artikel" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="">File </label>
                    <div class="col-md-8">
                        <input type="file" name="file" class='form-control  text-black'>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="">Isi Materi </label>
                    <textarea name="content" id="add_materi" class="text-lights form-control" cols="30" rows="30" required>
        <?= $lesson['LessonContent'] ?>
        </textarea>
                </div>

                <div class="form-group row">
                    <input type="submit" class="btn btn-guru" value="Simpan">
                </div>
            </form>
        </div>
    </div>




</div>