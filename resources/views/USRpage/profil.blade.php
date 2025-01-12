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
                        <br><span>{{ auth()->user()->name }}</span>
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
                            <td>{{ auth()->user()->name }}</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td>{{ auth()->user()->guru->nik }}</td>
                        </tr>
                        <tr>
                            <td>NUPTK</td>
                            <td>:</td>
                            <td>{{ auth()->user()->guru->nuptk }}</td>
                        </tr>
                        <tr>
                            <td>NPY</td>
                            <td>:</td>
                            <td>{{ auth()->user()->guru->npy }}</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>{{ auth()->user()->guru->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{ auth()->user()->guru->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{ auth()->user()->guru->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>{{ auth()->user()->guru->agama }}</td>
                        </tr>
                        <tr>
                            <td>Studi Terakhir</td>
                            <td>:</td>
                            <td>{{ auth()->user()->guru->studi_terakhir }}</td>
                        </tr>
                        <tr>
                            <td>Tahun Gabung</td>
                            <td>:</td>
                            <td>{{ auth()->user()->guru->tahun_gabung }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ auth()->user()->guru->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td>{{ auth()->user()->guru->no_telp }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ auth()->user()->email }}</td>
                        </tr>
                        {{-- <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>
                                <div class="password">
                                    <input type="password" value="admin123" id="pass" readonly>
                                    <span class="material-symbols-outlined eyepass1" id="visible" onclick="myFunction()">visibility</span>
                                    <span class="material-symbols-outlined eyepass2" id="visible-off" onclick="myFunction()">visibility_off</span>
                                </div>
                            </td>
                            <script>
                                function myFunction() {
                                    var x = document.getElementById("pass");
                                    var eyeOpen = document.getElementById("visible");
                                    var eyeClose = document.getElementById("visible-off");
                                    if (x.type === "password") {
                                        x.type = "text";
                                        eyeOpen.style.display = 'none';
                                        eyeClose.style.display = 'block';
                                    } else {
                                        x.type = "password";
                                        eyeOpen.style.display = 'block';
                                        eyeClose.style.display = 'none';
                                    }
                                }
                            </script>
                        </tr> --}}
                    </table>
                </div>
                <div class="but_change">
                    <p>*Jika ada yang ingin ditanyakan lebih detail silahkan hubungi admin</p>
                    <div class="input_field button">
                        <button id="edit" class="ButtonLog">
                            Ubah Data(segera)
                        </button>
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
                            <small class="text_muted">Catatan untuk Pengguna  (segera)</small>
                        </div>
                    </div>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <small class="text_muted">Pengingat untuk Pengguna  (segera)</small>
                        </div>
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
    {{-- <script src="/scripts/darkmode.js"></script> --}}
</body>
</html>