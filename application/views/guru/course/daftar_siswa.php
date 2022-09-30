<div class="row mx-0 mt-4">
    <p class="fw-bold text-black small"> <i class="fas fa-dot-circle text-blue me-1"></i>DAFTAR WARGA BELAJAR</p>
    <div class="card mt-3 ">
        <div class="card-body overflow-auto">
            <table class="table table-hover mt-3" id="daftar_siswa">
                <thead>
                    <th>No</th>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Skor</th>
                    <th>Level</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Opsi</th>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($siswa as $row) : ?>
                        <tr style="vertical-align: middle;">
                            <td><?= $i ?></td>
                            <td>
                                <img src="<?= base_url() ?>media/avatar/<?= $row->UserAvatar ?>" class="class-ava" alt="">
                            </td>
                            <td><?= $row->UserName ?></td>
                            <td><?= $row->courseXP ?></td>
                            <td><?= $row->Level ?></td>
                            <td><?= $row->UserEmail ?></td>
                            <td><?= $row->UserContactNo ?></td>
                            <td>

                                <a href="" data-bs-toggle="modal" data-bs-target="#kick<?= $i ?>">
                                    <i class="fas fa-user-slash fs-5 text-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Keluarkan dari kelas"></i>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="kick<?= $i ?>" tabindex="-1" aria-labelledby="kickLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content ">

                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-2 text-center my-auto">
                                                        <i class="fas fa-exclamation fs-1 text-warning"></i>
                                                    </div>
                                                    <div class="col-md-10 ">
                                                        <p class="text-black fw-bold"> Keluarkan <?= $row->UserName ?>?</p>

                                                        <div class="mt-3"> <a href="<?= base_url() ?>guru/kick/<?= $row->CourseID ?>/<?= $row->UserID ?>" type="button" class="btn btn-guru w-auto me-5">Keluarkan</a>
                                                            <button type="button" class="btn btn-guru w-auto bg-dark text-black3" data-bs-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</main>