    <!-- page title area start -->

    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
<<<<<<< HEAD
                    <h4 class="page-title" style="font-family: 'Comic Sans MS', Courier, monospace;">Input Pertandingan</h4>
=======
                    <h4 class="page-title" style="font-family: 'Comic Sans MS', Courier, monospace;">Detail Pertandingan</h4>
>>>>>>> 70bf2f1e51b2677d8fa0e346834c3cc0f9fd9273
                    <ul class="breadcrumbs pull-left">
                        <li><a href="<?php echo base_url() ?>home">Admin</a></li>
                        <li><a href="<?php echo base_url() ?>home">Beranda</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->

    <div class="main-content-inner">
        <!-- sales report area start -->
        <div class="sales-report-area sales-style-two">
            <div class="mt-3">
                <div class="header-title">
                    <h5>Selamat Datang, <i><?php echo $this->session->userdata('username'); ?></i></h5>
                </div>
            </div>
            <div class="pertandingan">
                <form action="<?= base_url('pertandingan/simpan') ?>" method="post">
                    <div class="form-grup">
                        <label>Tim Tuan Rumah</label>
                        <input type="text" name="tim_tuan_rumah" required>
                    </div>
                    <div class="form-grup">
                        <label>Tim Tamu</label>
                        <input type="text" name="tim_tamu" required>
                    </div>
                    <div class="form-grup">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" required>
                    </div>
                    <div class="form-grup">
                        <label>Waktu</label>
                        <input type="time" name="waktu" required>
                    </div>
                    <div class="form-grup">
                        <label>Lokasi Stadion</label>
                        <input type="search" name="lokasi_stadion" required>
                    </div>

                    <button type="submit">Simpan</button>
                </form>
            </div>

        </div>
    </div>
    </div>

    <!-- main content area end -->