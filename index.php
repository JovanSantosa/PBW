<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TA-BTNG-23</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&family=Open+Sans&family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta name="theme-color" content="#FFD700" />
  </head>

  <body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navblur bg-greylight fixed-top p-0">
      <div class="container-fluid px-5">
        <i class="fa-brands fa-bity me-3 fs-1 text-white"></i>
        <a class="navbar-brand text-white fs-2" href="#"
          >Daily<span class="fw-bold text-yellow">Journal</span></a
        >
        <button
          class="navbar-toggler bg-5"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon bg-white rounded-2"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <form class="d-flex me-2" role="search">
                <input
                  class="form-control me-2 rounded-3"
                  type="search"
                  placeholder="Search Mousepad"
                  aria-label="Search"
                />
                <button class="btn btn-outline-warning fw-bold" type="submit">
                  Search
                </button>
              </form>
            </li>
            <li class="nav-item"></li>
              <a
                class="nav-link active text-white navhover poppin"
                aria-current="page"
                href="#hero"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active text-white navhover poppin"
                aria-current="page"
                href="#schedule"
                >Schedule</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active text-white navhover poppin"
                aria-current="page"
                href="#profil"
                >Profile</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active text-white navhover border border-2 rounded-1 px-3 py-2 poppin justify-content-center align-content-center d-flex"
                aria-current="page"
                href="login.php"
                ><i class="fa-solid fa-right-to-bracket"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Nav Bar -->

    <!-- Hero -->
    <div class="container-fluid pt-5 bg-dark vh-100" id="hero">
      <div class="row mt-5 justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="fw-bold fs-1 text-white poppin">
            Daily<span class="text-yellow">Journal Jika Ingin Login Klik Kanan Atas (LOGO LOGIN)</span>
          </div>
          <div class="text-white">
            "Daily<span class="text-yellow fw-bold">Journal</span> adalah
            sekumpulan cerita penulis dan <b>produk Jualannya </b>dengan
            mencatat dalam kehidupan sehari-hari
            <span class="text-blue fw-bold">Suka bermain Game</span> dengan
            kecepatan dan akurasi yang luar biasa. Dengan Otak yang
            <span class="text-blue fw-bold">Inovatif</span> dan berkualitas
            <span class="text-blue fw-bold">Tinggi.</span>"
          </div>
        </div>
      </div>

      <div class="row pt-2 pb-5 justify-content-center">
        <!-- kolom carou -->
        <div
          class="col-lg-6 col-md-9 col-10 border border-2 border-blue p-1 mt-4 rounded"
        >
          <div
            id="carouselExampleCaptions"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="3"
                aria-label="Slide 4"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="assets/img/img1.jpg"
                  class="d-block w-100"
                  alt="..."
                />
                <div
                  class="carousel-caption d-none d-md-block bg-greylight caroblur rounded-4 py-3 px-5"
                >
                  <h5>
                    <span class="fw-bolder text-yellow poppin"
                      >Superior Tracking
                    </span>
                    >
                  </h5>
                  <p class="text-white mt-3 res-text poppin">
                    VelocityPad dilengkapi dengan permukaan yang dirancang
                    khusus untuk meluncurkan mouse Anda dengan cepat dan akurat.
                    Ini memungkinkan Anda untuk melakukan gerakan cepat dan
                    presisi yang diperlukan dalam bermain game.
                  </p>
                </div>
              </div>
              <!-- <div class="carousel-item">
                <img
                  src="assets/img/img2.jpg"
                  class="d-block w-100"
                  alt="..."
                />
                <div
                  class="carousel-caption d-none d-md-block bg-greylight caroblur rounded-4 py-3 px-5"
                >
                  <h5>
                    <span class="fw-bolder text-yellow poppin"
                      >Optimal Control
                    </span>
                  </h5>
                  <p class="text-white mt-3 res-text mb-3 poppin">
                    Permukaan mousepad yang memiliki tekstur khusus memberikan
                    kontrol yang sempurna atas pergerakan mouse Anda. Ini
                    membuatnya ideal untuk game dengan tingkat presisi tinggi
                    seperti tembak-menembak atau game strategi real-time.
                  </p>
                </div>
              </div> -->
              <div class="carousel-item">
                <img
                  src="assets/img/img3.jpg"
                  class="d-block w-100"
                  alt="..."
                />
                <div
                  class="carousel-caption d-none d-md-block bg-greylight caroblur rounded-4 py-3 px-5"
                >
                  <h5>
                    <span class="fw-bolder text-yellow poppin"
                      >Durabilitas Tinggi
                    </span>
                  </h5>
                  <p class="text-white mt-3 res-text poppin">
                    Dibangun dengan bahan tahan lama, VelocityPad dirancang
                    untuk menghadapi penggunaan intensif dan bertahun-tahun
                    penggunaan. Ini akan tetap konsisten dalam kinerja, bahkan
                    dalam situasi game yang paling intens.
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="assets/img/img4.jpg"
                  class="d-block w-100"
                  alt="..."
                />
                <div
                  class="carousel-caption d-none d-md-block bg-greylight caroblur rounded-4 py-3 px-5"
                >
                  <h5>
                    <span class="fw-bolder text-yellow poppin"
                      >Desain Ergonomis
                    </span>
                  </h5>
                  <p class="text-white mt-3 res-text poppin">
                    Mousepad ini memiliki desain yang ergonomis dan ukuran yang
                    sesuai, sehingga Anda dapat menyesuaikannya dengan meja Anda
                    tanpa kesulitan. Ini memberikan fleksibilitas dalam
                    pengaturan peralatan gaming Anda.
                  </p>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Hero -->
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Article.</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM artikel ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="assets/img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <!-- Mousepad -->
    <div id="mouse" class="container pt-5">
      <div class="row justify-content-center">
        <div class="col">
          <div class="title text-center cl-12">
            <div class="pt-5 fs-2 fw-bold">
              Velocity<span class="text-yellowd">Pad</span>
            </div>
            <p class="mb-3 mt-3">
              Dengan <span class="fw-bold">VelocityPad</span>, Anda bisa
              mengalami performa gaming yang superior dan mencapai level baru
              dalam kompetisi. Kecepatan, akurasi, dan kontrol yang ditawarkan
              oleh mousepad ini akan membantu Anda meraih kemenangan dalam
              setiap pertandingan.
            </p>
            <p>
              VelocityPad adalah merek terkenal dalam industri mousepad yang
              menghadirkan produk-produk berkualitas tinggi yang dirancang untuk
              meningkatkan kinerja bermain game. Mousepad dari VelocityPad
              didesain khusus untuk mengoptimalkan kecepatan, akurasi, dan
              kenyamanan pengguna dalam game, sehingga membantu pemain mencapai
              hasil terbaik dalam kompetisi. Keunggulan mousepad ini meliputi
              permukaan yang halus untuk gerakan cepat, kontrol yang presisi,
              durabilitas tinggi, dan desain ergonomis yang nyaman. VelocityPad
              memungkinkan pemain untuk mengalami performa gaming yang superior
              dan fokus pada kemenangan.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Mousepad -->
    <!-- catalog -->
    <section id="schedule" class="py-5 mt-5 pt-5">
      <div class="container">
        <h2 class="text-center font-weight-bold mb-4">
          <b>Jadwal Kuliah & Kegiatan Owner</b>
        </h2>
        <div class="row text-center justify-content-center">
          <!-- Box untuk Senin -->
          <div class="col-md-3 col-12 mb-4">
            <div class="card">
              <div
                class="card-header text-center font-weight-bold bg-primary text-white"
              >
                Senin
              </div>
              <div class="card-body">
                <div class="mb-2">
                  <div class="card border-info">
                    <div class="card-body">
                      <p class="card-text">
                        09:00 - 10:30 <br />
                        Basis Data <br />
                        Ruang H.3.4
                      </p>
                    </div>
                  </div>
                </div>
                <div class="mb-2">
                  <div class="card border-info">
                    <div class="card-body">
                      <p class="card-text">
                        13:00 - 15:00 <br />
                        Dasar Pemrograman <br />
                        Ruang H.3.1
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Box untuk Selasa -->
          <div class="col-md-3 col-12 mb-4">
            <div class="card">
              <div
                class="card-header text-center font-weight-bold bg-success text-white"
              >
                Selasa
              </div>
              <div class="card-body">
                <div class="mb-2">
                  <div class="card border-success">
                    <div class="card-body">
                      <p class="card-text">
                        08:00 - 09:30 <br />
                        Pemrograman Berbasis Web <br />
                        Ruang D.2.J
                      </p>
                    </div>
                  </div>
                </div>
                <div class="mb-2">
                  <div class="card border-success">
                    <div class="card-body">
                      <p class="card-text">
                        14:00 - 16:00 <br />
                        Pemrograman Web <br />
                        Ruang D.3.M
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Box untuk Rabu -->
          <div class="col-md-3 col-12 mb-4">
            <div class="card">
              <div
                class="card-header text-center font-weight-bold bg-danger text-white"
              >
                Rabu
              </div>
              <div class="card-body">
                <div class="mb-2">
                  <div class="card border-danger">
                    <div class="card-body">
                      <p class="card-text">
                        10:00 - 12.00 <br />
                        Pemprograman Berbasis Obj <br />
                        Ruang D.2.A
                      </p>
                    </div>
                  </div>
                </div>
                <div class="mb-2">
                  <div class="card border-danger">
                    <div class="card-body">
                      <p class="card-text">
                        13:30 - 15:00 <br />
                        Pemprograman Sisi Server <br />
                        Ruang D.2.A
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Box untuk Kamis -->
          <div class="col-md-3 col-12 mb-4">
            <div class="card">
              <div
                class="card-header text-center font-weight-bold bg-warning text-white"
              >
                Kamis
              </div>
              <div class="card-body">
                <div class="mb-2">
                  <div class="card border-warning">
                    <div class="card-body">
                      <p class="card-text">
                        08:00 - 10:00 <br />
                        Pengantar Teknologi Informasi <br />
                        Ruang D.3.N
                      </p>
                    </div>
                  </div>
                </div>
                <div class="mb-2">
                  <div class="card border-warning">
                    <div class="card-body">
                      <p class="card-text">
                        11:00 - 13:00 <br />
                        Rapat Koordinasi DOSCOM <br />
                        Ruang Rapat G.1
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Box untuk Jumat -->
          <div class="col-md-3 col-12 mb-4">
            <div class="card">
              <div
                class="card-header text-center font-weight-bold bg-info text-white"
              >
                Jumat
              </div>
              <div class="card-body">
                <div class="mb-2">
                  <div class="card border-info">
                    <div class="card-body">
                      <p class="card-text">
                        09:00 - 11:30 <br />
                        Data Mining <br />
                        Ruang G.2.3
                      </p>
                    </div>
                  </div>
                </div>
                <div class="mb-2">
                  <div class="card border-info">
                    <div class="card-body">
                      <p class="card-text">
                        13:00 - 15:00 <br />
                        Information Ritrieval <br />
                        Ruang G.2.4
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Box untuk Rabu -->
          <div class="col-md-3 col-12 mb-4">
            <div class="card">
              <div
                class="card-header text-center font-weight-bold bg-secondary text-white"
              >
                Sabtu
              </div>
              <div class="card-body">
                <div class="mb-2">
                  <div class="card border-muted">
                    <div class="card-body">
                      <p class="card-text">
                        08:00 - 10:00 <br />
                        Bimbingan Karier <br />
                        Online
                      </p>
                    </div>
                  </div>
                </div>
                <div class="mb-2">
                  <div class="card border-muted">
                    <div class="card-body">
                      <p class="card-text">
                        10:30-12:00 <br />
                        Bimbingan Skripsi <br />
                        Online
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Box untuk Kamis -->
          <div class="col-md-3 col-12 mb-4">
            <div class="card">
              <div
                class="card-header text-center font-weight-bold bg-dark text-white"
              >
                Minggu
              </div>
              <div class="card-body">
                <div class="mb-2">
                  <div class="card border-dark">
                    <div class="card-body">
                      <p class="card-text">Tidak Ada Jadwal</p>
                      <br /><br /><br /><br /><br /><br />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Box untuk Jumat -->
        </div>
      </div>
    </section>
    <!-- catalog -->

    <!-- about us -->
    <section id="profil" class="py-5">
      <div class="container bg-light border-0 rounded">
        <!-- Keterangan Halaman -->
        <h2 class="text-center font-weight-bold mb-4">
          <b>Profil Mahasiswa (Founder)</b>
        </h2>

        <div class="row justify-content-center">
          <!-- Foto Mahasiswa -->
          <div class="col-md-4 text-center">
            <div
              class="d-flex justify-content-center align-items-center rounded-circle overflow-hidden mb-4"
              style="width: 300px; height: 300px; margin: 0 auto"
            >
              <img
                src="./assets/img/pp.jpeg"
                alt="Foto Mahasiswa"
                class="img-fluid"
              />
            </div>
          </div>

          <!-- Biodata Mahasiswa -->
          <div class="col-md-6">
            <div class="card shadow-sm p-4">
              <h4 class="font-weight-bold"><b>Biodata</b></h4>
              <!-- <ul class="list-unstyled">
                <li><strong>Nama: </strong> Jovan Santosa</li>
                <li><strong>Fakultas: </strong> Teknik Informatika</li>
                <li>
                  <strong>Universitas: </strong> Dian Nuswantoro University
                </li>
                <li><strong>Prodi: </strong> S1 Teknik Informatika</li>
                <li><strong>Email: </strong> Jovansantosa08@gnail.com</li>
                <li><strong>Alamat: </strong> Erowati Baru 4 No. 14</li>
                <li><strong>Nomor Telepon: </strong> 0878-2029-3747</li>
              </ul> -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <th>Jovan Santosa</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">NIM</th>
                    <td>:</td>
                    <td>A11.2023.14865</td>
                  </tr>
                  <tr>
                    <th scope="row">Program Studi</th>
                    <td>:</td>
                    <td>S1 Teknik Informatika</td>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td>:</td>
                    <td>Jovansantosa08@gmail.com</td>
                  </tr>
                  <tr>
                    <th scope="row">Telepon</th>
                    <td>:</td>
                    <td>0878-2029-3747</td>
                  </tr>
                  <tr>
                    <th scope="row">Alamat</th>
                    <td>:</td>
                    <td>Erowati Baru IV No. 14 RT 02 RW 08</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer
      class="text-white text-center py-3"
      style="background-color: #003161"
    >
      <div class="container">
        <p class="mb-0">Made by Jovan Santosa</p>
        <div class="social-icons">
          <a
            href="https://www.facebook.com"
            class="text-white mx-2"
            target="_blank"
          >
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://twitter.com" class="text-white mx-2" target="_blank">
            <i class="bi bi-twitter"></i>
          </a>
          <a
            href="https://www.instagram.com"
            class="text-white mx-2"
            target="_blank"
          >
            <i class="bi bi-instagram"></i>
          </a>
          <a
            href="https://www.linkedin.com"
            class="text-white mx-2"
            target="_blank"
          >
            <i class="bi bi-linkedin"></i>
          </a>
        </div>
      </div>
    </footer>
    <!-- about us -->
    <!-- Script JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Status Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Pesan status login akan dimasukkan di sini melalui JS -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional: Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      // Mengecek apakah ada status login di URL
      const urlParams = new URLSearchParams(window.location.search);
      const status = urlParams.get('status');

      if (status) {
        const modalBody = document.querySelector('.modal-body');
        const modal = new bootstrap.Modal(document.getElementById('loginModal'));

        if (status === 'success') {
          modalBody.innerHTML = '<p>Login berhasil! Selamat datang.</p>';
        } else if (status === 'failed') {
          modalBody.innerHTML = '<p>Login gagal! Username atau password salah.</p>';
        }

        // Menampilkan modal
        modal.show();
      }
    </script>
</html>
