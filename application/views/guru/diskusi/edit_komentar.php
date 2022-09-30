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
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?= base_url() ?>DiscussionGuru/detail_discussion/<?= $thread->ForumQID ?>/<?= $thread->CourseID ?>" class="text-primary fw-bold"> <?= $thread->UserName ?></a>
                </li>
                <li class="breadcrumb-item active">
                    Edit Komentar
                </li>
            </ol>
        </nav>
        <div class="">
            <form action="<?= base_url('DiscussionGuru/editComment__/' . $comment->ForumAID . '/' . $comment->ForumQID . '/' . $CourseID) ?>" method="post" class="bg-white">
                <div class="form-group row">
                    <textarea name="content" id="add_answer" class=" form-control" required>
                        <?= $comment->ForumAContent ?>
                    </textarea>
                </div>
                <input type="hidden" name="CourseID" value="<?= $CourseID ?>">
                <button type="submit" class="btn btn-guru w-auto">Edit
                    Komentar</button>
            </form>
        </div>
    </div>

</div>