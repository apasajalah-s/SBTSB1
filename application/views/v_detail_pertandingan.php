    <!-- page title area start -->

    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                    <h4 class="page-title" style="font-family: 'Comic Sans MS', Courier, monospace;">Detail Pertandingan</h4>
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
            <div class="container">
                <img src="<?php echo base_url('/assets/image/img_utama.webp') ?>" alt="Stadion">
                <div class="text-over-image">
                    <div class="score" style="font-family: 'Comic Sans MS', cursive, sans-serif;">
                        <div class="team-a">
                            <img src="<?php echo base_url('/assets/image/shield-1.png') ?>" alt="Shield" style="color: red;">
                            <a>Team A</a>
                        </div>
                        0 vs 0
                        <div class="team-b">
                            <img src="<?php echo base_url('/assets/image/shield-2.png') ?>" alt="Shield">
                            <a>Team B</a>
                        </div>
                    </div>
                    <div class="date" style="font-family: 'Comic Sans MS', cursive, sans-serif;">
                        24 Agustus 2025 | 18:00
                    </div>
                    <div class="location" style="font-family: 'Comic Sans MS', cursive, sans-serif;">
                        Stadion Harapan Bangsa : Banda Aceh
                    </div>
                </div>
            </div>

            <div class="kursi">
                <img src="<?php echo base_url('/assets/image/tribun.jpg') ?>" alt="Zona Tribun">
                <div>
                    <a href="https://maps.app.goo.gl/pqi1yweTnNg9Tgms9">Zona Tribun</a>
                </div>
                <a href="<?php echo base_url() ?>kursi" class=" btn-1">Pilih Kursi</a>
            </div>
        </div>
    </div>
    </div>

    <!-- main content area end -->