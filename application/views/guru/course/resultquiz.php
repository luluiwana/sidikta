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
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $quiz->QuizTitle ?>
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
                            <th>Nilai</th>
                            <th>Selesai</th>
                            <th>Hadiah</th>
                            <?php if ($type == "Essay" || $type == "Tugas") : ?>
                                <th>Status</th>
                            <?php endif; ?>
                            <th>Opsi</th>
                        </thead>
                        <tbody>
                            <?php $x = 1;
                            foreach ($siswa as $row) : ?>
                                <tr>
                                    <td><?= $x ?></td>

                                    <td><img src="<?= base_url() ?>media/avatar/<?= $row->UserAvatar ?>" class="class-ava" alt="">
                                    </td>
                                    <td><?= $row->UserName ?></td>
                                    <td><?= $row->result ?></td>
                                    <td><?= date("d M Y (H:i", strtotime($row->time_taken));  ?> WIB)</td>
                                    <td> <i class="fas fa-star text-warning"></i> <?= $row->addXP ?> Poin</td>
                                    <?php if ($type == "Essay" || $type == "Tugas") : ?>
                                        <td>
                                            <?php if ($row->result == 0 && $row->addXP == 0) : ?>
                                                <span class="text-danger fw-bold small">Belum dinilai</span>
                                            <?php else : ?>
                                                <span class="text-info fw-bold small">Sudah dinilai</span>

                                            <?php endif; ?>
                                        </td>
                                    <?php endif; ?>
                                    <td><a href="<?= base_url() ?>guru/answer/<?= $quiz->QuizID ?>/<?= $course->CourseID ?>/<?= $row->UserID ?>" class="btn btn-warning btn-sm">Lihat jawaban</a>
                                </tr>
                                </tr>
                            <?php $x++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php else : ?>
            <div class="card mt-3 card-body">
                Belum ada yang mengerjakan
            </div>
        <?php endif; ?>
    </div>

</div>

</div>
</main>