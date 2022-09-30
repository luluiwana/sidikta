<div class="container-fluid px-2">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?= base_url() ?>DiscussionGuru" class="text-primary fw-bold">Forum</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?= base_url() ?>DiscussionGuru/all/<?= $CourseID ?>" class="text-primary fw-bold">Forum
                        <?= $CourseName ?></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $thread->UserName ?>
                </li>
            </ol>
        </nav>
        <div class="col-md-8">
            <div class="card-forum bg-white">
                <div class="row mb-3">
                    <div class="w-100 row">
                        <div class="pe-0 w-auto">
                            <img src="<?= base_url() ?>media/avatar/<?= $thread->UserAvatar ?>" alt="image" class="my-auto" style="width:45px">
                        </div>
                        <div class="w-80 name-space ">
                            <div class="fw-bolder text-black"><?= $thread->UserName ?>

                            </div>
                            <div class="text-secondary small">
                                <span class="me-3"><?= date("d M Y, H:i", strtotime($thread->time_thread)); ?></span>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="text-black"><?= $thread->ForumQContent ?></div>
                <div class="row mt-3">
                    <?php if ($thread->UserID == $this->session->userdata('id_user')) : ?>
                        <a class="w-auto me-3" href="<?= base_url() ?>DiscussionGuru/editdiskusi/<?= $thread->ForumQID ?>/<?= $CourseID ?>">Edit</a>
                        <a class="w-auto" data-bs-toggle="modal" data-bs-target="#deleteThread">Hapus</a>

                    <?php endif; ?>
                    <!-- Modal Keluar-->
                    <div class="modal fade" id="deleteThread" tabindex="-1" aria-labelledby="quitLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <p class="text-black fw-bold mb-4">Yakin ingin menghapus?
                                    </p>
                                    <a href="<?= base_url() ?>DiscussionGuru/delete/<?= $thread->ForumQID ?>/<?= $thread->CourseID ?>" class="btn btn-sm btn-guru w-auto me-5 px-4 ">Hapus</a>
                                    <button type="button" class="btn bg-dark btn-sm btn-guru w-auto px-4" data-bs-dismiss="modal">Batal</button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 bg-white">
                <form action="<?= base_url('DiscussionGuru/addComments/' . $thread->ForumQID) ?>" method="post">
                    <div class="form-group row">
                        <textarea name="content" id="add_answer" class=" form-control" required></textarea>
                    </div>
                    <input type="hidden" name="CourseID" value="<?= $CourseID ?>">
                    <button type="submit" class="btn btn-diskusi btn-guru w-auto" style="display:none">Tambahkan
                        Komentar</button>
                </form>
            </div>
            <?php if (!empty($comments)) : ?>
                <div class="col-md-12">
                    <p class="fw-bold text-black small mt-3"> <i class="fas fa-dot-circle text-warning me-1"></i>
                        <?= $countComments ?> Komentar
                    </p>
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($comments as $row) : ?>
                                <div class="row ">
                                    <div class="pe-0 w-auto">
                                        <img src="<?= base_url() ?>media/avatar/<?= $row->UserAvatar ?>" alt="image" class="my-auto" style="width:45px">
                                    </div>
                                    <div class="w-80">
                                        <p class="card-title text-black fw-bold mb-0"><?= $row->UserName ?>
                                            . <span class="me-3 fw-light text-secondary small"><?= date("d M Y, H:i", strtotime($row->time_answer));  ?></span>
                                        </p>
                                        <div class="card-text text-black small fs-15 "><?= $row->ForumAContent ?>
                                            <?php if ($row->UserID == $this->session->userdata('id_user')) : ?>
                                                <div>
                                                    <a href="<?= base_url() ?>DiscussionGuru/editkomentar/<?= $row->ForumAID ?>/<?= $thread->ForumQID ?>/<?= $thread->CourseID ?>" class="text-primary">Edit</a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteComment<?= $row->ForumAID ?>" class="text-primary ms-3">Hapus</a>
                                                </div>
                                                <!-- Modal Keluar-->
                                                <div class="modal fade" id="deleteComment<?= $row->ForumAID ?>" tabindex="-1" aria-labelledby="quitLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center">
                                                                <p class="text-black fw-bold mb-4">Yakin ingin menghapus
                                                                    komentar ini?
                                                                </p>
                                                                <a href="<?= base_url() ?>DiscussionGuru/deletecomment/<?= $thread->CourseID ?>/<?= $row->ForumQID ?>/<?= $row->ForumAID ?>" class="btn btn-guru btn-sm w-auto px-4 me-5">Hapus</a>
                                                                <button type="button" class="btn btn-guru bg-dark btn-sm px-4 w-auto" data-bs-dismiss="modal">Batal</button>

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
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

</main>