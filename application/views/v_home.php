    <!-- page title area start -->

    <!-- page title area end -->

    <div class="main-content-inner">
        <!-- sales report area start -->
        <div class="sales-report-area sales-style-two">
            <div class="mt-3">
                <div class="header-title">
                    <h5>Selamat Datang, <i><?php echo $this->session->userdata('username'); ?></i></h5>
                </div>
            </div>
            <div class="relative">
                <div class="opacity"></div>
                <img src="<?php echo base_url('/assets/image/img_utama.webp') ?>" style="opacity: rgba(0, 0, 0, 0.5);">
                <div class="text-di-gambar">
                    <p><?= $utama->tim_tuan_rumah ?> VS <?= $utama->tim_tamu ?></p>
                    <p><?= date('d F Y', strtotime($utama->tanggal)) ?> | <?= date('H:i', strtotime($utama->waktu)) ?></p>
                    <?php if (!empty($utama)): ?>
                        <div class="psnt">
                            <?php $match_id = $this->session->userdata('match_id'); ?>
                            <a href="<?= base_url('detail_pertandingan/index/' . $match_id) ?>">Pesan Tiket</a>
                        </div>
                    <?php endif; ?>
                </div>
                <h4>Pertandingan Selanjutnya</h4>
            </div>
            <div class="row">
                <?php foreach ($jadwal as $j): ?>
                    <div class="col-xl-4 col-md-6 mt-2">
                        <div class="single-report">
                            <div class="s-sale-inner">
                                <div class="s-report-title text-center">
                                    <h4 class="header-title mb-0" style="font-size: 25px;"><?= $j->tim_tuan_rumah ?> Vs <?= $j->tim_tamu ?></h4>
                                    <h4 class="header-title mb-0" style="font-size: 25px;"><?= date('d F Y', strtotime($j->tanggal)) ?> | <?= date('H:i', strtotime($j->waktu)) ?></h4>
                                    <?php $match_id = $this->session->userdata('match_id'); ?>
                                    <a href="<?= base_url('detail_pertandingan/index/' . $j->match_id) ?>" class="psn" style="margin-top: 10px; display: inline-block;">Pesan Tiket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </div>
    <!-- main content area end -->