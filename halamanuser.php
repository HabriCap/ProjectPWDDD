<?php
session_start();
include 'koneksi.php';

// Redirect ke halaman login jika belum login
if (!isset($_SESSION['username'])) {
    header("Location: halamanlogin.php");
    exit;
}

$username = $_SESSION['username'];
$sql = "SELECT nama_panggilan FROM user WHERE username='$username'";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['nama_panggilan'] = $row['nama_panggilan'];
} else {
    $_SESSION['nama_panggilan'] = "Pengguna";
}

$nama_panggilan = $_SESSION['nama_panggilan'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="user.css">
</head>
<style>

        .modal {
            display: none;
            position: fixed;
            z-index: 10;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(2, 2, 2, 0.7);
            padding-top: 50px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px 40px;
            border: 1px solid #888;
            width: 90%;
            max-width: 700px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            text-align: left;
        }
        .close {
            color: black;
            float: right;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover {
            color: red;
        }

</style>
<body>
    <div class="navbar" id="navbar">
        <div class="nav-logo">
            <img src="logobpjs.png" alt="logo BPJS">
        </div>
        <div class="nav-category">
            <a href="#informasi">Informasi Kepesertaan</a>
            <a href="#review">Benefit</a>
            <a href="kontak.php">Kontak</a>
            <a href="logout.php">Logout</a>
        </div>
        <div class="nav-search">
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="picture-container">
        <div id="banner1">
        <img src="BPJSBanner2.png">
        </div>
        <div class="picture-text">
        <h1>Selamat Datang</h1>
        <h4>Dapatkan Informasi Kemudahan Layanan dan Informaasi</h4>
        </div>
    </div>

    <div class="services-container">
        <div class="user-box-container">
            <div class="user-box">
                <h4>Halo !<br>  <?php echo htmlspecialchars($nama_panggilan); ?></h4>
            </div>
        </div>
        <div class="services">
            <a href="tambah.php" class="service-box-link">
                <div class="service-box">
                    <img src="https://img.icons8.com/fluency/48/organization.png">
                    <div class="service-title">Memasukkan Data</div>
                </div></a>
            <a href="datauser.php" class="service-box-link">
                <div class="service-box">
                    <img src="https://img.icons8.com/fluency/48/search.png">
                    <div class="service-title">Check Data Pribadi</div>
                </div></a>
            <a href="#" class="service-box-link tutorial-btn">
                <div class="service-box">
                    <img src="https://img.icons8.com/fluency/48/information.png">
                    <div class="service-title">Tutorial Pendaftaran</div>
                </div>

                <a href="bayar.php" class="service-box-link">
                <div class="service-box">
                    <img src="https://img.icons8.com/fluency/48/search.png">
                    <div class="service-title">Pembayaran BPJS</div>
                </div></a>
            
        </div>
    </div>
    <div class="review-container" id="review">
        <div class="review-section">
            <div class="box-title">
                <h2>Benefit (Keuntungan) </h2>
            </div>
            <div class="review-box">
                    <i class="bi bi-1-circle"></i><span>. Jaminan Kecelakaan Kerja</span>
                    <p>Menanggung biaya perawatan medis dan santunan akibat kecelakaan yang terjadi saat bekerja atau dalam perjalanan kerja.</p>
                    <i class="bi bi-2-circle"></i><span>. Jaminan Kematian</span>
                    <p>Memberikan santunan uang tunai kepada ahli waris jika peserta meninggal dunia, baik karena kecelakaan kerja maupun bukan.</p>
                    <i class="bi bi-3-circle"></i><span>. Jaminan Hari Tua</span>
                    <p>Tabungan jangka panjang yang bisa diambil saat pensiun, berhenti bekerja, atau mencapai usia tertentu.</p>
                    <i class="bi bi-4-circle"></i><span>. Jaminan Pensiun</p></span>
                    <p>Memberikan penghasilan bulanan saat peserta pensiun, mengalami cacat total tetap, atau untuk ahli waris jika peserta meninggal dunia.</p>
                    <i class="bi bi-5-circle"></i><span>. Jaminan Kehilangan Pekerjaan</span>
                    <p>Memberikan manfaat uang tunai, akses informasi pasar kerja, dan pelatihan kerja bagi peserta yang terkena PHK.</p>
            </div>
        </div>
        <div class="review-section">
            <div class="box-title">
                    <h2>Tujuan (Purpose)</h2>
            </div>
            <div class="review-box">
                <i class="bi bi-1-circle"></i><span>. Memberikan perlindungan terhadap risiko sosial ekonomi seperti kecelakaan kerja, kematian, hari tua, dan kehilangan pekerjaan</span>
                <br><br>
                <i class="bi bi-2-circle"></i><span>. Meningkatkan kesejahteraan tenaga kerja dan keluarganya melalui program jaminan sosial.</span>
                <br><br>
                <i class="bi bi-3-circle"></i><span>. Mewujudkan sistem jaminan sosial yang adil dan merata bagi seluruh pekerja, baik di sektor formal maupun informal.</span>
                <br><br>
                <i class="bi bi-4-circle"></i><span>. Menjamin kepastian perlindungan dan pelayanan bagi peserta sesuai hak dan kewajiban yang diatur dalam peraturan perundang-undangan.</span>
                <br><br>
                <i class="bi bi-5-circle"></i><span>. Mendukung stabilitas dan produktivitas tenaga kerja nasional, karena pekerja yang terlindungi cenderung bekerja lebih tenang dan produktif.</span>
                
            </div>
        </div>
    </div>

    <div class="info-container" id="informasi">
        <div class="info-title">
            <h2>Informasi Kepesertaan</h2>
        </div>
        <div class="scroll-buttons">
            <button onclick="scrollCards(-1)">←</button>
            <button onclick="scrollCards(1)">→</button>
        </div>
        <div class="scroll-container" id="scrollwrapper">
            <div class="card">
                <h3 style="color:#0077cc;"> 🧑‍💼Pekerja Penerima Upah</h3>
                <p>Setiap orang yang bekerja dengan menerima gaji, upah, atau imbalan dalam bentuk lain dari pemberi kerja. Seperti pekerja kantoran atau buruh pabrik.</p>  
                <strong>Jaminan :</strong>
                <div class="jaminan-box">
                    <span>Hari Tua</span>
                    <span>Kecelakaan Kerja</span>
                    <span>Kematian</span>
                    <span>Pensiun</span>
                    <span>Kehilangan Pekerjaan</span>
                </div>
            </div>
            <div class="card">
                <h3 style="color:#0077cc;"> 👨‍🌾 Pekerja Bukan Penerima Upah</h3>
                <p>Orang perorangan yang melakukan kegiatan usaha secara mandiri untuk memperoleh penghasilan. seperti Dokter, Pedagang, Ojek Online dan lain lain</p>  
                <strong>Jaminan :</strong>
                <div class="jaminan-box">
                    <span>Hari Tua</span>
                    <span>Kecelakaan Kerja</span>
                    <span>Kematian</span>
                </div>
            </div>

            <div class="card">
                <h3 style="color:#0077cc;"> 👷‍♂️ Pekerja Jasa Kontruksi (Jakon)</h3>
                <p>Layanan jasa konsultasi perencanaan pekerjaan konstruksi, layanan jasa pelaksanaan pekerjaan konstruksi dan layanan konsultasi pengawasan pekerjaan konstruksi</p>  
                <strong>Jaminan :</strong>
                <div class="jaminan-box">
                    <span>Kecelakaan Kerja</span>
                    <span>Kematian</span>
                </div>
            </div>

            <div class="card">
                <h3 style="color:#0077cc;"> 👨‍💻Pekerja Migran</h3>
                <p>Setiap warga negara Indonesia yang akan, sedang, atau telah melakukan pekerjaan dengan menerima upah di luar wilayah Republik Indonesia</p>  
                <strong>Jaminan :</strong>
                <div class= "jaminan-box">
                    <span>Hari Tua</span>
                    <span>Kecelakaan Kerja</span>
                    <span>Kematian</span>
                </div>
            </div>
        </div>
        <br><br>
    </div>

 <div class="modal" id="tutorial-modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style = "font-size:30px;">Tutorial Pendaftaran BPJS Ketenagakerjaan</h2>
        <ol>
            <li>Buka website BPJS atau aplikasi BPJSTKU.</li>
            <li>Pilih menu pendaftaran dan masukkan data diri.</li>
            <li>Verifikasi data melalui email atau SMS.</li>
            <li>Bayar iuran awal melalui kanal pembayaran yang tersedia.</li>
            <li>Anda sudah terdaftar sebagai peserta BPJS Ketenagakerjaan.</li>
        </ol>
    </div>
</div>

    <script>
        // Modal untuk Tutorial Pendaftaran
    const modal = document.getElementById("tutorial-modal");
    const tutorialButtons = document.querySelectorAll(".tutorial-btn");
    const closeBtn = document.querySelector(".close");

    // Buka modal saat tombol tutorial diklik
    tutorialButtons.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault(); // cegah link default
            modal.style.display = "flex";
        });
    });

    // Tutup modal saat tombol close diklik
    closeBtn.onclick = () => modal.style.display = "none";

    // Tutup modal saat klik di luar modal content
    window.onclick = (event) => {
        if (event.target == modal) modal.style.display = "none";
    };


    function scrollCards(direction) {
      const container = document.getElementById('scrollwrapper');
      const scrollAmount = 320;
      container.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
      });
    }
  </script>
</body>
</html>