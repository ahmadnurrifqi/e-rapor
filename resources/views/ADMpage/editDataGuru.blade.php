<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="/styles/ADMstyle/editData.css">
    <link rel="stylesheet" href="/styles/ADMstyle/biodataPage.css">
    <link rel="stylesheet" href="/styles/ADMstyle/ADMsidebar.css">

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
                                <a href="">
                                    <span class="material-symbols-outlined">dashboard</span>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="active">
                                    <span class="material-symbols-outlined">groups</span>
                                    <p>Data Pribadi</p>
                                    <span class="arrow material-symbols-outlined">keyboard_arrow_down</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Siswa</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=""  class="active">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Guru</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
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
                                        <a href="">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Tahun Ajaran</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Kelas</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Mapel</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Ekstrakurikuler</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
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
                                <a href="">
                                    <span class="material-symbols-outlined">inventory</span>
                                    <p>Nilai Akhir</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
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
                                <a href="">
                                    <span class="material-symbols-outlined">report_gmailerrorred</span>
                                    <p>Tentang Kami</p>
                                </a>
                            </li>
                            <li>
                                <a href="/logout">
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
            <div class="main-head">
                <p class="main-title">Edit Data Guru</p>
                <div class="time">
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
            </div>
            <div class="main-content">
                <div class="main-tabel">
                    <form action="{{ route('guru.update', ['guru' => $guru->id]) }}" method="POST">
                        @csrf
                        <div class="isi-main">
                            <div class="main-input">
                                <p>Nama Guru</p>
                                <input type="text" name="name" required value="{{ $guru->user->name }}">
                            </div>
                            <div class="main-input">
                                <p>NIK</p>
                                <input type="number" max="99999999999999999" min="0" name="nik" required value="{{ $guru->nik }}">
                            </div>
                            <div class="main-input">
                                <p>NUPTK</p>
                                <input type="number" max="99999999999999999" min="0" name="nuptk" required value="{{ $guru->nuptk }}">
                            </div>
                            <div class="main-input">
                                <p>NPY</p>
                                <input type="number" max="9999999999999999999" min="0" name="npy" required value="{{ $guru->npy }}">
                            </div>
                            <div class="main-input">
                                <p>Tempat Lahir</p>
                                <input type="text" name="tempat_lahir" required value="{{ $guru->tempat_lahir }}">
                            </div>
                            <div class="main-input">
                                <p>Tanggal Lahir</p>
                                <input type="date" name="tanggal_lahir" required value="{{ $guru->tanggal_lahir }}">
                            </div>
                            <div class="main-input">
                                <p>Jenis Kelamin</p>
                                <select name="jenis_kelamin" required id="kelamin">
                                    <option value="" disabled class="lol">--Pilih Jenis Kelamin--</option>
                                    <option {{ ($guru->jenis_kelamin == 'Laki-laki') ? 'selected' : '' }} value="Laki-laki">L (Laki-laki)</option>
                                    <option {{ ($guru->jenis_kelamin == 'Perempuan') ? 'selected' : '' }} value="Perempuan">P (Perempuan)</option>
                                </select>
                            </div>
                            <div class="main-input">
                                <p>Agama</p>
                                <select name="agama" required id="agama">
                                    <option value="" disabled class="lol">--Pilih Agama--</option>
                                    <option {{ ($guru->agama == 'Islam') ? 'selected' : '' }} value="Islam">Islam</option>
                                    <option {{ ($guru->agama == 'Kristen') ? 'selected' : '' }} value="Kristen">Kristen</option>
                                    <option {{ ($guru->agama == 'Katolik') ? 'selected' : '' }} value="Katolik">Katolik</option>
                                    <option {{ ($guru->agama == 'Hindu') ? 'selected' : '' }} value="Hindu">Hindu</option>
                                    <option {{ ($guru->agama == 'Budha') ? 'selected' : '' }} value="Budha">Budha</option>
                                </select>
                            </div>
                            <div class="main-input">
                                <p>Studi Terakhir</p>
                                <select name="studi_terakhir" id="studi" required>
                                    <option value="" disabled class="lol">--Studi Terakhir--</option>
                                    <option {{ ($guru->studi_terakhir == 'S3') ? 'selected' : '' }} value="S3">S3</option>
                                    <option {{ ($guru->studi_terakhir == 'S2') ? 'selected' : '' }} value="S2">S2</option>
                                    <option {{ ($guru->studi_terakhir == 'S1') ? 'selected' : '' }} value="S1">S1</option>
                                    <option {{ ($guru->studi_terakhir == 'D4') ? 'selected' : '' }} value="D4">D4</option>
                                    <option {{ ($guru->studi_terakhir == 'D3') ? 'selected' : '' }} value="D3">D3</option>
                                    <option {{ ($guru->studi_terakhir == 'SMK') ? 'selected' : '' }} value="SMK">SMK/MAK</option>
                                    <option {{ ($guru->studi_terakhir == 'SMA') ? 'selected' : '' }} value="SMA">SMA/MA</option>
                                </select>
                            </div>
                            <div class="main-input">
                                <p>Tahun Gabung</p>
                                <input type="date" name="tahun_gabung" required value="{{ $guru->tahun_gabung }}">
                            </div>
                            <div class="main-input">
                                <p>Alamat</p>
                                <textarea name="alamat" required>{{ $guru->alamat }}</textarea>
                            </div>
                            <div class="main-input">
                                <p>No Telp</p>
                                <input type="number" max="9999999999999" min="0" placeholder="08----------" name="no_telp" required value="{{ $guru->no_telp }}">
                            </div>
                            <div class="main-input">
                                <p>Email</p>
                                <input type="text" placeholder="zzz@gmail.com" name="email" required value="{{ $guru->user->email }}">
                            </div>
                            <div class="main-input">
                                <p>Password</p>
                                <input type="password" name="password">
                            </div>
                        </div>
                        <div class="submit">
                            <button><a href="{{ route('guru.index') }}">Kembali</a></button>
                            <button class="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <!--End of main--> 
    </div>

    <!-- Jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
      integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
      crossorigin="anonymous"
    ></script>

    <script src="/scripts/ADMscript/ADMmodal.js"></script>
    <script src="/scripts/ADMscript/ADMdashboard.js"></script>
    {{-- <script src="/scripts/darkmode.js"></script> --}}
</body>
</html>