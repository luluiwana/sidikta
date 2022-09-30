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
        <div class=" p-0 mt-2 card">
            <form action="<?= base_url() ?>discussion/adddatadiskusi" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <textarea name="content" id="add_question" class=" form-control" required></textarea>
                </div>
                <div class="text-end">
                    <input type="hidden" name="courseid" value="<?= $course_id ?>">
                    <input type="submit" class="btn w-30 p-1 me-3" value="Kirim">
                </div>
            </form>
        </div>
        <?php if (!empty($diskusi)) : ?>
            <?php foreach ($diskusi as $row) : ?>
                <a href="<?= base_url() ?>discussion/detail_discussion/<?= $row->ForumQID ?>/<?= $course_id ?>" class="p-0">
                    <div class=" card mt-2 p-3">
                        <div class="row">
                            <div class="w-10 ava-space pe-0">
                                <img src="<?= base_url() ?>media/avatar/<?= $row->UserAvatar ?>" alt="image" class="class-ava my-auto">
                            </div>
                            <div class="w-90 name-space ">

                                <div class="text-black fw-bolder"><?= $row->UserName ?>

                                </div>
                                <div class="text-black3 small">
                                    <span class="me-3"><?= date("d M Y, H:i", strtotime($row->time_thread)); ?></span>
                                </div>

                            </div>
                        </div>
                        <div class="text-black mt-3 fs-5 fw-bold">
                            <?= $row->ForumQTitle ?>
                        </div>
                        <div class="text-black isi-diskusi">
                            <?= $row->ForumQContent ?>
                        </div>
                        <!-- <hr> -->
                        <div class="text-blue isi-diskusi fw-bold">
                            <?= $this->M_Discussion->countComments($row->ForumQID) ?> Komentar
                        </div>

                    </div>
                </a>
            <?php endforeach; ?>

    </div>
<?php else : ?>
    <div class="card mt-2">
        <div class="card-body">
            <p>Belum ada diskusi</p>

        </div>
    </div>
<?php endif; ?>
</div>
<div class="mt-5" style="height: 50px;"></div>