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
                                <a href="#">
                                    <span class="material-symbols-outlined">groups</span>
                                    <p>Biodata</p>
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
                                <a href="#" class="active">
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
                                        <a href="" class="active">
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
                                <a href="">
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
                <p class="main-title">Edit Data Kelas</p>
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
                <form action="{{ route('kelas.update', ['kelas' => $class->id]) }}" method="POST">
                    @csrf
                    <div class="main-tabel">
                        <div class="isi-main">
                            <div class="main-input">
                                <p>Nama Kelas</p>
                                <input type="text" placeholder="Pending (null)" name="nama_kelas" required value="{{ $class->nama_kelas }}">
                            </div>
                            <div class="main-input">
                                <p>Tingkat Kelas</p>
                                <select name="tingkat_kelas" id="tingkat" required>
                                    <option value="" disabled selected class="lol">--Pilih Tingkat Kelas--</option>
                                    <option {{ ($class->tingkat_kelas == 'X (Sepuluh)') ? 'selected' : '' }} value="X (Sepuluh)">X (Sepuluh)</option>
                                    <option {{ ($class->tingkat_kelas == 'XI (Sebelas)') ? 'selected' : '' }} value="XI (Sebelas)">XI (Sebelas)</option>
                                    <option {{ ($class->tingkat_kelas == 'XII (Duabelas)') ? 'selected' : '' }} value="XII (Duabelas)">XII (Duabelas)</option>
                                </select>
                            </div>
                            <div class="main-input">
                                <p>Wali Kelas</p>
                                <select name="guru_id" id="walikelas" required>
                                    <option value="" disabled selected class="lol">--Pilih Wali Kelas--</option>
                                    @foreach ($teachers as $teacher)
                                        <option {{ ($class->guru_id == $teacher->id) ? 'selected' : '' }} value="{{ $teacher->id }}">{{ $teacher->user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="main-input">
                                <p>Tahun Ajaran</p>
                                <select name="tahun_ajaran_id" id="ajaran">
                                    <option value="" disabled selected class="lol">--Pilih Tahun Ajaran--</option>
                                    @foreach ($tahunAjarans as $tahunAjaran)
                                        <option {{ ($class->tahun_ajaran_id  == $tahunAjaran->id) ? 'selected' : '' }} value="{{ $tahunAjaran->id }}">{{ $tahunAjaran->tahun }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="submit">
                            <button><a href="{{ route('kelas.index') }}">Kembali</a></button>
                            <button class="simpan">Simpan</button>
                        </div>
                    </div>
                </form>

                <div class="main-content">
                    <div class="main-tabel">
                        <div class="isi-main2">
                            <div class="cari">
                                <p>>Daftar Siswa</p>
                                <div class="right-cari">
                                    <input type="text" placeholder="cari..." id="">
                                    <button class="but-cari"><span class="material-symbols-outlined">search</span></button>
                                </div>
                            </div>
                            <div class="cari">
                                <p>>Tambah Siswa</p>
                                <div class="right-cari">
                                    <input type="text" placeholder="cari..." id="">
                                    <button class="but-cari"><span class="material-symbols-outlined">search</span></button>
                                </div>
                            </div>
                            <div class="main-input2">
                                <table class="scroll">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>NIS</th>
                                            <th>NISN</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ahmad Nur</td>
                                            <td>123456987021</td>
                                            <td>0987654321</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ahmad Nur</td>
                                            <td>123456987021</td>
                                            <td>0987654321</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ahmad Nur</td>
                                            <td>123456987021</td>
                                            <td>0987654321</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Ahmad Nur</td>
                                            <td>123456987021</td>
                                            <td>0987654321</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Ahmad Nur</td>
                                            <td>123456987021</td>
                                            <td>0987654321</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Ahmad Nur</td>
                                            <td>123456987021</td>
                                            <td>0987654321</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Ahmad Nur</td>
                                            <td>123456987021</td>
                                            <td>0987654321</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Ahmad Nur</td>
                                            <td>123456987021</td>
                                            <td>0987654321</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="main-input2">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>NIS</th>
                                            <th>NISN</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ahmad Nur</td>
                                            <td>123456987021</td>
                                            <td>0987654321</td>
                                            <td class="add">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">add</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ahmad Nur</td>
                                            <td>123456987021</td>
                                            <td>0987654321</td>
                                            <td class="add">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">add</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ahmad Nur</td>
                                            <td>123456987021</td>
                                            <td>0987654321</td>
                                            <td class="add">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">add</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Ahmad Nur</td>
                                            <td>123456987021</td>
                                            <td>0987654321</td>
                                            <td class="add">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">add</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="main-tabel">
                        <div class="isi-main2">
                            <div class="cari">
                                <p>>Daftar Mapel</p>
                                <div class="right-cari">
                                    <input type="text" placeholder="cari..." id="">
                                    <button class="but-cari"><span class="material-symbols-outlined">search</span></button>
                                </div>
                            </div>
                            <div class="cari">
                                <p>>Tambah Mapel</p>
                                <div class="right-cari">
                                    <input type="text" placeholder="cari..." id="">
                                    <button class="but-cari"><span class="material-symbols-outlined">search</span></button>
                                </div>
                            </div>
                            <div class="main-input2">
                                <table class="scroll">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mapel</th>
                                            <th>Tahun Ajaran</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Matematika</td>
                                            <td>2024/2025</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bahasa Indonesia</td>
                                            <td>2024/2025</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Agama</td>
                                            <td>2024/2025</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>KK1</td>
                                            <td>2024/2025</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>KK2</td>
                                            <td>2024/2025</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>KK3</td>
                                            <td>2024/2025</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>KK4</td>
                                            <td>2024/2025</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>KK5</td>
                                            <td>2024/2025</td>
                                            <td class="danger">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                            </td>
                                    </tbody>
                                </table>
                            </div>
                            <div class="main-input2">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mapel</th>
                                            <th>Tahun Ajaran</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>KK1</td>
                                            <td>2024/2025</td>
                                            <td class="add">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">add</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>KK2</td>
                                            <td>2024/2025</td>
                                            <td class="add">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">add</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>KK3</td>
                                            <td>2024/2025</td>
                                            <td class="add">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">add</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>KK4</td>
                                            <td>2024/2025</td>
                                            <td class="add">
                                                <span class="material-symbols-outlined btn-hapus" id="hapus">add</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
    <script src="/scripts/darkmode.js"></script>
</body>
</html>