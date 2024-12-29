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
                                        <a href="dataSiswa" class="active">
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
                                <a href="tentang">
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
                <p class="main-title">Data Siswa</p>
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
                    <form class="left-fitur" action="{{ route('siswa.index') }}" method="GET">
                        <input id="searchInput" type="text" style="height: 100%;" placeholder="cari..." name="cari" value="{{ request()->cari }}">
                        <button type="submit" class="drop-limit">
                            <span class="material-symbols-outlined">search</span>
                        </button>
                    </form>
                    <div class="right-fitur">
                        <button id="open">
                            <span class="material-symbols-outlined">add</span>
                            Siswa
                        </button>
                    </div>
                </div>
                <div class="main-tabel">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIS</th>
                                <th>NISN</th>
                                <th>TTL</th>
                                <th>Jenis Kelamin</th>
                                <th>No Telp</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $i => $siswa)
                                <tr>
                                    <td>{{ $siswas->firstItem() + $i }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->nis }}</td>
                                    <td>{{ $siswa->nisn }}</td>
                                    <td>{{ $siswa->tempat_lahir }}, {{ $siswa->tanggal_lahir }}</td>
                                    <td>{{ $siswa->jenis_kelamin }}</td>
                                    <td>{{ $siswa->no_telp }}</td>
                                    <td class="primary">
                                        <a href="{{ route('siswa.edit', ['siswa' => $siswa->id]) }}">
                                            <button>Details</button>
                                        </a>
                                    </td>
                                    <td class="danger">
                                        <span delete-url="{{ route('siswa.destroy', ['siswa' => $siswa->id]) }}" class="material-symbols-outlined btn-hapus" id="hapus">delete</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $siswas->links('pagination.default') }}
                </div>
            </div>
        </main>
        <!--End of main--> 
    </div>
    {{-- modal tambah --}}
    <div class="wrapper" id="wrapper">
        <div class="modal">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <h3>Tambah Data Siswa</h3>
                <table>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>:</td>
                        <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><input type="number" max="9999999999" min="0" name="nis" required></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td><input type="number" max="9999999999" min="0" name="nisn" required></td>
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
                        <td><select name="jenis_kelamin" required id="kelamin">
                                <option value="" disabled selected class="lol">--Pilih Jenis Kelamin--</option>
                                <option value="Laki-laki">L (Laki-laki)</option>
                                <option value="Perempuan">P (Perempuan)</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><select name="agama" required id="agama">
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
                        <td>Konsentrasi Keahlian</td>
                        <td>:</td>
                        <td><select name="konsentrasi_keahlian" required id="keahlian">
                                <option value="" disabled selected class="lol">--Pilih Konsentrasi Keahlian--</option>
                                <option value="TAB">Teknik Alat Berat</option>
                                <option value="TMI">Teknik Mekanik Industri</option>
                                <option value="DPIB">Desain Pemodelan dan Informasi Bangunan</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div class="modal-button">
                    <button id="close" class="close">Kembali</button>
                    <button class="tambah">Simpan</button>
                </div>
            </form>
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