<div class="container-fluid">
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

        <div class=" p-0 mt-2 card">
            <form action="<?= base_url() ?>discussion/editdiskusi__/<?= $thread->ForumQID ?>/<?= $thread->CourseID ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <textarea name="content" id="add_question" class=" form-control" required>
                     <?= $thread->ForumQContent ?>
                </textarea>
                </div>
                <div class="text-end">
                    <input type="hidden" name="courseid" value="">
                    <input type="submit" class="btn w-30 p-1 me-3" value="Kirim">
                </div>
            </form>
        </div>
    </div>
</div>