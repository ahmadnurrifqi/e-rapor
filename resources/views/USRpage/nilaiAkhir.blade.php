<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="/styles/nilaiAkhir.css" rel="stylesheet">
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
                                <a class="active" href="nilaiAkhirUSR">
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
                                <a href="profil">
                                    <span class="material-symbols-outlined">person_outline</span>
                                    <p>Profil</p>
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
            <div class="main-head">
                <p class="main-title">Nilai Akhir Kelas - {{ $kelas->tingkat_kelas }} {{ $kelas->nama_kelas }}</p>
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
                    <table class="scroll" id="nilaiAkhir">
                        <thead>
                            <tr>
                                <th style="width: fit-content;" rowspan="2">No</th>
                                <th class="nama2" rowspan="2">Nama</th>
                                <th rowspan="2">NIS</th>
                                <th rowspan="2">NISN</th>
                                <th rowspan="2">L/P</th>
                                <th class="nilai" colspan="{{ $kelasAjarans->count() }}">Nilai</th>
                                <th rowspan="2">Jumlah Nilai</th>
                                <th rowspan="2">Rata-Rata</th>
                                <th rowspan="2">Peringkat</th>
                            </tr>
                            <tr>
                                @foreach ($kelasAjarans as $kelasAjaran)
                                    <th>{{ $kelasAjaran->mapel->nama }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas->siswa as $i => $siswa)
                                <tr>
                                    <td style="width: fit-content;">{{ ++$i }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->nis }}</td>
                                    <td>{{ $siswa->nisn }}</td>
                                    <td>{{ $siswa->jenis_kelamin == 'Perempuan' ? 'P' : 'L' }}</td>
                                    @foreach ($kelasAjarans as $kelasAjaran)
                                        <td>
                                            {{ $siswa->rapor->where('tahun_ajaran_id', $tahunAjaran->id)->first()->mapelRapor->where('mapel_id', $kelasAjaran->mapel_id)->first()->nilaiPengetahuanC3->nilai ?? null }}
                                        </td>
                                    @endforeach
                                    <td>
                                        {{ $siswa->rapor->where('tahun_ajaran_id', $tahunAjaran->id)->first()->total_nilai }}
                                    </td>
                                    <td>
                                        {{ (int) $siswa->rapor->where('tahun_ajaran_id', $tahunAjaran->id)->first()->rata_rata }}
                                    </td>
                                    <td>
                                        {{ $siswa->rapor->where('tahun_ajaran_id', $tahunAjaran->id)->first()->peringkat }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!--End of main-->
    </div>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous"></script>

    <script src="/scripts/ADMscript/ADMdashboard.js"></script>
    {{-- <script src="/scripts/darkmode.js"></script> --}}
</body>

</html>
