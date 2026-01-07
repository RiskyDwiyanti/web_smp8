<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web SMPN 8 Malang</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

    <!--Navigasi-->
    <div class="head-section">
        <nav class="navbar navbar-expand-lg py-2 fixed-top">
            <div class="container">
                <div class="col-12 col-md-12 col-lg-1">
                    <img
                      height="60"
                      width="55"
                      src="kumpulan-gambar/Logosmp8.png"
                      class="img-fluid d-flex logo"
                    />
                </div> 
                <a class="navbar-brand fw-bold text-white" href="#">SMPN 8 <br> Malang</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarnav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toogle navigation"
                    >
                        <span class="navbar-toogler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ms-0 ms-md-3">
                            <a class="nav-link text-white" aria-current="page" href="index.php?page=home">Beranda</a>
                        </li>
                        <li class="nav-item ms-0 ms-md-3 dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button" id="dropdownProfil" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownProfil">
                                <li><a class="dropdown-item nav-link" href="index.php?page=sambutan">Sambutan Kepala Sekolah</a></li>
                                <li><a class="dropdown-item" href="index.php?page=visi-misi">Visi & Misi</a></li>
                                <li><a class="dropdown-item" href="index.php?page=sejarah">Sejarah</a></li>
                                <li><a class="dropdown-item" href="index.php?page=struktur-karyawan">Struktur Karyawan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-0 ms-md-3 dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button" id="dropdownProfil" data-bs-toggle="dropdown" aria-expanded="false">
                            Berita
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownBerita">
                                <li><a class="dropdown-item" href="index.php?page=berita">Berita</a></li>
                                <li><a class="dropdown-item" href="index.php?page=adiwiyata">Adiwiyata</a></li>
                                <li><a class="dropdown-item" href="index.php?page=prestasi">Prestasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-0 ms-md-3 dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button" id="dropdownProfil" data-bs-toggle="dropdown" aria-expanded="false">
                            Sarana & Prasarana
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownSarpras">
                                <li><a class="dropdown-item" href="fasilitas.html">Fasilitas</a></li>
                                <li><a class="dropdown-item" href="index.php?page=denah">Denah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-0 ms-md-3">
                            <a class="nav-link text-white" href="index.php?page=galeri">Galeri</a>
                        </li>
                        <li class="nav-item ms-0 ms-md-3 dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button" id="dropdownProfil" data-bs-toggle="dropdown" aria-expanded="false">
                            Siswa
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownSiswa">
                                <li><a class="dropdown-item" href="index.php?page=ekstrakurikuler">Ekstrakurikuler</a></li>
                                <li><a class="dropdown-item" href="index.php?page=organisasi">Organisasi</a></li>
                                <li><a class="dropdown-item" href="index.php?page=mars">Mars</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-0 ms-md-3">
                            <a class="nav-link text-white" href="index.php?page=ppdb">PPDB</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


   <!-- KONTEN WEB -->
   <?php
        // Menentukan halaman yang aktif
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        // Menggunakan switch case untuk memuat halaman
        switch ($page) {
            case 'home':
                include 'home.php';
                break;
            case 'struktur-karyawan':
                include 'struktur-karyawan.php';
                break;
            case 'berita':
                include 'berita.php';
                break;
            case 'denah':
                include 'denah.php';
                break;
            case 'galeri':
                include 'galeri.php';
                break;
            case 'mars':
                include 'mars.php';
                break;
            case 'ppdb':
                include 'ppdb.php';
                break;
            case 'prestasi':
                include 'prestasi.php';
                break;
            case 'sambutan':
                include 'sambutan.php';
                break;
            case 'sejarah':
                include 'sejarah.php';
                break;
            case 'visi-misi':
                include 'visi-misi.php';
                break;
            case 'ekstrakurikuler':
                include 'ekstrakurikuler.php';
                break;
            case 'adiwiyata':
                include 'adiwiyata.php';
                break;
            case 'organisasi':
                include 'organisasi.php';
                break;
            default:
                echo "<p>Halaman tidak ditemukan!</p>";
                break;
        }
    ?>

    <!-- Footer -->
    <footer class="footer bg-secondary text-white">
        <div class="container">
            <div class="row ">
                <!-- About Us Section -->
                <div class="col-md-4 text-start">
                    <h5 class="about">About Us</h5>
                    <p><img src="kumpulan-gambar/Vector tiktok.png"/> @officialsmpn8mlng</p>
                    <p><img src="kumpulan-gambar/Vector  instagram.png"/> @cendekiasmpn8malang</p>
                    <p><img src="kumpulan-gambar/Group youtube.png"/> @smpn8malang</p>
                </div>

                <!-- Contact Details Section -->
                <div class="col-md-4 text-start">
                    <h5 class="contact">Contact Details</h5>
                    <p class="text-start"><img src="kumpulan-gambar/location.png"/> Jl. Arjuna No. 19, Kauman, Kec. Klojen, <br>
                               Kota Malang, Jawa Timur 65119</p>
                    <p><img src="kumpulan-gambar/Vector telephone.png"/> (0341) 325506</p>
                </div>

                <!-- Information Link Section -->
                <div class="col-md-4 text-start text-white">
                    <h5 class="information">Information Link</h5>
                    <p><a class="text-white" href="#">Beranda</a></p>
                    <p><a class="text-white" href="#">Sarana & Prasarana</a></p>
                    <p><a class="text-white" href="#">Profil</a></p> 
                    <p><a class="text-white" href="#">Galeri</a></p>
                    <p><a class="text-white" href="#">Berita</a></p>  
                    <p><a class="text-white" href="#">PPDB</a></p>
                    <p><a class="text-white" href="#">Siswa</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Font Awesome Icons (for icons) -->
    <script src="bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>