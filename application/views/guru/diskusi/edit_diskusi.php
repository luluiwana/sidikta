<div class="container-fluid px-2">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?= base_url() ?>discussionguru" class="text-primary fw-bold">Forum</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?= base_url() ?>DiscussionGuru/all/<?= $CourseID ?>" class="text-primary fw-bold">Forum
                        <?= $CourseName ?></a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?= base_url() ?>DiscussionGuru/detail_discussion/<?= $thread->ForumQID ?>/<?= $thread->CourseID ?>" class="text-primary fw-bold"> <?= $thread->UserName ?></a>
                </li>
                <li class="breadcrumb-item active">
                    Edit
                </li>
            </ol>
        </nav>
        <div class="">
            <form action="<?= base_url() ?>DiscussionGuru/editdiskusi__/<?= $thread->ForumQID ?>/<?= $thread->CourseID ?>" method="post" enctype="multipart/form-data" class="bg-white">

                <div class="form-group">
                    <textarea name="content" id="add_question" class=" form-control" required>
                     <?= $thread->ForumQContent ?>
                </textarea>
                </div>
                <div class="form-group row px-3">


                    <div class="w-50">
                        <input type="hidden" name="courseid" value="">
                        <input type="submit" class="btn btn-guru float-end" value="Edit">
                    </div>

                </div>
            </form>
        </div>
    </div>

</div>