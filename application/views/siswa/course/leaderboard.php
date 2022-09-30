<div class="row mt-2">
    <div class="card card-body">
        <div class="row">
            <span class="fw-bold text-black small mt-3 w-60">Warga Belajar</span>
            <span class="fw-bold text-black small mt-2 w-40 text-end"> <i class="fas fa-star text-warning" aria-hidden="true"></i>
                Skor
            </span>
        </div>
        <div class="mt-4 ">
            <?php foreach ($leaderboard as $row) : ?>
                <div class="row py-3 border-end border-warning border-5">
                    <div class="lb-forum w-20 my-auto">
                        <img src="<?= base_url() ?>/media/avatar/<?= $row->UserAvatar ?>" alt="image" class="class-ava my-auto">
                    </div>
                    <div class="nama-lb-forum w-60 my-auto">
                        <div class=" my-auto small text-black"><?= $row->UserName ?></div>
                    </div>
                    <div class="skor-forum w-20 my-auto">
                        <div class="text-black fw-bolder small"><?= $row->courseXP ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</div>
<div class="mt-5" style="height: 50px;"></div>
</div>
</main>