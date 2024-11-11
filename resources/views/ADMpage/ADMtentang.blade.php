<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="/styles/ADMstyle/ADMtentang.css">
    {{-- <link rel="stylesheet" href="/styles/ADMstyle/ADMdashboard.css">
    <link rel="stylesheet" href="/styles/ADMstyle/ADMsidebar.css"> --}}
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container">
        <!--SideBar-->
        <aside>
            <div class="sidebar">
                <div class="menu-head">
                    <img src="/assets/mahasiswa.jpg" alt="">
                    <p>Welcome,
                        <br><span>Ahmad Nur Rifqi</span>
                    </p>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close</span>
                </div>
                <div class="main">
                    <div class="menu">
                        <p class="title">Main</p>
                        <ul>
                            <li>
                                <a href="ADMdashboard">
                                    <span class="material-symbols-outlined">dashboard</span>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="material-symbols-outlined">groups</span>
                                    <p>Biodata</p>
                                    <span class="arrow material-symbols-outlined">keyboard_arrow_down</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="dataSiswa">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Siswa</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dataGuru">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Guru</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dataAkun">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Akun</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="material-symbols-outlined">checkbook</span>
                                    <p>Data Pembelajaran</p>
                                    <span class="arrow material-symbols-outlined">keyboard_arrow_down</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="dataTahunAjaran">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Tahun Ajaran</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dataKelas">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Kelas</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dataMapel">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Mapel</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dataEkstrakurikuler">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Ekstrakurikuler</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dataPrestasi">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Prestasi</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu">
                        <p class="title">Rapor</p>
                        <ul>
                            <li>
                                <a href="nilaiAkhirADM">
                                    <span class="material-symbols-outlined">inventory</span>
                                    <p>Nilai Akhir</p>
                                </a>
                            </li>
                            <li>
                                <a href="cetakRapor">
                                    <span class="material-symbols-outlined">print</span>
                                    <p>Cetak Rapor</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu">
                        <p class="title">Account</p>
                        <ul>
                            <li>
                                <a href="tentang" class="active">
                                    <span class="material-symbols-outlined">report_gmailerrorred</span>
                                    <p>Tentang Kami</p>
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <span class="material-symbols-outlined">logout</span>
                                    <p>Logout</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- End of Sidebar Section -->
        
        <!-- main content -->
        <main>
            <p class="main-title">Tentang Kami</p>
            <!--Analysis-->
            <div class="users">
                <div class="column">
                    <img src="assets/logo.png" alt="">
                    <table>
                        <tr>
                            <td>Nama Sekolah</td>
                            <td>:</td>
                            <td>SMK Nusantara Mandiri Bontang</td>
                        </tr>
                        <tr>
                            <td>Kepala Sekolah</td>
                            <td>:</td>
                            <td>Ir. Bahrun Amin, S.T., IPM</td>
                        </tr>
                        <tr>
                            <td>Tempat Sekolah</td>
                            <td>:</td>
                            <td>Bontang</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Jl. Banjarmasin No. 29 Kel. Gn. Telihan Kec. Bontang Barat</td>
                        </tr>
                        <tr>
                            <td>Tahun terbentuk</td>
                            <td>:</td>
                            <td>1999-09-09</td>
                        </tr>
                        <tr>
                            <td>Jurusan Keahlian</td>
                            <td>:</td>
                            <td>1. Teknik Alat Berat</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>2. Teknik Mekanik Industri</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>3. Desain Pemodelan dan Informasi Bangunan</td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td>082404248666</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>admin01@gmail.com</td>
                        </tr>
                    </table>
                </div>
                <div class="but_change">
                    <p>*Jika data anda tidak benar atau ingin mengubahnya silahkan hubungi admin</p>
                    <div class="input_field button">
                        <input type="button" value="Ubah Data(soon)" class="ButtonLog">
                    </div>
                </div>
            </div>
              
        </main>
        <!--End of main-->

        <!--right section-->
        <div class="right-section">
            <div class="nav">
                <p>
                    <span class="material-symbols-outlined">schedule</span>
                </p>
                <p id="jam"></p>
                <p>:</p>
                <p id="menit"></p>
                <p>:</p>
                <p id="detik"></p>
                
                <script>
                    window.setTimeout("waktu()", 1000);
                 
                    function waktu() {
                        var waktu = new Date();
                        setTimeout("waktu()", 1000);
                        document.getElementById("jam").innerHTML = waktu.getHours();
                        document.getElementById("menit").innerHTML = waktu.getMinutes();
                        document.getElementById("detik").innerHTML = waktu.getSeconds();
                    }
                </script>
                {{-- <button id="menu-btn">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="dark-mode">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                </div> --}}

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <a href="#">
                    <div class="logo">
                        <img src="assets/logo.png">
                        <h3>SMK Nusantara</h3>
                        <p>Kota Bontang</p>
                    </div>
                </a>
            </div>

            <!-- Reminder -->
            <div class="reminders">
                <div class="header">
                    <h2>Catatan</h2>
                    <span class="material-symbols-outlined">format_list_bulleted</span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <small class="text_muted">Catatan untuk Pengguna  -soon-</small>
                        </div>
                        <span class="catatan-delete material-symbols-outlined">delete</span>
                    </div>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <small class="text_muted">Pengingat untuk Pengguna  -soon-</small>
                        </div>
                        <span class="catatan-delete material-symbols-outlined">delete</span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-symbols-outlined">add</span>
                        <h5>Tambah Catatan</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
      integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
      crossorigin="anonymous"
    ></script>

    <script src="/scripts/ADMscript/ADMdashboard.js"></script>
    <script src="/scripts/darkmode.js"></script>
</body>
</html>