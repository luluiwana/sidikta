<div class="container-fluid py-4">
    <div class="row mx-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/kelas" class="text-primary fw-bold">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/course/<?= $course->CourseID ?>" class="text-primary fw-bold"><?= $course->CourseName ?></a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/rekap/<?= $course->CourseID ?>" class="text-primary fw-bold">Rekap
                        Nilai</a></li>
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

    <div class="row mx-0 ">
        <?php if (!empty($siswa)) : ?>
            <div class="card mt-3 ">
                <div class="card-body overflow-auto">
                    <table class="table table-hover mt-3" id="daftar_siswa">
                        <thead>
                            <th>No</th>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Selesai membaca</th>
                            <th>Hadiah</th>
                        </thead>
                        <tbody>
                            <?php $x = 1;
                            foreach ($siswa as $row) : ?>
                                <tr style="vertical-align: middle;">
                                    <td><?= $x ?></td>

                                    <td><img src="<?= base_url() ?>media/avatar/<?= $row->UserAvatar ?>" class="class-ava" alt="">
                                    </td>
                                    <td><?= $row->UserName ?></td>
                                    <td><?= date("d M Y (H:i", strtotime($row->datetime));  ?> WIB)</td>
                                    <td> <i class="fas fa-star text-warning"></i> 200 Poin</td>
                                </tr>
                            <?php $x++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php else : ?>
            <div class="card mt-3 bg-darkblue card-body">
                Belum ada yang membaca
            </div>
        <?php endif; ?>
    </div>

</div>

</div>
</main>