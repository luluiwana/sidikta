<div class="col-12 mt-4">
    <p class="fw-bold text-black small my-3"> <i class="fas fa-dot-circle text-blue me-1"></i> AKTIVITAS</p>
    <div class="card card-body">
        <table class="table table-borderless table-sm border-start border-info border-2 ms-1 p-2">
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td class=" ps-3 "> <img src="<?= base_url() ?>media/avatar/<?= $row->UserAvatar ?>" alt="" srcset="" class="class-ava me-2"></td>
                    <td class="small text-wrap">

                        <span class="text-blue fw-bold"><?= $row->UserName ?> </span>
                        <?= $row->log ?>
                        <span class="text-secondary">. <?= date("d M Y (H:i", strtotime($row->datetime));  ?> WIB)</span>
                    </td>
                </tr>
            <?php endforeach;  ?>
        </table>

    </div>
</div>