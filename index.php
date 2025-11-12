<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Hidayah Tour & Travel</title>
  <meta name="description"
    content="Hidayah Tour & Travel — solusi perjalanan wisata, umroh, dan travel terpercaya di Indonesia.">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="ismab.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="img/logo.jpeg" width="45" class="mr-2" alt="Logo Hidayah">
        <span class="font-weight-bold text-primary">Hidayah</span>&nbsp;<span class="text-dark">Tour & Travel</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto align-items-center">
          <li class="nav-item"><a href="#layanan" class="nav-link">Layanan</a></li>
          <li class="nav-item"><a href="#paket" class="nav-link">Paket</a></li>
          <li class="nav-item"><a href="#tentang" class="nav-link">Tentang Kami</a></li>
          <li class="nav-item"><a href="#kontak" class="nav-link">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero d-flex align-items-center text-white text-center">
    <div class="container" data-aos="fade-up">
      <h1 class="display-4 font-weight-bold mb-3">Perjalanan Aman, Nyaman, & Berkesan</h1>
      <p class="lead mb-4">Nikmati pengalaman terbaik bersama <strong>Hidayah Tour & Travel</strong> — solusi perjalanan
        wisata, umroh, dan travel antar kota Anda.</p>
      <a href="#paket" class="btn btn-warning btn-lg text-white font-weight-bold hero-btn">Lihat Paket Perjalanan</a>
    </div>
  </section>

  <?php include 'config.php'; ?>

  <!-- Layanan -->
  <section id="layanan" class="py-5">
    <div class="container text-center">
      <h2 class="font-weight-bold mb-4" data-aos="fade-up">Layanan Kami</h2>
      <div class="row">
        <?php
        include 'config.php';

        $sql = "SELECT gambar, judul, deskripsi FROM layanan";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
          $delay = 100;
          while ($row = $result->fetch_assoc()) {
            $gambarPath = htmlspecialchars($row['gambar']);
            if (!file_exists($gambarPath)) {
              $gambarPath = 'img/default.jpg'; 
            }
            echo '
          <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="' . $delay . '">
            <div class="card layanan-card h-100 shadow-sm">
              <img src="' . $gambarPath . '" class="card-img-top" alt="' . htmlspecialchars($row["judul"]) . '">
              <div class="card-body">
                <h5 class="font-weight-bold">' . htmlspecialchars($row["judul"]) . '</h5>
                <p class="text-muted">' . htmlspecialchars($row["deskripsi"]) . '</p>
              </div>
            </div>
          </div>';
            $delay += 100;
          }
        } else {
          echo '<div class="col-12"><p class="text-muted">Tidak ada data layanan tersedia.</p></div>';
        }

        $conn->close();
        ?>
      </div>
    </div>
  </section>



  <!-- Paket -->
  <section id="paket" class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="font-weight-bold mb-5" data-aos="fade-up">Paket Populer</h2>
      <div class="row">
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card paket-card shadow-sm h-100">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Umroh Reguler</h5>
              <p class="card-text text-muted">8 Hari, Hotel Bintang 3, Tiket PP & Pembimbing.</p>
              <p class="font-weight-bold text-primary">Rp 27.500.000</p>
              <a href="#kontak" class="btn btn-outline-primary btn-sm btn-detail">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card paket-card shadow-sm h-100">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Wisata Bali 3H/2M</h5>
              <p class="card-text text-muted">Transport, Hotel, Tour Guide & Dokumentasi.</p>
              <p class="font-weight-bold text-primary">Rp 3.800.000</p>
              <a href="#kontak" class="btn btn-outline-primary btn-sm btn-detail">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card paket-card shadow-sm h-100">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Bus Pariwisata JB 5</h5>
              <p class="card-text text-muted">Armada nyaman, sopir berpengalaman, armada terbaru.</p>
              <p class="font-weight-bold text-primary">Rp 5.000.000/Hari</p>
              <a href="#kontak" class="btn btn-outline-primary btn-sm btn-detail">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tentang Kami -->
  <section id="tentang" class="tentang-section py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
          <img src="img/genggong.jpeg" alt="Tentang Kami" class="tentang-img shadow-sm" style="max-height:280px;">
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <h2 class="font-weight-bold mb-3">Tentang Kami</h2>
          <p class="text-muted">
            <strong>Hidayah Tour & Travel</strong> berdiri sejak tahun <strong>2025</strong> sebagai perusahaan yang
            bergerak di bidang jasa perjalanan wisata, umroh, dan transportasi pariwisata. Kami berkomitmen memberikan
            pelayanan terbaik dengan kenyamanan dan keamanan sebagai prioritas utama.
          </p>
          <canvas id="chartTentang" height="200"></canvas>
        </div>
      </div>
    </div>
  </section>

  <!-- Kontak -->
  <section id="kontak" class="py-5 text-white text-center kontak-section">
    <div class="container" data-aos="fade-up">
      <h2 class="font-weight-bold mb-3">Hubungi Kami</h2>
      <p class="mb-4">Masukkan nama dan email Anda untuk mendapatkan informasi terbaru dan penawaran spesial dari kami.
      </p>

      <form id="formKontak" class="mx-auto" style="max-width: 500px;">
        <div class="form-group text-left">
          <label for="namaPelanggan">Nama Lengkap</label>
          <input type="text" id="namaPelanggan" class="form-control" placeholder="Masukkan nama Anda" required>
        </div>
        <div class="form-group text-left">
          <label for="emailPelanggan">Alamat Email</label>
          <input type="email" id="emailPelanggan" class="form-control" placeholder="nama@email.com" required>
        </div>
        <button type="submit" class="btn btn-light btn-lg font-weight-bold mt-3">Kirim</button>
      </form>

      <div id="pesanSukses" class="mt-4" style="display:none;">
        <h5 class="font-weight-bold">✅ Terima kasih!</h5>
        <p>Kami telah menerima data Anda. Tim kami akan segera menghubungi melalui email.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <small>&copy; 2025 Hidayah Tour & Travel. All rights reserved.</small>
  </footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
  AOS.init({ duration: 1000, once: true });

  // Navbar Active Link
  const navLinks = document.querySelectorAll('.nav-link');
  window.addEventListener('scroll', () => {
    let current = '';
    document.querySelectorAll('section').forEach(section => {
      const sectionTop = section.offsetTop - 100;
      if (scrollY >= sectionTop) current = section.getAttribute('id');
    });
    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === '#' + current) link.classList.add('active');
    });
  });

  // Smooth Scroll
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
    });
  });

  // Tombol Detail menuju ke kontak
  document.querySelectorAll('.btn-detail').forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      document.querySelector('#kontak').scrollIntoView({ behavior: 'smooth' });
    });
  });

  // === CHARTJS (Realtime dari Database) ===
  const ctx = document.getElementById('chartTentang').getContext('2d');
  let chart; // simpan objek chart agar bisa di-update

  function loadChartData() {
    fetch('chart-data.php')
      .then(response => response.json())
      .then(data => {
        const labels = data.map(item => item.kategori);
        const values = data.map(item => item.jumlah);

        if (!chart) {
          // Buat chart baru pertama kali
          chart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [{
                label: 'Jumlah Pelanggan (ribu)',
                data: values,
                backgroundColor: ['#007bff', '#ffc107', '#28a745']
              }]
            },
            options: {
              responsive: true,
              plugins: { legend: { display: false } },
              animation: { duration: 500 }
            }
          });
        } else {
          // Update data chart
          chart.data.labels = labels;
          chart.data.datasets[0].data = values;
          chart.update();
        }
      })
      .catch(error => console.error('Error:', error));
  }

  // Jalankan saat halaman dibuka
  loadChartData();
  // Update otomatis tiap 5 detik
  setInterval(loadChartData, 5000);

  // === Form Kontak (kirim ke database) ===
document.getElementById('formKontak').addEventListener('submit', e => {
  e.preventDefault();

  const nama = document.getElementById('namaPelanggan').value;
  const email = document.getElementById('emailPelanggan').value;

  fetch('simpan_kontak.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `nama=${encodeURIComponent(nama)}&email=${encodeURIComponent(email)}`
  })
  .then(response => response.text())
  .then(result => {
    if (result.trim() === "success") {
      document.getElementById('formKontak').style.display = 'none';
      document.getElementById('pesanSukses').style.display = 'block';
    } else {
      alert('Terjadi kesalahan, data tidak tersimpan.');
    }
  })
  .catch(error => console.error('Error:', error));
});


  // Navbar height padding
  $(function () {
    var navH = $('.navbar').outerHeight();
    $('body').css('padding-top', navH + 'px');
  });
</script>

</body>

</html>