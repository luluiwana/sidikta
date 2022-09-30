  <footer id="footer" class=" w-100 row m-auto">
    <div class="w-25 m-auto op-30 <?php if ($menu == 'Dashboard') {
                                    echo 'active';
                                  } ?>">
      <a class=" " href="<?= base_url() ?>siswa">
        <img src="<?= base_url() ?>assets/icon/home.png" class="ms-3 d-block" alt="">
        <img src="<?= base_url() ?>assets/icon/active.png" class="ms-4 op-0 <?php if ($menu == 'Dashboard') {
                                                                              echo 'active';
                                                                            } ?>"" alt="">
      </a>
    </div>
    <div class=" w-25 m-auto op-30 <?php if ($menu == 'Kelas') {
                                      echo 'active';
                                    } ?>">
        <a class=" " href="<?= base_url() ?>siswa/kelas">
          <img src="<?= base_url() ?>assets/icon/class.png" class="ms-3 d-block" alt="">
          <img src="<?= base_url() ?>assets/icon/active.png" class="ms-4 op-0 <?php if ($menu == 'Kelas') {
                                                                                echo 'active';
                                                                              } ?>"" alt="">
      </a>
    </div>
    <div class=" w-25 m-auto op-30 <?php if ($menu == 'Diskusi') {
                                      echo 'active';
                                    } ?>">
          <a class=" " href="<?= base_url('discussion') ?>">
            <img src="<?= base_url() ?>assets/icon/forum.png" class="ms-3 d-block" alt="">
            <img src="<?= base_url() ?>assets/icon/active.png" class="ms-4 op-0 <?php if ($menu == 'Diskusi') {
                                                                                  echo 'active';
                                                                                } ?>"" alt="">
      </a>
    </div>
    <div class=" w-25 m-auto op-30 <?php if ($menu == 'Profil') {
                                      echo 'active';
                                    } ?>">
            <a class=" " href="<?= base_url('profil/') ?>">
              <img src="<?= base_url() ?>assets/icon/user.png" class="ms-3 d-block" alt="">
              <img src="<?= base_url() ?>assets/icon/active.png" class="ms-4 op-0 <?php if ($menu == 'Profil') {
                                                                                    echo 'active';
                                                                                  } ?>"" alt="">
      </a>
    </div>
  </footer>

  <!--   Core JS Files   -->
  <script src=" https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
              <script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
              <script src="<?= base_url() ?>assets/js/editor.js"></script>
              <script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
              <!-- <script src="<?= base_url() ?>assets/js/plugins/perfect-scrollbar.min.js"></script> -->
              <script src="<?= base_url() ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
              <script src="<?= base_url() ?>assets/js/plugins/chartjs.min.js"></script>

              <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>

              <!-- Github buttons -->
              <script async defer src="https://buttons.github.io/buttons.js"></script>
              <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
              <script src="<?= base_url() ?>assets/js/soft-ui-dashboard.js?v=1.0.3"></script>
              <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
              <script src="<?= base_url() ?>assets/summernote/summernote.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
              <script src="<?= base_url() ?>assets/js/user.js"></script>
              <script src=”https://www.jdoodle.com/assets/jdoodle-pym.min.js” type=”text/javascript”></script>
              <script type="text/javascript">
                $(window).on('load resize', function() {
                  if ($(window).width() > 768) {
                    window.location = "./auth/akses_ditolak"
                  }
                });
              </script>
              </body>

              </html>