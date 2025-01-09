<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="/styles/USRstyle/biodataPage.css">
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
                                <a href="">
                                    <span class="material-symbols-outlined">dashboard</span>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="active">
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
                                        <a href="">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Input Nilai Spiritual</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Input Kehadiran</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="subicon material-symbols-outlined">radio_button_checked</span>
                                            <p>Input Catatan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">
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
                                <a href="">
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
                                <a href="">
                                    <span class="material-symbols-outlined">person_outline</span>
                                    <p>User</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
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
                <p class="main-title">Input Nilai Pelajaran</p>
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
            <form class="main-content" action="{{ route("nilai.pelajaran.update", ['kelasAjaran' => $kelasAjaran->id]) }}" method="POST">
                @csrf
                <div class="main-fitur">
                    <div class="left-fitur">
                        <div class="drop-limit">
                            <a href="{{ route('nilai.pelajaran.index') }}">Kembali</a>
                        </div>
                        <div class="drop-limit">
                            <p>KKM C3 -&nbsp;</p>
                            <p>{{ $kelasAjaran->mapel->kkm_c3 ?? 0 }}</p>
                        </div>
                        <div class="drop-limit">
                            <p>KKM C4 -&nbsp;</p>
                            <p>{{ $kelasAjaran->mapel->kkm_c4 ?? 0 }}</p>
                        </div>
                    </div>
                    <div class="right-fitur">
                        <button id="open" type="submit">
                            <span class="material-symbols-outlined">add</span>
                            Simpan Data
                        </button>
                    </div>
                </div>
                <div class="main-tabel">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Pengetahuan(C3)</th>
                                <th>Predikat(C3)</th>
                                <th>Deskripsi(C3)</th>
                                <th>Keterampilan(C4)</th>
                                <th>Predikat(C4)</th>
                                <th>Deskripsi(C4)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $i => $siswa)
                                @php
                                    try {
                                        $nilaiC3 = $siswa->rapor->first()->mapelRapor->where('mapel_id', $kelasAjaran->mapel_id)->first()->nilaiPengetahuanC3;
                                        $nilaiC4 = $siswa->rapor->first()->mapelRapor->where('mapel_id', $kelasAjaran->mapel_id)->first()->nilaiKeterampilanC4;
                                    } catch (\Throwable $th) {
                                        $nilaiC3 = null;
                                        $nilaiC4 = null;
                                    }
                                @endphp
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->nisn }}</td>
                                    <td>
                                        <input name="pengetahuanC3[]" type="text" size="5" maxlength="5" 
                                            value="{{ $nilaiC3->nilai ?? 0 }}">
                                    </td>
                                    <td><select name="predikatC3[]" id="predikat">
                                        <option value="" selected class="lol">--</option>
                                        <option value="A" @selected(($nilaiC3) && $nilaiC3->predikat == 'A')>A</option>
                                        <option value="B" @selected(($nilaiC3) && $nilaiC3->predikat == 'B')>B</option>
                                        <option value="C" @selected(($nilaiC3) && $nilaiC3->predikat == 'C')>C</option>
                                        <option value="D" @selected(($nilaiC3) && $nilaiC3->predikat == 'D')>D</option>
                                        <option value="E" @selected(($nilaiC3) && $nilaiC3->predikat == 'E')>E</option>
                                        <option value="F" @selected(($nilaiC3) && $nilaiC3->predikat == 'F')>F</option>
                                    </select></td>
                                    <td><textarea name="deskripsiC3[]" id="" cols="30" rows="1">{{ ($nilaiC3 && $nilaiC3->deskripsi) ? $nilaiC3->deskripsi : '' }}</textarea></td>
                                    <td>
                                        <input name="keterampilanC4[]" type="text" size="5" maxlength="5"
                                            value="{{ $nilaiC4->nilai ?? 0 }}">
                                    </td>
                                    <td><select name="predikatC4[]" id="predikat">
                                        <option value="" selected class="lol">--</option>
                                        <option value="A" @selected(($nilaiC4) && $nilaiC4->predikat == 'A')>A</option>
                                        <option value="B" @selected(($nilaiC4) && $nilaiC4->predikat == 'B')>B</option>
                                        <option value="C" @selected(($nilaiC4) && $nilaiC4->predikat == 'C')>C</option>
                                        <option value="D" @selected(($nilaiC4) && $nilaiC4->predikat == 'D')>D</option>
                                        <option value="E" @selected(($nilaiC4) && $nilaiC4->predikat == 'E')>E</option>
                                        <option value="F" @selected(($nilaiC4) && $nilaiC4->predikat == 'F')>F</option>
                                    </select></td>
                                    <td><textarea name="deskripsiC4[]" id="" cols="30" rows="1">{{ ($nilaiC4 && $nilaiC4->deskripsi) ? $nilaiC4->deskripsi : '' }}</textarea></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </main>
        <!--End of main--> 
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