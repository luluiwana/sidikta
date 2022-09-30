<div class="container-fluid py-4">

    <div class="row mt-2">
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
        <div class="mt-2 card p-3">
            <div class="row mb-3">
                <div class="w-100  row">
                    <div class="ava-space pe-0 w-auto my-auto">
                        <img src="<?= base_url() ?>media/avatar/<?= $thread->UserAvatar ?>" alt="image" class="class-ava" style="">
                    </div>
                    <div class="w-80 name-space ">
                        <div class="fw-bolder text-black"><?= $thread->UserName ?>
                        </div>
                        <div class="text-secondary small">
                            <span class="me-3"><?= date("d M Y, H:i", strtotime($thread->time_thread)); ?></span>

                        </div>

                    </div>
                </div>
                <div class="w-100 text-end">
                    <?php if ($thread->UserID == $this->session->userdata('id_user')) : ?>
                        <a class="me-2" href="<?= base_url() ?>discussion/editdiskusi/<?= $thread->ForumQID ?>/<?= $CourseID ?>">Edit</a>
                        <a class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteThread">Hapus</a>
                        <div class="dropdown">

                            <!-- Modal Keluar-->
                            <div class="modal fade" id="deleteThread" tabindex="-1" aria-labelledby="quitLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <p class="text-black fw-bold mb-4">Yakin ingin menghapus?
                                            </p>
                                            <div class="row px-3">
                                                <a href="<?= base_url() ?>discussion/delete/<?= $thread->ForumQID ?>/<?= $thread->CourseID ?>" class="btn w-30 btn-sm m-auto">Hapus</a>
                                                <button type="button" class="btn bg-white btn-sm w-30 text-black float-end m-auto" data-bs-dismiss="modal">Batal</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="text-black"><?= $thread->ForumQContent ?></div>

        </div>
        <p class="fw-bold text-black fs-15px mt-3 p-0   "> <?= $countComments ?> Komentar
        </p>
        <div class="p-0 mt-2 card">
            <form action="<?= base_url('discussion/addComments/' . $thread->ForumQID) ?>" method="post">
                <div class="form-group row">
                    <textarea name="content" id="add_answer" class=" form-control" required></textarea>
                </div>
                <div class="text-end">
                    <input type="hidden" name="CourseID" value="<?= $CourseID ?>">
                    <input type="submit" class="btn w-40 p-1 me-3" value="Komentar">
                </div>

            </form>
        </div>
        <?php if (!empty($comments)) : ?>
            <div class="card mt-2">
                <div class="card-body">
                    <?php foreach ($comments as $row) : ?>
                        <div class="row ">
                            <div class="pe-0 w-auto">
                                <img src="<?= base_url() ?>media/avatar/<?= $row->UserAvatar ?>" alt="image" class="my-auto class-ava">
                            </div>
                            <div class="w-80">
                                <p class="card-title text-black fw-bold mb-0"><?= $row->UserName ?> . <span class="me-3 fw-light text-black3 small"><?= date("d M Y, H:i", strtotime($row->time_answer));  ?></span>
                                </p>
                                <div class="card-text text-black small fs-15 mb-4"><?= $row->ForumAContent ?>
                                    <?php if ($row->UserID == $this->session->userdata('id_user')) : ?>
                                        <div class="text-end">
                                            <a href="<?= base_url() ?>discussion/editkomentar/<?= $row->ForumAID ?>/<?= $thread->ForumQID ?>/<?= $thread->CourseID ?>" class="text-blue fw-bold">Edit</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteComment<?= $row->ForumAID ?>" class="text-danger ms-2 fw-bold">Hapus</a>
                                        </div>
                                        <!-- Modal Keluar-->
                                        <div class="modal fade" id="deleteComment<?= $row->ForumAID ?>" tabindex="-1" aria-labelledby="quitLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body text-center">
                                                        <p class="text-black fw-bold mb-4">Anda yakin ingin menghapus komentar?
                                                        </p>
                                                        <a href="<?= base_url() ?>discussion/deletecomment/<?= $thread->CourseID ?>/<?= $row->ForumQID ?>/<?= $row->ForumAID ?>" class="btn btn-warning btn-sm w-30 m-auto me-3">Hapus</a>
                                                        <button type="button" class="btn bg-white btn-sm w-30 m-auto" data-bs-dismiss="modal">Batal</button>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <hr>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>
<div class="mt-5" style="height: 50px;"></div>