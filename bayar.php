<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['id'])) {
    header("Location: loginadmin&user.php");
    exit();
}

$id_user = $_SESSION['id'];

$sql = "SELECT * FROM data_pasien WHERE id = '$id_user' LIMIT 1";
$result = $koneksi->query($sql);

if ($result && $result->num_rows > 0) {
    $data = $result->fetch_assoc();
    $NIK = $data['NIK'];
    $no_bpjs = $data['no_bpjs'];
    $nama = $data['nama'];
    $harga = $data['harga'];
    $status_pembayaran = isset($data['status_pembayaran']) ? strtolower($data['status_pembayaran']) : 'belum lunas';
} else {
    echo "<script>alert('Data peserta tidak ditemukan!'); window.location.href='halamanuser.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Pembayaran BPJS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f0f4f8;
        }
        .container {
            max-width: 650px;
        }
        .paid-notice {
            background-color: #d1e7dd;
            color: #0f5132;
            border-left: 6px solid #0f5132;
            padding: 15px 20px;
            margin-bottom: 25px;
            border-radius: 8px;
        }
        .btn-view-data {
            background-color: #0d6efd;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 6px;
            display: inline-block;
            margin-top: 10px;
        }
        .btn-view-data:hover {
            background-color: #084298;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <?php if ($status_pembayaran === 'sudah lunas'): ?>
            <div class="paid-notice">
                <strong>Anda sudah membayar BPJS bulan ini.</strong><br>
                Tidak perlu melakukan pembayaran lagi.
                <br><a href="datauser.php" class="btn-view-data">Lihat Data Anda</a>
            </div>
        <?php endif; ?>

        <h2>Pembayaran BPJS</h2>
        <div class="card mt-3">
            <div class="card-header">Konfirmasi Pembayaran</div>
            <div class="card-body">
                <p><strong>Nama Peserta:</strong> <?= htmlspecialchars($nama); ?></p>
                <p><strong>NIK:</strong> <?= htmlspecialchars($NIK); ?></p>
                <p><strong>No BPJS:</strong> <?= htmlspecialchars($no_bpjs); ?></p>
                <p><strong>Harga BPJS:</strong> Rp <?= number_format($harga, 0, ',', '.'); ?></p>

                <?php if ($status_pembayaran !== 'sudah lunas'): ?>
                <form method="POST" action="proses_bayar.php">
                    <div class="mb-3">
                        <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
                        <input type="number" name="jumlah_bayar" class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                        <select name="metode_pembayaran" class="form-select" required>
                            <option value="Visa">Visa</option>
                            <option value="BCA">BCA</option>
                            <option value="BNI">BNI</option>
                            <option value="Bank Lainnya">Bank Lainnya</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Bayar Sekarang</button>
                </form>
                <?php endif; ?>

                <a href="halamanuser.php" class="btn btn-secondary mt-3 w-100">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
