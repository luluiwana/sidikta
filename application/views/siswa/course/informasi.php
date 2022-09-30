<div class="row mt-2">
    <div class="card ">
        <div class="card-body row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <img src="<?= base_url() ?>media/logo/<?= $course->CourseLogo ?>" alt="" width="100px">
                    </div>
                    <div class="col-md-8 mt-3">
                        <table class="table">
                            <tr>
                                <td>Mata Pelajaran</td>
                                <td> <?= $course->CourseName ?></td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td> <?= $course->ClassName ?></td>
                            </tr>
                            <tr>
                                <td>Sekolah</td>
                                <td><?= $course->SchoolName ?></td>
                            </tr>
                            <tr>
                                <td>Fasilitator</td>
                                <td class="text-wrap"><?= $course->UserName ?></td>
                            </tr>
                        </table>
                        <a href="" class="btn " data-bs-toggle="modal" data-bs-target="#quit">Keluar dari kelas</a>
                        <!-- Modal Keluar-->
                        <div class="modal fade" id="quit" tabindex="-1" aria-labelledby="quitLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content ">
                                    <div class="modal-body">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <p class="text-danger fw-bold mb-4">Kamu yakin ingin keluar dari kelas?</p>


                                                <a href="<?= base_url() ?>siswa/quit/<?= $course->CourseID ?>" type="button" class="btn btn-danger btn-sm w-50">Ya</a>
                                                <button type="button" class="btn btn-white btn-sm position-absolute end-3 w-30" data-bs-dismiss="modal">Tidak</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6  d-none d-sm-block">
                <img src="<?= base_url() ?>assets/img/vector/Learning-bro (1).svg" class="vector" alt="" srcset="">
            </div>
        </div>
    </div>
</div>
<div class="mt-5" style="height: 50px;"></div>
</div>
</main>