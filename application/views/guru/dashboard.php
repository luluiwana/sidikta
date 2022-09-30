<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-6 p-0">
            <div class="card">
                <div class="p-3">
                    <p class="text-black fw-bold mb-0"><?= $this->session->userdata('nama'); ?>
                    </p>
                    <p class="text-blue fw-bolder fs-4">FASILITATOR</p>
                    <hr>
                    <div class="row text-black small">
                        <div class="col-md-3 w-50">
                            Kelas <p class="fw-bold fs-4"> <?= $countCourse ?></p>
                        </div>
                        <div class="col-md-3 w-50">
                            Warga Belajar <p class="fw-bold fs-4"> <?= $countSiswa ?></p>
                        </div>
                        <div class="col-md-3 w-50">
                            Materi <p class="fw-bold fs-4"><?= $countTeacherLesson ?></p>
                        </div>
                        <div class="col-md-3 w-50">
                            Soal <p class="fw-bold fs-4"><?= $countTeacherQuiz ?></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card p-4 mt-2">
                <p class="text-dark fs-15px text-center">Fasilitator dapat mengakses SIDIKTA melalui komputer atau laptop dengan membuka link</p>
                <a href="https://sidikta.com/" class="text-blue fs-30px mt-4 text-center">https://sidikta.com/</a>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <img src="<?= base_url() ?>assets/img/vector/Thesis-rafiki.svg" alt="" class="w-100">
        </div>

    </div>


</div>
</main>