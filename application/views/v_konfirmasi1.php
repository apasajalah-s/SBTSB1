<!-- Page Title Area -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title" style="font-family: 'Comic Sans MS', Courier, monospace;">Konfirmasi</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?= base_url('home') ?>">Admin</a></li>
                    <li><a href="<?= base_url('home') ?>">Beranda</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="main-content-inner">
    <div class="sales-report-area sales-style-two">
        <div class="mt-3">
            <div class="header-title">
                <h5>Selamat Datang, <i><?= $this->session->userdata('username') ?></i></h5>
            </div>
        </div>

        <div class="container">
            <?php
            $stadion_path = FCPATH . 'assets/image/img_utama.webp';
            $stadion_base64 = '';
            if (file_exists($stadion_path)) {
                $img_data = file_get_contents($stadion_path);
                $stadion_base64 = 'data:image/webp;base64,' . base64_encode($img_data);
            }
            ?>
            <img src="<?= $stadion_base64 ?>" alt="Stadion" style="width:100%; max-height:300px; object-fit:cover;">
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
                <!-- <div class="text-center-qr">
                    <?php
                    $qr_path = FCPATH . 'assets/qr/' . $qr_code_filename;
                    $qr_base64 = '';
                    if (file_exists($qr_path)) {
                        $qr_data = file_get_contents($qr_path);
                        $qr_base64 = 'data:image/png;base64,' . base64_encode($qr_data);
                    }
                    ?>
                    <img src="<?= $qr_base64 ?>" alt="QR Code" width="150">
                </div> -->
                <div class="text-center-s" style="font-size: 20px;">
                    Status: <strong class="success">Berhasil</strong>
                </div>

            </div>
        </div>
        <!-- Unduh Tiket -->
        <div class="text-center mt-3">
            <h5 class="text" style="color: #000; font-family: 'Comic Sans MS', cursive, sans-serif; font-weight: bold;">Unduh Tiket</h5>
            <a href="#" class="btn btn-info m-1" style="font-family: 'Comic Sans MS', cursive, sans-serif; font-weight: bold; background: #ABFFFB; color: #000; border: 2px solid #000; border-radius: 15px;">PDF</a>
            <button onclick="downloadAsImage()" class="btn btn-info m-1" style="font-family: 'Comic Sans MS', cursive, sans-serif; font-weight: bold; background: #ABFFFB; color: #000; border: 2px solid #000; border-radius: 15px;">PNG</button>
        </div>

        <script>
            function downloadAsImage() {
                html2canvas(document.querySelector(".container")).then(canvas => {
                    var link = document.createElement('a');
                    link.download = 'tiket.png';
                    link.href = canvas.toDataURL("image/png");
                    link.click();
                });
            }
        </script>


        <!-- <div class="text-center mt-2">
            <a href="<?= base_url('home') ?>" class="btn btn-dark">&larr; Kembali ke Beranda</a>
        </div> -->
    </div>
</div>





</div>
</div>