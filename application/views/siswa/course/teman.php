<div class="row mt-2">
    <div class="col-md-6 card card-body">
        <table class="table table-hover">
            <tbody>
                <?php foreach ($teman as $row) : ?>
                    <tr>
                        <td>
                            <img src="<?= base_url() ?>media/avatar/<?= $row->UserAvatar ?>" class="class-ava" alt="">
                        </td>
                        <td class="text-black" style="vertical-align: middle;"><?= $row->UserName ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <div class="col-md-6 d-none d-sm-block"> <img src="<?= base_url() ?>assets/img/vector/Collab-amico.svg" class="" alt="" srcset=""></div>
</div>
<div class="mt-5" style="height: 50px;"></div>
</div>
</main>