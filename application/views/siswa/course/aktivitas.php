<div class="row mt-2 card">
    <div class="card-body">

        <table class="table table-borderless table-hover table-sm">
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td class="" style="min-width:50px"> <img src="<?= base_url() ?>media/avatar/<?= $row->UserAvatar ?>" alt="" srcset="" class="class-ava p-0"></td>
                    <td class="small text-wrap">
                        <span class="text-black fw-bold"><?= $row->UserName ?> </span>
                        <span class="text-black"> <?= $row->log ?></span>
                        <span class="text-black3 d-block"><?= date("d M Y (H:i", strtotime($row->datetime));  ?> WIB)</span>
                    </td>
                </tr>
            <?php endforeach;  ?>
        </table>

    </div>

</div>
<div class="mt-5" style="height: 50px;"></div>