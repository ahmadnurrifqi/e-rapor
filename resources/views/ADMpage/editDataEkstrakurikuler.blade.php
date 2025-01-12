<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="/styles/ADMstyle/editData.css" rel="stylesheet">
    <link href="/styles/ADMstyle/biodataPage.css" rel="stylesheet">
    <link href="/styles/ADMstyle/ADMsidebar.css" rel="stylesheet">

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
                                <a class="active" href="#">
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
                                        <a class="active" href="">
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
                <p class="main-title">Edit Data Ekstrakurikuler</p>
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
                <form action="{{ route('ekskul.update', ['ekskul' => $ekskul->id]) }}" method="POST">
                    @csrf
                    <div class="main-tabel">
                        <div class="isi-main">
                            <div class="main-input">
                                <p>Nama Ekstrakurikuler</p>
                                <input name="nama" type="text" value="{{ $ekskul->nama }}"
                                    placeholder="Matematika" required>
                            </div>
                            <div class="main-input">
                                <p>Pembina</p>
                                <select id="walikelas" name="guru_id" required>
                                    <option class="lol" value="" disabled selected>--Pilih Wali Kelas--
                                    </option>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}"
                                            {{ $ekskul->guru_id == $teacher->id ? 'selected' : '' }}>
                                            {{ $teacher->user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="main-input">
                                <p>Tahun Ajaran</p>
                                <select id="ajaran" name="tahun_ajaran_id">
                                    <option class="lol" value="" disabled selected>--Pilih Tahun Ajaran--
                                    </option>
                                    @foreach ($tahunAjarans as $tahunAjaran)
                                        <option value="{{ $tahunAjaran->id }}"
                                            {{ $ekskul->tahun_ajaran_id == $tahunAjaran->id ? 'selected' : '' }}>
                                            {{ $tahunAjaran->tahun }} - {{ $tahunAjaran->semester }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="submit">
                            <button><a href="{{ route('admin.ekskul.index') }}">Kembali</a></button>
                            <button class="simpan">Simpan</button>
                        </div>
                    </div>
                </form>

                <form method="GET" action="{{ route('ekskul.edit', ['ekskul' => $ekskul->id]) }}">
                    <div class="main-content">
                        <div class="main-tabel">
                            <div class="isi-main2">
                                <div class="cari">
                                    <p>>Daftar Siswa</p>
                                    <div class="right-cari">
                                        <input id="" name="listSiswa" type="text"
                                            value="{{ request()->get('listSiswa') }}" placeholder="cari...">
                                        <button class="but-cari" type="submit"><span
                                                class="material-symbols-outlined">search</span></button>
                                    </div>
                                </div>
                                <div class="cari">
                                    <p>>Tambah Siswa</p>
                                    <div class="right-cari">
                                        <input id="" name="unlistedSiswa" type="text"
                                            value="{{ request()->get('unlistedSiswa') }}" placeholder="cari...">
                                        <button class="but-cari" type="submit"><span
                                                class="material-symbols-outlined">search</span></button>
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
                                            @foreach ($ekskulMembers as $ekskulMember)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $ekskulMember->siswa->nama }}</td>
                                                    <td>{{ $ekskulMember->siswa->nis }}</td>
                                                    <td>{{ $ekskulMember->siswa->nisn }}</td>
                                                    <td class="danger">
                                                        <a
                                                            href="{{ route('ekskul.deleteSiswa', ['ekskul' => $ekskul->id, 'ekskulMember' => $ekskulMember->id]) }}">
                                                            <span class="material-symbols-outlined btn-hapus"
                                                                id="hapus">delete</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
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
                                            @foreach ($tambahSiswas as $i => $tambahSiswa)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $tambahSiswa->nama }}</td>
                                                    <td>{{ $tambahSiswa->nis }}</td>
                                                    <td>{{ $tambahSiswa->nisn }}</td>
                                                    <td class="add">
                                                        <a
                                                            href="{{ route('ekskul.addSiswa', ['ekskul' => $ekskul->id, 'siswa' => $tambahSiswa->id]) }}">
                                                            <span class="material-symbols-outlined btn-hapus"
                                                                id="hapus">add</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <!--End of main-->
    </div>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous"></script>

    <script src="/scripts/ADMscript/ADMmodal.js"></script>
    <script src="/scripts/ADMscript/ADMdashboard.js"></script>
    {{-- <script src="/scripts/darkmode.js"></script> --}}
</body>

</html>
