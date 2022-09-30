<div class="container-fluid px-2">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>DiscussionGuru" class="text-primary fw-bold">Forum</a></li>
                <li class="breadcrumb-item active" aria-current="page">Forum <?= $CourseName ?></li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card bg-white mt-2 p-0">
                <form action="<?= base_url() ?>DiscussionGuru/adddatadiskusi" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <textarea name="content" id="add_question" class=" form-control" required></textarea>
                    </div>
                    <div class="form-group row btn-diskusi px-3" style="display:none">


                        <div class="w-50">
                            <input type="hidden" name="courseid" value="<?= $course_id ?>">
                            <input type="submit" class="btn btn-guru float-end" value="Kirim">
                        </div>
                    </div>
                </form>
            </div>
            <?php if (!empty($diskusi)) : ?>
                <?php foreach ($diskusi as $row) : ?>
                    <a href="<?= base_url() ?>DiscussionGuru/detail_discussion/<?= $row->ForumQID ?>/<?= $course_id ?>" class="text-secondary">
                        <div class="card bg-white mt-2 p-3">
                            <div class="row">
                                <div class="w-10 ava-space pe-0">
                                    <img src="<?= base_url() ?>media/avatar/<?= $row->UserAvatar ?>" alt="image" class="w-100 my-auto">
                                </div>
                                <div class="w-90 name-space ">

                                    <div class="fw-bold text-black"><?= $row->UserName ?>

                                    </div>
                                    <div class="text-black3 small">
                                        <span class="me-3"><?= date("d M Y, H:i", strtotime($row->time_thread)); ?></span>
                                    </div>

                                </div>
                            </div>
                            <div class="mt-3 fs-5 fw-bold">
                                <?= $row->ForumQTitle ?>
                            </div>
                            <div class="text-black isi-diskusi">
                                <?= $row->ForumQContent ?>
                            </div>
                            <!-- <hr> -->
                            <div class="text-blue fs-15px fw-bold isi-diskusi">
                                <?= $this->M_Discussion->countComments($row->ForumQID) ?> Komentar
                            </div>
                            <!-- <div class="ques-icon-info3293 tex"> <a href="#" class="text-white"><i class=" text-white fa fa-clock-o" aria-hidden="true"> 4 min
                                    ago</i></a> <a href="#" class="text-white"><i class="text-white fa fa-question-circle-o" aria-hidden="true"> Question</i></a>
                            <a href="#" class="text-white">
                                <i class="fa fa-commen text" aria-hidden="true"> 333335 answer</i>
                            </a>

                        </div> -->
                        </div>
                    </a>
                <?php endforeach; ?>
        </div>

    </div>
<?php else : ?>
    <div class="card mt-2">
        <div class="card-body">
            <p>Belum ada diskusi</p>

        </div>
    </div>
<?php endif; ?>
</div>