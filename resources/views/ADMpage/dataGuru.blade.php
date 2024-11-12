<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
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
                                <a href="#" class="active">
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
                                        <a href="dataGuru" class="active">
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
                                <a href="tentang">
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
            <div class="main-head">
                <p class="main-title">Data Guru</p>
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
                <div class="main-fitur">
                    <div class="left-fitur">
                        <input type="text" placeholder="cari..." id="">
                        <div class="drop-limit">
                            <span class="material-symbols-outlined">search</span>
                        </div>
                    </div>
                    <div class="right-fitur">
                        <button id="open">
                            <span class="material-symbols-outlined">add</span>
                            Guru
                        </button>
                    </div>
                </div>
                <div class="main-tabel">
                    <table>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>NUPTK</th>
                                <th>NPY</th>
                                <th>TTL</th>
                                <th>No Telp</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gurus as $i => $guru)
                                <tr>
                                    <td>{{ $gurus->firstItem() + $i }}</td>
                                    <td>{{ $guru->user->name }}</td>
                                    <td>{{ $guru->nik }}</td>
                                    <td>{{ $guru->nuptk }}</td>
                                    <td>{{ $guru->npy }}</td>
                                    <td>{{ $guru->tempat_lahir }}, {{ $guru->tanggal_lahir }}</td>
                                    <td>{{ $guru->no_telp }}</td>
                                    <td class="primary"><button id="edit">Details</button></td>
                                    <td class="danger">
                                        <span delete-url="{{ route('guru.destroy', ['guru' => $guru->id]) }}" class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $gurus->links('pagination.default') }}
                </div>
            </div>
        </main>
        <!--End of main--> 
        {{-- modal tambah --}}
    <div class="wrapper" id="wrapper">
        <div class="modal">
            <form action="{{ route('guru.store') }}" method="POST">
                @csrf
                <h3>Tambah Data Guru</h3>
                <table>
                    <tr>
                        <td>Nama Guru</td>
                        <td>:</td>
                        <td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><input type="number" max="99999999999999999" min="0" name="nik" required></td>
                    </tr>
                    <tr>
                        <td>NUPTK</td>
                        <td>:</td>
                        <td><input type="number" max="99999999999999999" min="0" name="nuptk" required></td>
                    </tr>
                    <tr>
                        <td>NPY</td>
                        <td>:</td>
                        <td><input type="number" max="9999999999999999999" min="0" name="npy" required></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tempat_lahir" required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tanggal_lahir" required></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><select name="jenis_kelamin" id="kelamin" required>
                                <option value="" disabled selected class="lol">--Pilih Jenis Kelamin--</option>
                                <option value="Laki-laki">L (Laki-laki)</option>
                                <option value="Perempuan">P (Perempuan)</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><select name="agama" id="agama" required>
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
                        <td><select name="studi_terakhir" id="studi" required>
                                <option value="" disabled selected class="lol">--Studi Terakhir--</option>
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
                        <td><input type="date" name="tahun_gabung" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" required></td>
                    </tr>
                    <tr>
                        <td>No Telp</td>
                        <td>:</td>
                        <td><input type="number" max="9999999999999" min="0" placeholder="08----------" name="no_telp" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" placeholder="zzz@gmail.com" name="email" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                </table>
                <div class="modal-button">
                    <button id="close" class="close">Kembali</button>
                    <button class="tambah">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    {{-- modal edit --}}
    <div class="wrapper2" id="wrapper2">
        <div class="modal">
            <h3>Info Data Guru</h3>
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
            </table>
            <div class="modal-button">
                <button id="close2" class="close">Kembali</button>
                <button class="tambah">Simpan Edit</button>
            </div>
        </div>
    </div>
    {{-- modal hapus --}}
    <div class="wrapper3" id="wrapper3">
        <div class="modal">
            <p>Apakah anda yakin ingin menghapus data ini ?</p>
            <div class="modal-button">
                <button id="close3" class="close">Kembali</button>
                <button class="hapus"><a id="href-hapus" href="#" style="color: unset;">Hapus</a></button>
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

    {{-- <script src="/scripts/ADMscript/ADMbiodata.js"></script> --}}
    <script src="/scripts/ADMscript/ADMmodal.js"></script>
    <script src="/scripts/ADMscript/ADMdashboard.js"></script>
    <script src="/scripts/darkmode.js"></script>
</body>
</html>