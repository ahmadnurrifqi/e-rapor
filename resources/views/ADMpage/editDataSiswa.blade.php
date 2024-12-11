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
                                <a href="">
                                    <span class="material-symbols-outlined">dashboard</span>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="active">
                                    <span class="material-symbols-outlined">groups</span>
                                    <p>Biodata</p>
                                    <span class="arrow material-symbols-outlined">keyboard_arrow_down</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="" class="active">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Data Siswa</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
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
                <p class="main-title">Edit Data Siswa</p>
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
                {{-- <div class="main-fitur">
                    <div class="left-fitur">
                        <input type="text" placeholder="cari..." id="">
                        <div class="drop-limit">
                            <span class="material-symbols-outlined">search</span>
                        </div>
                    </div>
                    <div class="right-fitur">
                        <button id="open">
                            <span class="material-symbols-outlined">add</span>
                            Siswa
                        </button>
                    </div>
                </div> --}}
                <form action="{{ route('siswa.update', ['siswa' => $siswa->id]) }}" method="POST">
                @csrf
                    <div class="main-tabel">
                        <div class="isi-main">
                            <div class="main-input">
                                <p>Nama Siswa</p>
                                <input type="text" name="nama" required value="{{ $siswa->nama }}">
                            </div>
                            <div class="main-input">
                                <p>NIS</p>
                                <input type="number" max="99999999999" min="0" name="nis" required value="{{ $siswa->nis }}">
                            </div>
                            <div class="main-input">
                                <p>NISN</p>
                                <input type="number" max="99999999999" min="0" name="nisn" required value="{{ $siswa->nisn }}">
                            </div>
                            <div class="main-input">
                                <p>Tempat Lahir</p>
                                <input type="text" name="tempat_lahir" required value="{{ $siswa->tempat_lahir }}">
                            </div>
                            <div class="main-input">
                                <p>Tanggal Lahir</p>
                                <input type="date" name="tanggal_lahir" required value="{{ $siswa->tanggal_lahir }}">
                            </div>
                            <div class="main-input">
                                <p>Jenis Kelamin</p>
                                <select name="jenis_kelamin" required id="kelamin">
                                    <option value="" disabled class="lol">--Pilih Jenis Kelamin--</option>
                                    <option {{ ($siswa->jenis_kelamin == 'Laki-laki') ? 'selected' : '' }} value="Laki-laki">L (Laki-laki)</option>
                                    <option {{ ($siswa->jenis_kelamin == 'Perempuan') ? 'selected' : '' }} value="Perempuan">P (Perempuan)</option>
                                </select>
                            </div>
                            <div class="main-input">
                                <p>Agama</p>
                                <select name="agama" required id="agama">
                                    <option value="" disabled class="lol">--Pilih Agama--</option>
                                    <option {{ ($siswa->agama == 'Islam') ? 'selected' : '' }} value="Islam">Islam</option>
                                    <option {{ ($siswa->agama == 'Kristen') ? 'selected' : '' }} value="Kristen">Kristen</option>
                                    <option {{ ($siswa->agama == 'Katolik') ? 'selected' : '' }} value="Katolik">Katolik</option>
                                    <option {{ ($siswa->agama == 'Hindu') ? 'selected' : '' }} value="Hindu">Hindu</option>
                                    <option {{ ($siswa->agama == 'Budha') ? 'selected' : '' }} value="Budha">Budha</option>
                                </select>
                            </div>
                            <div class="main-input">
                                <p>Alamat</p>
                                <Textarea name="alamat" required>{{ $siswa->alamat }}</Textarea>
                            </div>
                            <div class="main-input">
                                <p>No Telp</p>
                                <input type="number" max="9999999999999" min="0" placeholder="08----------" name="no_telp" required value="{{ $siswa->no_telp }}">
                            </div>
                            <div class="main-input">
                                <p>Konsentrasi Keahlian</p>
                                <select name="konsentrasi_keahlian" required id="keahlian">
                                    <option value="" disabled class="lol">--Pilih Konsentrasi Keahlian--</option>
                                    <option {{ ($siswa->konsentrasi_keahlian == 'TAB') ? 'selected' : '' }} value="TAB">Teknik Alat Berat</option>
                                    <option {{ ($siswa->konsentrasi_keahlian == 'TMI') ? 'selected' : '' }} value="TMI">Teknik Mekanik Industri</option>
                                    <option {{ ($siswa->konsentrasi_keahlian == 'DPIB') ? 'selected' : '' }} value="DPIB">Desain Pemodelan dan Informasi Bangunan</option>
                                </select>
                            </div>
                        </div>
                        <div class="submit">
                            <button><a href="{{ route('siswa.index') }}">Kembali</a></button>
                            <button class="simpan">Simpan</button>
                            {{-- <button><span class="arrow material-symbols-outlined">keyboard_arrow_left</span></button>
                            <button><span class="arrow material-symbols-outlined">keyboard_arrow_right</span></button> --}}
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </main>
    <!--End of main--> 
</div>

    {{-- modal hapus --}}
    <div class="wrapper3" id="wrapper3">
        <div class="modal">
            <p>Apakah anda yakin keluar dari halaman ini ?</p>
            <div class="modal-button">
                <button class="hapus"><a href="{{ route('siswa.index') }}">Keluar</a></button>
                <button id="close3" class="close">Tutup</button>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
      integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
      crossorigin="anonymous"
    ></script>

    {{-- <script src="/scripts/ADMscript/ADMbiodata.js"></script> --}}
    <script src="/scripts/ADMscript/ADMmodal.js"></script>
    <script src="/scripts/ADMscript/ADMdashboard.js"></script>
    <script src="/scripts/darkmode.js"></script>
</body>
</html>