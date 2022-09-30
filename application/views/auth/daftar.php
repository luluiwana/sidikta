<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIDIKTA - Daftar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/animate.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/aos.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/style.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/user.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg ftco_navbar site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand mx-auto" href="<?= base_url() ?>">
                <img src="<?= base_url() ?>assets/img/logo.png" alt="" class="logo" srcset="">
            </a>
        </div>
    </nav>
    <section id="home-section" class="">
        <div class="row container">
            <!-- <span class="subheading">Classmate</span> -->
            <div class="col-md-6 m-auto d-w-30">
                <p class="fs-30px mt-3 text-center mb-4" style="font-weight: 500;">Daftar SIDIKTA</p>

                <div class="font-weight-bold text-danger small text-center"><?php echo validation_errors(); ?></div>
                <form role="form" method="POST" class="mb-5" action="<?= base_url('auth/daftar') ?>">
                    <div class="">
                        <div class="mb-2">
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" aria-describedby="username-addon" required>
                        </div>
                        <div class="mb-2">
                            <input type="email" name="email" class="form-control" placeholder="Masukkan alamat e-mail" aria-label="username" aria-describedby="username-addon" required>
                        </div>
                        <div class="mb-2">
                            <input type="tel" name="telp" class="form-control" placeholder="Masukkan nomor telepon" aria-label="username" aria-describedby="username-addon" required>
                        </div>
                        <div class="mb-2">
                            <input type="password" name="password" class="form-control" placeholder="Buat kata sandi" aria-label="Buat Password" aria-describedby="password-addon" required autocomplete="off">
                        </div>
                        <div class="mb-2">
                            <input type="password" name='passconf' class="form-control" placeholder="Konfirmasi kata sandi" aria-describedby="password-addon" required autocomplete="off">
                        </div>
                        <label class="small  font-weight-bold">Daftar Sebagai</label>
                        <div class="mb-5 row">
                            <div class="form-check mr-4">
                                <input class="form-check-input" type="radio" name="userRole" id="flexRadioDefault2" value="2" required>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Warga Belajar
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="userRole" id="flexRadioDefault1" value="1" required>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Fasilitator
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class=" w-100 mt-5">
                        <input type="submit" class="btn btn-yellow-big mt-2" value="Daftar Sekarang">
                    </div>
                    <p class="text-center fw-500 mt-4">Sudah memiliki akun? <a href="<?= base_url() ?>auth/login" class="text-link font-weight-bold">Login</a></p>




                </form>
            </div>


        </div>
    </section>




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="<?= base_url() ?>assets/landing/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/aos.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/scrollax.min.js"></script>

    <script src="<?= base_url() ?>assets/landing/js/main.js"></script>

</body>

</html>