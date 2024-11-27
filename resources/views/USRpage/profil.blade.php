<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="/styles/USRstyle/profil.css">
    <link rel="stylesheet" href="/styles/USRstyle/USRsidebar.css">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container">
        <!--SideBar-->
        <aside>
            <div class="sidebar">
                <div class="menu-head">
                    <img src="/assets/profil.jpg" alt="">
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
                                <a href="USRdashboard">
                                    <span class="material-symbols-outlined">dashboard</span>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="nilaiPelajaran">
                                    <span class="material-symbols-outlined">checkbook</span>
                                    <p>Input Nilai Pelajaran</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="material-symbols-outlined">checkbook</span>
                                    <p>Nilai Wali Kelas</p>
                                    <span class="arrow material-symbols-outlined">keyboard_arrow_down</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="spiritual">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Input Nilai Spiritual</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="kehadiran">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Input Kehadiran</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="catatan">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Input Catatan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="nilaiEkskul">
                                    <span class="material-symbols-outlined">checkbook</span>
                                    <p>Input Nilai Ekskul</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu">
                        <p class="title">Rapor</p>
                        <ul>
                            <li>
                                <a href="nilaiAkhirUSR">
                                    <span class="material-symbols-outlined">inventory</span>
                                    <p>Nilai Akhir</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu">
                        <p class="title">Account</p>
                        <ul>
                            <li>
                                <a href="profil"  class="active">
                                    <span class="material-symbols-outlined">person_outline</span>
                                    <p>User</p>
                                </a>
                            </li>
                            <li>
                                <a href="tentangUSR">
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
            <p class="main-title">Dashboard</p>
            <!--Profil-->
            <div class="users">
                <div class="column">
                    <img src="assets/profil.jpg" alt="">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>admin</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td>01234</td>
                        </tr>
                        <tr>
                            <td>NUPTK</td>
                            <td>:</td>
                            <td>01234567</td>
                        </tr>
                        <tr>
                            <td>NPY</td>
                            <td>:</td>
                            <td>0123456789</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>samarinda</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>1999-09-09</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>pria</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>islam</td>
                        </tr>
                        <tr>
                            <td>Studi Terakhir</td>
                            <td>:</td>
                            <td>S1</td>
                        </tr>
                        <tr>
                            <td>Tahun Gabung</td>
                            <td>:</td>
                            <td>2019</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>JL. Pandjaitan</td>
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
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>
                                <div class="password">
                                    <input type="password" value="admin 123" id="pass" readonly>
                                    {{-- admin123 --}}
                                    <span class="material-symbols-outlined eyepass1" id="visible">visibility</span>
                                    <span class="material-symbols-outlined eyepass2" id="visible-off">visibility_off</span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="but_change">
                    <p>*Jika ada yang ingin ditanyakan lebih detail silahkan hubungi admin</p>
                    <div class="input_field button">
                        <button id="edit" class="ButtonLog">
                            Ubah Data
                        </button>
                        {{-- <input type="button" value="Ubah Data" class="ButtonLog"> --}}
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
                <a href="tentangUSR">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal edit --}}
    <div class="wrapper2" id="wrapper2">
        <div class="modal">
            <h3>Ubah Profil</h3>
            <table>
                <tr>
                    <td>Nama Guru</td>
                    <td>:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><input type="number" max="99999999999999999" min="0"></td>
                </tr>
                <tr>
                    <td>NUPTK</td>
                    <td>:</td>
                    <td><input type="number" max="99999999999999999" min="0"></td>
                </tr>
                <tr>
                    <td>NPY</td>
                    <td>:</td>
                    <td><input type="number" max="9999999999999999999" min="0"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><select name="kelamin" id="kelamin">
                            <option value="" disabled selected class="lol">--Pilih Jenis Kelamin--</option>
                            <option value="L">L (Laki-Laki)</option>
                            <option value="P">P (Perempuan)</option>
                        </select>
                </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><select name="agama" id="agama">
                            <option value="" disabled selected class="lol">--Pilih Agama--</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Studi Terakhir</td>
                    <td>:</td>
                    <td><select name="studi" id="studi">
                            <option value="" disabled selected class="lol">--Pilih Studi Terakhir--</option>
                            <option value="S3">S3</option>
                            <option value="S2">S2</option>
                            <option value="S1">S1</option>
                            <option value="D4">D4</option>
                            <option value="D3">D3</option>
                            <option value="SMK">SMK/MAK</option>
                            <option value="SMA">SMA/MA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tahun Gabung</td>
                    <td>:</td>
                    <td><input type="number" max="9999" min="0"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>No Telp</td>
                    <td>:</td>
                    <td><input type="number" max="9999999999999" min="0" placeholder="08----------"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" placeholder="zzz@gmail.com"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text"></td>
                </tr>
            </table>
            <div class="modal-button">
                <button id="close2" class="close">Kembali</button>
                <button class="tambah">Simpan Edit</button>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
      integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
      crossorigin="anonymous"
    ></script>

    <script src="/scripts/USRscript/profil.js"></script>
    <script src="/scripts/ADMscript/ADMdashboard.js"></script>
    {{-- <script src="/scripts/darkmode.js"></script> --}}
</body>
</html>