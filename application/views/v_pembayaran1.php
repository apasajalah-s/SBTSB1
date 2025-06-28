    <!-- page title area start -->

    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                    <h4 class="page-title" style="font-family: 'Comic Sans MS', Courier, monospace;">Pembayaran</h4>
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
                            <a><?= $utama->tim_tuan_rumah ?></a>
                        </div>
                        0 vs 0
                        <div class="team-b">
                            <a><?= $utama->tim_tamu ?></a>
                            <img src="<?php echo base_url('/assets/image/shield-2.png') ?>" alt="Shield">
                        </div>
                    </div>
                    <div class="date" style="font-family: 'Comic Sans MS', cursive, sans-serif;">
                        <?= date('d F Y', strtotime($utama->tanggal)) ?> | <?= date('H:i', strtotime($utama->waktu)) ?>
                    </div>
                    <div class="location" style="font-family: 'Comic Sans MS', cursive, sans-serif;">
                        <?= $utama->lokasi_stadion ?> : Banda Aceh
                    </div>
                </div>
            </div>

            <div class="pembayaran-wrapper">
                <!-- Kolom KIRI -->
                <div class="kolom-kiri">
                    <div class="judul-metode">
                        <h3>Metode Pembayaran</h3>
                    </div>
                    <div class="metode-bayar">
                        <ul>
                            <li><span>• Ovo</span> <button>Ovo</button></li>
                            <li><span>• Go-pay</span> <button>Go-pay</button></li>
                            <li><span>• Dana</span> <button>Dana</button></li>
                            <li><span>• Transfer Bank</span> <button>Pilih</button></li>
                        </ul>
                    </div>

                    <div class="gambar-stadion">
                        <img src="<?= base_url('assets/image/tribun-psn.jpeg') ?>" alt="Tribun">
                    </div>
                </div>

                <!-- Kolom KANAN -->
                <div class="kolom-kanan">
                    <form action="<?= base_url('pembayaran/simpan') ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="match_id" value="<?= $utama->match_id ?>">
                        <label>Nama :</label>
                        <input type="text" name="nama" required>

                        <label>Email :</label>
                        <input type="email" name="email" required>

                        <label>No Hp :</label>
                        <input type="text" name="no_hp" required>

                        <label>Upload Bukti Bayar</label>
                        <input type="file" name="file_bukti" accept=".jpg, .jpeg, .png" required>
                        <small>*Ukuran max 300mb</small>

                        <label>Metode Pembayaran:</label>
                        <select name="metode_pembayaran" required>
                            <option value="Ovo">Ovo</option>
                            <option value="Go-pay">Go-pay</option>
                            <option value="Dana">Dana</option>
                            <option value="Transfer Bank">Transfer Bank</option>
                        </select>

                        <button type="submit" class="btn-bayar">Bayar Sekarang</button>
                    </form>

                </div>

            </div>

        </div>
    </div>
    </div>

    <!-- main content area end -->