<div class="container-fluid py-4">
    <div class="row">
        <div class="card">
            <div class=" pb-2">
                <div class="row bg-blue p-3  round-up">
                    <img src="<?= base_url() ?>media/avatar/<?= $this->session->userdata('ava') ?>" id="ava-header" class="my-auto">
                    <span class="text-white fw-bold fs-20px w-80 my-auto" style="line-height: 20px;"><?= $user->UserName ?>
                    </span>
                </div>
                <div class="row p-3">
                    <!-- start badges -->
                    <span class="w-50"> <img src="<?= base_url() ?>assets/character/<?= $user->LevelID ?>.png" class="level-badge" alt=""></span>

                    <span class="text-black fw-700 fs-20px w-50 my-auto text-end"> <img src="<?= base_url() ?>assets/icon/star.png" class="w-auto" style="height:30px;margin-bottom:8px" alt="">
                        <?php if ($total_xp == "") {
                            echo "0";
                        } else {
                            echo $total_xp;
                        } ?>
                    </span>
                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <select class="form-select form-select-lg mt-2" id="select_menu" aria-label=".form-select-lg example" onchange="javascript:location.href = this.value;">
            <option value="<?= base_url() ?>lesson/course/<?= $course->CourseID ?>" <?php if ($course_menu == "Kelas") {
                                                                                        echo "selected";
                                                                                    } ?>>
                Tantangan</option>
            <option value="<?= base_url() ?>siswa/leaderboard/<?= $course->CourseID ?>" <?php if ($course_menu == "Leaderboard") {
                                                                                            echo "selected";
                                                                                        } ?>>Peringkat</option>
            <option value="<?= base_url() ?>siswa/aktivitas/<?= $course->CourseID ?>" <?php if ($course_menu == "Aktivitas") {
                                                                                            echo "selected";
                                                                                        } ?>>Aktivitas</option>
            <option value="<?= base_url() ?>siswa/teman/<?= $course->CourseID ?>" <?php if ($course_menu == "Teman") {
                                                                                        echo "selected";
                                                                                    } ?>>Warga Belajar</option>
            <option value="<?= base_url() ?>siswa/informasi/<?= $course->CourseID ?>" <?php if ($course_menu == "Informasi") {
                                                                                            echo "selected";
                                                                                        } ?>>Informasi</option>
        </select>

    </div>