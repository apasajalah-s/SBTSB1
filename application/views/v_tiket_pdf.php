<?php
// Konversi QR code jadi base64
$qr_path = FCPATH . 'assets/qr/' . $qr_code_filename;
$qr_base64 = '';
if (file_exists($qr_path)) {
    $qr_data = file_get_contents($qr_path);
    $qr_base64 = 'data:image/png;base64,' . base64_encode($qr_data);
}

// Konversi gambar stadion jadi base64
$stadion_path = FCPATH . 'assets/image/img_utama.webp';
$stadion_base64 = '';
if (file_exists($stadion_path)) {
    $img_data = file_get_contents($stadion_path);
    $stadion_base64 = 'data:image/webp;base64,' . base64_encode($img_data);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tiket Pertandingan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            color: #333;
        }

        .image {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .info {
            margin-top: 20px;
            font-size: 16px;
        }

        .qr {
            margin-top: 20px;
        }

        .qr img {
            padding: 10px;
            background: #fff;
            border-radius: 10px;
        }

        .zona {
            font-size: 20px;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <h2>TIKET PERTANDINGAN</h2>

    <!-- Gambar Stadion -->
    <?php if ($stadion_base64): ?>
        <img src="<?= $stadion_base64 ?>" class="image" alt="Stadion">
    <?php else: ?>
        <p>[Gambar stadion tidak tersedia]</p>
    <?php endif; ?>

    <div class="info">
        <p><strong><?= $utama->tim_tuan_rumah ?> VS <?= $utama->tim_tamu ?></strong></p>
        <p><?= date('d F Y', strtotime($utama->tanggal)) ?> | <?= date('H:i', strtotime($utama->waktu)) ?></p>
        <p><?= $utama->lokasi_stadion ?> - Banda Aceh</p>
        <p><strong>Nama:</strong> <?= $booking->nama ?></p>
        <div class="zona"><?= strtoupper($zona_kursi) ?></div>
    </div>

    <!-- QR Code -->
    <div class="qr">
        <?php if ($qr_base64): ?>
            <img src="<?= $qr_base64 ?>" width="120" alt="QR Code">
        <?php else: ?>
            <p>[QR Code tidak tersedia]</p>
        <?php endif; ?>
    </div>

</body>

</html>