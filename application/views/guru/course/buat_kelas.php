<div class="container-fluid px-2">
    <div class="row ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url() ?>guru/kelas" class="text-primary">Kelas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Buat Kelas</li>
            </ol>
        </nav>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url() ?>guru/addkelas" method="post" enctype='multipart/form-data'>
                        <div class="mb-3">
                            <label for="CourseName" class="form-label">Nama Mata Pelajaran</label>
                            <input type="text" name="CourseName" class="form-control  text-black" placeholder="Masukkan Nama Mata Pelajaran" required>
                        </div>
                        <div class="mb-3">
                            <label for="SchoolName" class="form-label">Nama Sekolah</label>
                            <input type="text" name="SchoolName" class="form-control  text-black" placeholder="Masukkan Nama Sekolah" required>
                        </div>
                        <div class="mb-3">
                            <label for="ClassName" class="form-label">Kelas</label>
                            <input type="text" name="ClassName" class="form-control  text-black" placeholder="Masukkan Nama Kelas (contoh: XII RPL D)" required>
                        </div>
                        <div class="mb-3">
                            <label for="CourseLogo" class="form-label">Logo Kelas (.jpg/.png)</label>
                            <input type="file" name="CourseLogo" class="form-control  text-black" accept="image/*" required>
                        </div>

                        <button type="submit" class="btn btn-guru">Buat Kelas</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md">
            <img src="<?= base_url() ?>assets/img/vector/Leader-rafiki.svg" class="w-100" alt="">
        </div>
    </div>

</div>
</main>