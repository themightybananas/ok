<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="icon" href="./assets/img/smki.png">
    <title>SMKI</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport"/>
    <!-- CSS Files -->
    <link rel="stylesheet" href="./assets/css/container.css" />
    <link rel="stylesheet" href="./assets/css/card.css" />
    <link rel="stylesheet" href="./assets/css/data.css" />
    <link rel="stylesheet" href="./assets/css/contact.css" />
    <link rel="stylesheet" href="./assets/css/grid.css" />
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/slider.js" defer></script>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 px-3">
      <div class="container-fluid px-0">
        <a class="navbar-brand" href="../index.php">
          <img src="./assets/img/smki.png" alt="SMKI Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informasi Jurusan</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="jurusan.php">Akutansi & Keuangan Lembaga</a></li>
                <li><a class="dropdown-item" href="jurusan.php">Pemasaran</a></li>
                <li><a class="dropdown-item" href="jurusan.php">Perbankan Syari'ah</a></li>
                <li><a class="dropdown-item" href="jurusan.php">Teknik Komputer & Jaringan</a></li>
                <li><a class="dropdown-item" href="jurusan.php">Pengembangan Perangkat Lunak & Gim</a></li>
                <li><a class="dropdown-item" href="jurusan.php">Desain Komunikasi Visual</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Berita</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <li><a class="dropdown-item" href="berita.html">Prestasi</a></li>
                <li><a class="dropdown-item" href="berita.html">Kegiatan Sekolah</a></li>
                <li><a class="dropdown-item" href="berita.html">Kegiatan Organisasi</a></li>
                <li><a class="dropdown-item" href="berita.html">Ekstrakulikuler</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">Fasilitas</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                <li><a class="dropdown-item" href="sarana.html">Sarana</a></li>
                <li><a class="dropdown-item" href="fasilitas.html">Prasarana</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                <li><a class="dropdown-item" href="#">SIAKAD</a></li>
                <li><a class="dropdown-item" href="#">Penelusuran Alumni</a></li>
                <li><a class="dropdown-item" href="#">TEFA Kami</a></li>
                <li><a class="dropdown-item" href="#">Ruang Praktek Siswa</a></li>
                <li><a class="dropdown-item" href="#">Kerjasama DUDI</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown5" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pendaftaran Siswa Baru</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown5">
                <li><a class="dropdown-item" href="#">Daftar</a></li>
                <li><a class="dropdown-item" href="#">Cek Nama Kamu</a></li>
              </ul>
            </li>
          </ul>
          <div class="d-flex justify-content-end justify-content-lg-end w-100">
            <div class="d-flex align-items-center flex-column flex-lg-row">
              <a href="#" class="btn btn-outline-primary shadow-sm mb-2 mb-lg-0 me-lg-2">Buat Akun</a>
              <a href="#" class="btn btn-primary ml-2 d-block">Login</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    






    <!-- CAROUSEL -->
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active position-relative">
            <img src="./assets/img/bg3.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block text-center">
              <div class="text-left rounded p-3 bg-warning d-inline-block text-container">
                <h1 class="hero border-bottom border-danger">First slide label</h1>
                <p class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas suscipit nulla quo, expedita esse ipsam ullam magnam ab temporibus eos! Deserunt rem quisquam maxime labore! Explicabo dignissimos quis ullam. Iste.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item position-relative">
            <img src="./assets/img/bg4.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block text-center">
              <div class="text-left rounded p-3 bg-info d-inline-block text-container">
                <h1 class="hero text-white border-bottom border-warning">First slide label</h1>
                <p class="text-white-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas suscipit nulla quo, expedita esse ipsam ullam magnam ab temporibus eos! Deserunt rem quisquam maxime labore! Explicabo dignissimos quis ullam. Iste.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item position-relative">
            <img src="./assets/img/bg5.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block text-center">
              <div class="text-left rounded p-3 bg-danger d-inline-block text-container">
                <h1 class="hero text-white border-bottom">First slide label</h1>
                <p class="text-white-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas suscipit nulla quo, expedita esse ipsam ullam magnam ab temporibus eos! Deserunt rem quisquam maxime labore! Explicabo dignissimos quis ullam. Iste.</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </div>
    
  














    <!-- JURUSAN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/svg-with-js.min.css" integrity="sha512-W3ZfgmZ5g1rCPFiCbOb+tn7g7sQWOQCB1AkDqrBG1Yp3iDjY9KYFh/k1AWxrt85LX5BRazEAuv+5DV2YZwghag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <section class="team-section py-5 mt-4 mx-4">
      <div class="">
          <div class="row justify-content-center">
              <!-- Card 1 -->
              <div class="col-6 col-md-4 col-lg-2 mt-3">
                  <div class="card border-0 shadow-lg pt-5 my-4 position-relative">
                      <div class="card-body p-4">
                          <div class="member-profile position-absolute w-100 text-center">
                              <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                          </div>
                          <div class="card-text pt-1">
                              <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Jean Torres</h5>
                              <div class="mb-3 text-center">Marketing</div>
                          </div>
                      </div><!--//card-body-->
                      <div class="card-footer theme-bg-primary border-0 text-center">
                          <ul class="social-list list-inline mb-0 mx-auto">
                              <li class="list-inline-item"><a class="text-dark" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="blue" class="bi bi-facebook mr-2" viewBox="0 0 16 16">
                                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                </svg></i></a></li>
                              <li class="list-inline-item"><a class="text-dark" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="red" class="bi bi-instagram" viewBox="0 0 16 16">
                                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                </svg></i></a></li>
                          </ul><!--//social-list-->
                      </div><!--//card-footer-->
                  </div><!--//card-->
              </div><!--//col-->
    
              <!-- Card 2 -->
              <div class="col-6 col-md-4 col-lg-2 mt-3">
                  <div class="card border-0 shadow-lg pt-5 my-4 position-relative">
                      <div class="card-body p-4">
                          <div class="member-profile position-absolute w-100 text-center">
                              <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                          </div>
                          <div class="card-text pt-1">
                              <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Jean Torres</h5>
                              <div class="mb-3 text-center">Marketing</div>
                          </div>
                      </div><!--//card-body-->
                      <div class="card-footer theme-bg-primary border-0 text-center">
                        <ul class="social-list list-inline mb-0 mx-auto">
                          <li class="list-inline-item"><a class="text-dark" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="blue" class="bi bi-facebook mr-2" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg></i></a></li>
                          <li class="list-inline-item"><a class="text-dark" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="red" class="bi bi-instagram" viewBox="0 0 16 16">
                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                            </svg></i></a></li>
                      </ul><!--//social-list-->
                      </div><!--//card-footer-->
                  </div><!--//card-->
              </div><!--//col-->
    
              <!-- Card 3 -->
              <div class="col-6 col-md-4 col-lg-2 mt-3">
                  <div class="card border-0 shadow-lg pt-5 my-4 position-relative">
                      <div class="card-body p-4">
                          <div class="member-profile position-absolute w-100 text-center">
                              <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                          </div>
                          <div class="card-text pt-1">
                              <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Jean Torres</h5>
                              <div class="mb-3 text-center">Marketing</div>
                          </div>
                      </div><!--//card-body-->
                      <div class="card-footer theme-bg-primary border-0 text-center">
                        <ul class="social-list list-inline mb-0 mx-auto">
                          <li class="list-inline-item"><a class="text-dark" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="blue" class="bi bi-facebook mr-2" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg></i></a></li>
                          <li class="list-inline-item"><a class="text-dark" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="red" class="bi bi-instagram" viewBox="0 0 16 16">
                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                            </svg></i></a></li>
                      </ul><!--//social-list-->
                      </div><!--//card-footer-->
                  </div><!--//card-->
              </div><!--//col-->
    
              <!-- Card 4 -->
              <div class="col-6 col-md-4 col-lg-2 mt-3">
                  <div class="card border-0 shadow-lg pt-5 my-4 position-relative">
                      <div class="card-body p-4">
                          <div class="member-profile position-absolute w-100 text-center">
                              <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                          </div>
                          <div class="card-text pt-1">
                              <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Jean Torres</h5>
                              <div class="mb-3 text-center">Marketing</div>
                          </div>
                      </div><!--//card-body-->
                      <div class="card-footer theme-bg-primary border-0 text-center">
                        <ul class="social-list list-inline mb-0 mx-auto">
                          <li class="list-inline-item"><a class="text-dark" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="blue" class="bi bi-facebook mr-2" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg></i></a></li>
                          <li class="list-inline-item"><a class="text-dark" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="red" class="bi bi-instagram" viewBox="0 0 16 16">
                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                            </svg></i></a></li>
                      </ul><!--//social-list-->
                      </div><!--//card-footer-->
                  </div><!--//card-->
              </div><!--//col-->
    
              <!-- Card 5 -->
              <div class="col-6 col-md-4 col-lg-2 mt-3">
                  <div class="card border-0 shadow-lg pt-5 my-4 position-relative">
                      <div class="card-body p-4">
                          <div class="member-profile position-absolute w-100 text-center">
                              <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                          </div>
                          <div class="card-text pt-1">
                              <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Jean Torres</h5>
                              <div class="mb-3 text-center">Marketing</div>
                          </div>
                      </div><!--//card-body-->
                      <div class="card-footer theme-bg-primary border-0 text-center">
                        <ul class="social-list list-inline mb-0 mx-auto">
                          <li class="list-inline-item"><a class="text-dark" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="blue" class="bi bi-facebook mr-2" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg></i></a></li>
                          <li class="list-inline-item"><a class="text-dark" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="red" class="bi bi-instagram" viewBox="0 0 16 16">
                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                            </svg></i></a></li>
                      </ul><!--//social-list-->
                      </div><!--//card-footer-->
                  </div><!--//card-->
              </div><!--//col-->
    
              <!-- Card 6 -->
              <div class="col-6 col-md-4 col-lg-2 mt-3">
                  <div class="card border-0 shadow-lg pt-5 my-4 position-relative">
                      <div class="card-body p-4">
                          <div class="member-profile position-absolute w-100 text-center">
                              <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                          </div>
                          <div class="card-text pt-1">
                              <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Jean Torres</h5>
                              <div class="mb-3 text-center">Marketing</div>
                          </div>
                      </div><!--//card-body-->
                      <div class="card-footer theme-bg-primary border-0 text-center">
                        <ul class="social-list list-inline mb-0 mx-auto">
                          <li class="list-inline-item"><a class="text-dark" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="blue" class="bi bi-facebook mr-2" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg></i></a></li>
                          <li class="list-inline-item"><a class="text-dark" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="red" class="bi bi-instagram" viewBox="0 0 16 16">
                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                            </svg></i></a></li>
                      </ul><!--//social-list-->
                      </div><!--//card-footer-->
                  </div><!--//card-->
              </div><!--//col-->
          </div><!--//row-->
      </div><!--//container-->
    </section>
    
  














    <!-- PROFIL SEKOLAH -->
    <div class="container py-4 py-lg-6">
      <div class="row align-items-center">
        <div class="col-lg-7 mb-5 mb-lg-0">
          <div class="lc-block px-4">
            <!--  If you want to remove px-4 please add overflow-hidden class to the section -->
            <div class="position-relative">
              <img class="position-relative img-fluid shadow"src="./assets/img/bg4.jpg"/>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="lc-block mb-4">
            <div editable="rich">
              <h2 class="text-dark profil-sekolah mb-4 my-4">PROFIL SEKOLAH</h2>
            </div>
          </div>
          <div class="lc-block mb-5 mt-2">
            <div editable="rich">
              <p class="lead text-muted text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse a lacus est. Etiam diam metus, lobortis non augue
                at, placerat viverra risus. Cras ornare faucibus laoreet.
              </p>
            </div>
          </div>
          <div
            class="lc-block d-sm-flex align-items-center mb-4 overflow-hidden position-relative"
          >
            <div class="d-inline-flex">
              <div>
                <svg
                  width="1.5em"
                  height="1.5em"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"
                  lc-helper="svg-icon"
                  class="text-success"
                >
                  <path
                    fill-rule="evenodd"
                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"
                  ></path>
                </svg>
              </div>
              <div class="ms-3 align-self-center ml-2" editable="rich">
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
          <div class="lc-block d-sm-flex align-items-center mb-4">
            <div class="d-inline-flex">
              <div>
                <svg
                  width="1.5em"
                  height="1.5em"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"
                  lc-helper="svg-icon"
                  class="text-success"
                >
                  <path
                    fill-rule="evenodd"
                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"
                  ></path>
                </svg>
              </div>
              <div class="ms-3 align-self-center ml-2" editable="rich">
                <p>Suspendisse a lacus est</p>
              </div>
            </div>
          </div>
          <div class="lc-block d-sm-flex align-items-center mb-4">
            <div class="d-inline-flex">
              <div>
                <svg
                  width="1.5em"
                  height="1.5em"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"
                  lc-helper="svg-icon"
                  class="text-success"
                >
                  <path
                    fill-rule="evenodd"
                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"
                  ></path>
                </svg>
              </div>
              <div class="ms-3 ml-2 align-self-center" editable="rich">
                <p>Etiam diam metus, lobortis non augue at</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>











    

    <!-- DATA -->
    <div class="container-fluid custom-container mb-5 mt-5 pt-5 pb-5 pl-5 pr-5">
      <div class="row">
        <!-- Visi Misi Section -->
        <div class="col-md-4 mb-4">
          <div class="section-header d-flex align-items-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-book-half section-icon" viewBox="0 0 16 16">
              <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
            </svg>
            <h2 class="display-6 fw-bold mb-0 ml-3 profil-sekolah">Visi Misi</h2>
          </div>
          <p class="lead fw-bold mb-4">
            Mengembangkan potensi siswa untuk menjadi pribadi yang beriman,
            berilmu, dan berbudi pekerti luhur.
          </p>
          <ul class="list-unstyled custom-list">
            <li class="mb-2">
              <i class="bi bi-check-circle text-justify"></i> Mengembangkan kurikulum yang
              sesuai dengan kebutuhan siswa
            </li>
            <li class="mb-2">
              <i class="bi bi-check-circle"></i> Meningkatkan kemampuan guru
              dalam mengajar
            </li>
            <li class="mb-2">
              <i class="bi bi-check-circle"></i> Mengembangkan fasilitas sekolah
              yang memadai
            </li>
          </ul>
        </div>
        <!-- Data Sekolah Section -->
        <div class="col-md-4 mb-4">
          <div class="section-header d-flex align-items-center mb-3">
            <svg
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-graph-up-arrow section-icon" viewBox="0 0 16 16">
              <path
                fill-rule="evenodd"
                d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
            </svg>
            <h2 class="display-6 fw-bold mb-0 ml-3 profil-sekolah">Data Sekolah</h2>
          </div>
          <p class="lead fw-bold mb-5">
            Pembelajaran yang menghubungkan ratusan siswa dengan keterampilan
            penting dan pengetahuan yang dibutuhkan untuk mencapai kesuksesan.
          </p>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-6 mb-4">
              <div class="data-box text-center p-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-backpack data-icon" viewBox="0 0 16 16">
                  <path d="M4.04 7.43a4 4 0 0 1 7.92 0 .5.5 0 1 1-.99.14 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.14M4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10z"/>
                  <path d="M6 2.341V2a2 2 0 1 1 4 0v.341c2.33.824 4 3.047 4 5.659v5.5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5V8a6 6 0 0 1 4-5.659M7 2v.083a6 6 0 0 1 2 0V2a1 1 0 0 0-2 0m1 1a5 5 0 0 0-5 5v5.5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5V8a5 5 0 0 0-5-5"/>
                </svg>
                <h3 class="display-6 fw-bold mt-2 mb-0">752</h3>
                <p class="text-uppercase mb-0">Siswa</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-4">
              <div class="data-box text-center p-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-video3 data-icon" viewBox="0 0 16 16">
                  <path d="M14 9.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-6 5.7c0 .8.8.8.8.8h6.4s.8 0 .8-.8-.8-3.2-4-3.2-4 2.4-4 3.2"/>
                  <path d="M2 2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2m0-1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2"/>
                </svg>
                <h3 class="display-6 fw-bold mt-2 mb-0">50</h3>
                <p class="text-uppercase mb-0">Guru</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-4">
              <div class="data-box text-center p-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-buildings-fill data-icon" viewBox="0 0 16 16">
                  <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z"/>
                </svg>
                <h3 class="display-6 fw-bold mt-2 mb-0">25</h3>
                <p class="text-uppercase mb-0">Kelas</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Fasilitas Section -->
        <div class="col-md-4 mb-4">
          <div class="section-header d-flex align-items-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-building-fill-check section-icon" viewBox="0 0 16 16">
              <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514"/>
              <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7.256A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-3.59 1.787A.5.5 0 0 0 9 9.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .39-.187A4.5 4.5 0 0 0 8.027 12H6.5a.5.5 0 0 0-.5.5V16H3a1 1 0 0 1-1-1zm2 1.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3 0v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
            </svg>
            <h2 class="display-6 fw-bold mb-0 ml-3 profil-sekolah">Fasilitas</h2>
          </div>
          <p class="lead fw-bold mb-4">
            Informasi penting terkait kegiatan dan berita terbaru sekolah.
          </p>
          <ul class="list-unstyled custom-list">
            <li class="mb-2">
              <i class="bi bi-check-circle"></i> Pengumuman terbaru
            </li>
            <li class="mb-2">
              <i class="bi bi-check-circle"></i> Kegiatan mendatang
            </li>
            <li class="mb-2">
              <i class="bi bi-check-circle"></i> Berita sekolah
            </li>
          </ul>
        </div>
      </div>
    </div>









    



        <!-- BERITA -->
        <div class="container mt-4">
        </div>
        <div class="container rounded mt-2 pt-3">
          <div class="container mt-4">
            <div class="d-flex align-items-center">
              <h3 class="mb-2 font-weight-bold">Populer</h3>
              <div class="flex-grow-1">
                <hr class="ml-2 m-0" style="border-color: blue;">
              </div>
            </div>
          </div> 
          <header class="row">
              <div class="col-md-6 position-relative mb-3">
                <a href="isiberita.html">
                  <img src="./assets/img/bg4.jpg" alt="Large Image" class="img-fluid shadow">
                <div class="grid-gradient-overlay"></div>
                <div class="p-3 text-white grid-text-overlay">
                    <h2 class="mt-2">Project Planning Tips</h2>
                    <p class="text-white">20 Maret 2024</p>
                  </a>
                </div>
            </div>        
            <div class="col-md-6">
              <div class="row g-5 py-1">
                  <div class="col-6 col-md-6 position-relative mb-3">
                    <a href="isiberita.html">
                      <img src="./assets/img/bg4.jpg" class="img-fluid shadow">
                      <div class="grid2-gradient-overlay"></div>
                      <div class="grid2-text-overlay p-3 text-white">
                          <h5 class="mt-2">Project Planning Tips</h5>
                          <p class="text-white m-0">20 Maret 2024</p>
                        </a>
                      </div>
                  </div>
                  <div class="col-6 col-md-6 position-relative mb-3">
                    <a href="isiberita.html">
                      <img src="./assets/img/bg4.jpg" class="img-fluid shadow">
                      <div class="grid2-gradient-overlay"></div>
                      <div class="grid2-text-overlay p-3 text-white">
                          <h5 class="mt-2">Project Planning Tips</h5>
                          <p class="text-white m-0">20 Maret 2024</p>
                          </a>
                      </div>
                  </div>
                  <div class="col-6 col-md-6 position-relative">
                    <a href="isiberita.html">
                      <img src="./assets/img/bg4.jpg" class="img-fluid shadow">
                      <div class="grid2-gradient-overlay"></div>
                      <div class="grid2-text-overlay p-3 text-white">
                          <h5 class="mt-2">Project Planning Tips</h5>
                          <p class="text-white m-0">20 Maret 2024</p>
                        </a>
                      </div>
                  </div>
                  <div class="col-6 col-md-6 position-relative">
                    <a href="isiberita.html">
                      <img src="./assets/img/bg4.jpg" class="img-fluid shadow">
                      <div class="grid2-gradient-overlay"></div>
                      <div class="grid2-text-overlay p-3 text-white">
                          <h5 class="mt-2">Project Planning Tips</h5>
                          <p class="text-white m-0">20 Maret 2024</p>
                          </a>
                      </div>
                  </div>
              </div>
          </div>      
          </header>
      </div>
      <!-- BERITA2 -->
        <div class="container mt-4">
          <hr style="border-color: blue;">
          <div class="row">
            <div class="col-lg-4 mb-3">
              <a href="isiberita.html">
                <div class="position-relative"> <!-- Wrap the image in a container -->
                  <img src="./assets/img/bg4.jpg" class="img-fluid" alt="Main Image">
                  <div class="grid3-gradient-overlay"></div> <!-- Gradient overlay -->
                  <div class="grid3-text-overlay">
                    <h5>Title Placeholder</h5>
                    <p class="text-white">Subtitle Placeholder</p>
                  </a>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
              <a href="isiberita.html">
                <div class="position-relative"> <!-- Wrap the image in a container -->
                  <img src="./assets/img/bg4.jpg" class="img-fluid" alt="Main Image">
                  <div class="grid3-gradient-overlay"></div> <!-- Gradient overlay -->
                  <div class="grid3-text-overlay">
                    <h5>Title Placeholder</h5>
                    <p class="text-white">Subtitle Placeholder</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12 col-lg-4">
              <div class="d-flex mb-3">
                <a href="isiberita.html" style="text-decoration: none; color: black;">
                  <img src="./assets/img/bg4.jpg" class="img-fluid" alt="Sidebar Image 1" style="width: 180px; height: 110px;">
                  <div class="ms-2 p-2" style="background-color: rgba(11,56,109,1);">
                    <h6 class="mb-0 text-white">Title Placeholder</h6>
                    <small class="text-muted text-white-50">Subtitle Placeholder</small>
                  </a>
                  </div>
              </div>
              <div class="d-flex mb-3">
                <a href="isiberita.html" style="text-decoration: none; color: black;">
                  <img src="./assets/img/bg4.jpg" class="img-fluid" alt="Sidebar Image 1" style="width: 180px; height: 110px;">
                  <div class="ms-2 p-2" style="background-color: rgba(11,56,109,1);">
                    <h6 class="mb-0 text-white">Title Placeholder</h6>
                    <small class="text-muted text-white-50">Subtitle Placeholder</small>
                  </a>
                  </div>
              </div>
              </div>
            </div>
          </div>    
        </div>
      </div>
        <!-- ROW -->
        <div class="container mt-2">
          <div class="row g-2">
            <div class="col-6 col-lg-3 col-sm-6 mb-2 position-relative">
              <a href="isiberita.html">
              <div class="grid4-gradient-overlay"></div>
              <div class="grid4-text-overlay">
                <h4>Image 1 Title</h4>
                <p>Description for Image 1</p>
              </div>
              <img src="./assets/img/bg3.jpg" class="img-fluid" alt="Image 1">
            </div>
          </a>
            <div class="col-6 col-lg-3 col-sm-6 mb-2 position-relative">
              <a href="isiberita.html">
                <div class="grid4-gradient-overlay"></div>
                <div class="grid4-text-overlay">
                  <h4>Image 1 Title</h4>
                  <p>Description for Image 1</p>
                </div>
                <img src="./assets/img/bg3.jpg" class="img-fluid" alt="Image 1">
              </div>
            </a>
            <div class="col-6 col-lg-3 col-sm-6 mb-2 position-relative">
              <a href="isiberita.html">
                <div class="grid4-gradient-overlay"></div>
                <div class="grid4-text-overlay">
                  <h4>Image 1 Title</h4>
                  <p>Description for Image 1</p>
                </div>
                <img src="./assets/img/bg3.jpg" class="img-fluid" alt="Image 1">
              </div>
            </a>
            <div class="col-6 col-lg-3 col-sm-6 mb-2 position-relative">
              <a href="isiberita.html">
                <div class="grid4-gradient-overlay"></div>
                <div class="grid4-text-overlay">
                  <h4>Image 1 Title</h4>
                  <p>Description for Image 1</p>
                </div>
                <img src="./assets/img/bg3.jpg" class="img-fluid" alt="Image 1">
              </div>
            </a>
          </div>
        </div>          
      </div>
    </div>
  </div>









    
    
    
    
    
    
    
    









    <!-- KERJASAMA -->
    <div class="slider2-kerjasama-wrapper pb-5 pt-5 mt-3">
      <div class="d-flex align-items-center ml-5">
        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#4B77D1" class="ml-4 mb-2">
          <path d="M475-140q5 0 11.5-2.5T497-149l337-338q13-13 19.5-29.67Q860-533.33 860-550q0-17-6.5-34T834-614L654-794q-13-13-30-19.5t-34-6.5q-16.67 0-33.33 6.5Q540-807 527-794l-18 18 81 82q13 14 23 32.5t10 40.5q0 38-29.5 67T526-525q-25 0-41.5-7.5t-30.19-21.34L381-627 200-446q-5 5-7 10.53-2 5.52-2 11.84 0 12.63 8.5 21.13 8.5 8.5 21.17 8.5 6.33 0 11.83-3t9.5-7l138-138 42 42-137 137q-5 5-7 11t-2 12q0 12 9 21t21 9q6 0 11.5-2.5t9.5-6.5l138-138 42 42-137 137q-4 4-6.5 10.33-2.5 6.34-2.5 12.67 0 12 9 21t21 9q6 0 11-2t10-7l138-138 42 42-138 138q-5 5-7 11t-2 11q0 14 8 22t22 8Zm.06 60Q442-80 416-104.5t-31-60.62Q351-170 328-193t-28-57q-34-5-56.5-28.5T216-335q-37-5-61-30t-24-60q0-17 6.72-34.05Q144.45-476.1 157-489l224-224 110 110q8 8 17.33 12.5 9.34 4.5 18.67 4.5 13 0 24.5-11.5t11.5-24.65q0-5.85-3.5-13.35T548-651L405-794q-13-13-30-19.5t-34-6.5q-16.67 0-33.33 6.5-16.67 6.5-29.61 19.36L126-642q-14 14-19.5 29.5t-6.5 35q-1 19.5 7.5 38T128-506l-43 43q-20-22-32.5-53T40-579q0-30 11.5-57.5T84-685l151-151q22-22 49.79-32.5 27.8-10.5 57-10.5 29.21 0 56.71 10.5T448-836l18 18 18-18q22-22 49.79-32.5 27.8-10.5 57-10.5 29.21 0 56.71 10.5T697-836l179 179q22 22 33 50.03 11 28.04 11 57 0 28.97-11 56.47T876-444L539-107q-13 13-29.53 20t-34.41 7ZM377-626Z"/>
        </svg>
        <h2 class="text-center font-weight-bold py-4 mb-0 p-2 mb-4">Kerjasama Kita</h2>
      </div>
    <div class="logos">
      <div class="logos-slide">
          <img src="./assets/img/parter/accurate.png" alt="Logo 1" class="img-fluid">
          <img src="./assets/img/parter/agro niaga.png" alt="Logo 2" class="img-fluid">
          <img src="./assets/img/parter/alfamart.png" alt="Logo 3" class="img-fluid">
          <img src="./assets/img/parter/bsi.png" alt="Logo 4" class="img-fluid">
          <img src="./assets/img/parter/esa.png" alt="Logo 5" class="img-fluid">
          <img src="./assets/img/parter/esport indonesia.png" alt="Logo 6" class="img-fluid">
          <img src="./assets/img/parter/matahari.png" alt="Logo 7" class="img-fluid">
          <img src="./assets/img/parter/mikrotik.png" alt="Logo 8" class="img-fluid">
          <img src="./assets/img/parter/oracle.png" alt="Logo 9" class="img-fluid">
          <img src="./assets/img/parter/pegadaian.png" alt="Logo 10" class="img-fluid">
          <img src="./assets/img/parter/pn.png" alt="Logo 11" class="img-fluid">
          <img src="./assets/img/parter/r.png" alt="Logo 12" class="img-fluid">
          <img src="./assets/img/parter/ramayana.png" alt="Logo 13" class="img-fluid">
          <img src="./assets/img/parter/royal ole.png" alt="Logo 14" class="img-fluid">
          <img src="./assets/img/parter/rumah komponen.png" alt="Logo 15" class="img-fluid">
          <img src="./assets/img/parter/selecta.png" alt="Logo 16" class="img-fluid">
        </div>
      </div>
    </div>
    
    
    
    
    


    
    
  










    <!-- CONTACT -->
    <section class="contact-section text-center bg-dark">
      <div class="container text-center">
        <div class="d-flex align-items-center justify-content-center mx-auto mb-3">
          <svg xmlns="http://www.w3.org/2000/svg" height="60px" viewBox="0 -960 960 960" width="60px" fill="#F19E39" class="mr-2">
            <path d="M660-80v-86.67Q606-184 568.5-225T523-320h61q10 44 44 72t82 28h120q20.83 0 35.42 14.58Q880-190.83 880-170v90H660Zm109.96-195Q739-275 717-297.04q-22-22.05-22-53Q695-381 717.04-403q22.05-22 53-22Q801-425 823-402.96q22 22.05 22 53Q845-319 822.96-297q-22.05 22-53 22ZM390-420q0-126 87-213t213-87v60q-101 0-170.5 69.5T450-420h-60Zm120 0q0-75 52.65-127.5T690-600v60q-50 0-85 35t-35 85h-60ZM80-535v-90q0-20.83 15-35.42Q110-675 130-675h120q48 0 82-28t44-72h61q-8 54-45.5 95T300-621.67V-535H80Zm109.96-195Q159-730 137-752.04q-22-22.05-22-53Q115-836 137.04-858q22.05-22 53-22Q221-880 243-857.96q22 22.05 22 53Q265-774 242.96-752q-22.05 22-53 22Z"/>
          </svg>
          <h2 class="fw-bold py-4 mb-0 text-white font-weight-bold">
            Kontak <span class="text-warning">Kami</span>
          </h2>
        </div>
      </div>      
      <div class="container pb-5">
        <div class="row">
          <div class="col-12 col-md-8 ">
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.1672392245637!2d112.52305487358201!3d-7.877563578337723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788124a5f1eda5%3A0x5cd2d83ac55ed767!2sSMK%20ISLAM%20BATU!5e0!3m2!1sid!2sid!4v1722471841253!5m2!1sid!2sid"
                class="map-iframe rounded" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <div class="col-12 col-md-4 my-2 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-map" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/>
            </svg>
            <div class="contact-info-box bg-contact-second mb-3 mt-2">
              <h6 class="text-white">Alamat</h6>
              <p>JL. Barat Stadion Brantas RT / RW : 3 / 2 Desa Sisir Kec. Kec.
                 Batu Kab. Kota Batu Prov. Jawa Timur Kode Pos : 65314
              </p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
            </svg>
            <div class="contact-info-box bg-contact-third mb-3 mt-2">
              <h6 class="text-white">Nomer telepon</h6>
              <p>082333929265</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-envelope-at"viewBox="0 0 16 16">
              <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
              <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
            </svg>
            <div class="contact-info-box bg-contact-second mt-2">
              <h6 class="text-white">Email</h6>
              <a href="" style="color: white;"><p>smkislambatu@gmail.com</p></a>
            </div>
          </div>
        </div>
      </div>
    </section>














      <!-- FOOTER -->
      <footer class="pt-lg-5 pt-3 footer bg-light">
        <div class="container">
          <div class="row">
            <!-- Company Info -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
              <div class="text-center">
                <img src="./assets/img/smki.png" alt="School Image" class="img-fluid mt-4" style="max-width: 170px;" />
              </div>
            </div>            
            <!-- Informasi Jurusan -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
              <div class="d-flex align-items-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="blue" class="mr-2">
                  <path d="M431.52-271.52h96.96V-520h-96.96v248.48ZM480-588.7q21.8 0 36.55-14.75Q531.3-618.2 531.3-640q0-21.8-14.75-36.55Q501.8-691.3 480-691.3q-21.8 0-36.55 14.75Q428.7-661.8 428.7-640q0 21.8 14.75 36.55Q458.2-588.7 480-588.7Zm0 527.92q-87.52 0-163.91-32.96-76.38-32.96-132.88-89.47-56.51-56.5-89.47-132.88Q60.78-392.48 60.78-480t32.96-163.91q32.96-76.38 89.47-132.88 56.5-56.51 132.88-89.47 76.39-32.96 163.91-32.96t163.91 32.96q76.38 32.96 132.88 89.47 56.51 56.5 89.47 132.88 32.96 76.39 32.96 163.91t-32.96 163.91q-32.96 76.38-89.47 132.88-56.5 56.51-132.88 89.47Q567.52-60.78 480-60.78Zm0-106q131.74 0 222.48-90.74 90.74-90.74 90.74-222.48t-90.74-222.48Q611.74-793.22 480-793.22t-222.48 90.74Q166.78-611.74 166.78-480t90.74 222.48q90.74 90.74 222.48 90.74ZM480-480Z"/>
                </svg>
                <h4 class="fw-bold text-dark mb-0 border-bottom">Informasi Jurusan</h4>
              </div>
              <ul class="list-unstyled">
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Akutansi & Keuangan Lembaga</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Pemasaran</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Perbankan Syar'ah</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Teknik Komputer & Jaringan</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Pengembangan Perangkat Lunak & Gim</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Desain Komunikasi Visual</a></li>
              </ul>
            </div>
        
            <!-- Berita -->
            <div class="col-12 col-md-6 col-lg-2 mb-4">
              <div class="d-flex align-items-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" class="mr-2" width="30px" fill="red">
                  <path d="M45.52-147v-106h868.96v106H45.52Zm67-173v-346h106v346h-106Zm176.96 0v-506h106v506h-106ZM467-320v-506h106v506H467Zm313.91 0-173-303.18 93.18-53 173 303.18-93.18 53Z"/>
                </svg>
                <h4 class="fw-bold text-dark mb-0 border-bottom">Berita</h4>
              </div>
              <ul class="list-unstyled">
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Prestasi</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Kegiatan Sekolah</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Kegiatan Organisasi</a></li>
                <li><a href="#" class="nav-link p-0 mb-2" style="color: black;">Ekstrakulikuler</a></li>
              </ul>
            </div>
            <!-- Contact Info -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
              <div class="d-flex align-items-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green" class="bi bi-telephone-inbound-fill mr-2" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
                </svg>
                <h4 class="fw-bold text-dark mb-0 border-bottom">Kontak Kami</h4>
              </div>
              <p class="mb-0">JL. Barat Stadion Brantas Batu</p>
              <p class="mb-0">Kode Pos : 65314</p>
              <p>Email : <a href="" class="text-dark">smkislambatu@gmail.com</a></p>
              <p>Phone: <span class="fw-semibold">(000) 123 456 789</span></p>
            </div>
          <div class="row align-items-center g-0 py-2 mt-4">
            <div class="rounded">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
            </a>
          </div>
          </div>
        </div>
      </footer>   
  </body>
</html>
