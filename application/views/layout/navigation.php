<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <img src=" <?php echo base_url('/assets/dashboard/images/logo/logo1.png'); ?>" alt="Logo" class="w-10 mb-2">
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="<?php echo base_url() ?>pertandingan"><i class="ti-import"></i> <span class="span">Input Pertandingan</span></a></li>
                            <li><a href="<?php echo base_url() ?>home"><i class="ti-dashboard"></i> <span class="span">Beranda</span></a></li>
                            <li><a href="<?= base_url('detail_pertandingan/index/' . $this->session->userdata('match_id')) ?>"><i class="ti-info"></i> <span class="span">Detail Pertandingan</span></a></li>
                            <li><a href="<?= base_url('kursi/index/' . $this->session->userdata('match_id')) ?>"><i class="ti-layout-grid2"></i> <span class="span">Kursi</span></a></li>
                            <li><a href="<?= base_url('pembayaran/index1/' . $this->session->userdata('match_id')) ?>"><i class="ti-credit-card"></i> <span class="span">Pembayaran</span></a></li>
                            <li><a href="<?= base_url('konfirmasi/index1/' . $this->session->userdata('match_id')) ?>"><i class="ti-check-box"></i> <span class="span">Konfirmasi</span></a></li>
                            <li><a href="<?php echo base_url() ?>auth/logout"><i class="ti-arrow-circle-left"></i> <span class="span">Keluar</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="header-area">
                <div class="row align-items-center">
                    <div class="col-md-12 clearfix">
                        <div class="nav-btn pull-right">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="text">
                    <p style="font-family: 'Comic Sans MS', Courier, monospace;">Stadion Harapan Bangsa</p>
                </div>
            </div>