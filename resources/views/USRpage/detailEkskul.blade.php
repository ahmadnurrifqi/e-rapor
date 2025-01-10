<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="/styles/USRstyle/biodataPage.css" rel="stylesheet">
    <link href="/styles/USRstyle/USRsidebar.css" rel="stylesheet">

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
                                <a href="">
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
                                <a class="active" href="">
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
                <p class="main-title">Input Nilai Ekstrakurikuler</p>
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
            <form action="{{ route('nilai.ekskul.update', ['ekskul' => $ekskul->id]) }}" method="POST">
                @csrf
                <div class="main-content">
                    <div class="main-fitur">
                        <div class="left-fitur">
                            <div class="drop-limit">
                                <a href="{{ route('nilai.ekskul.index') }}">Kembali</a>
                            </div>
                            <div class="drop-limit">
                                <p>{{ $ekskul->nama }}</p>
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
                                    <th>Nama Siswa</th>
                                    <th>NISN</th>
                                    <th>Predikat</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ekskulMembers as $ekskulMember)
                                    <tr>
                                        @php
                                            try {
                                                $member = $ekskulMember->siswa->rapor
                                                    ->where('tahun_ajaran_id', $tahun_ajaran_id)
                                                    ->first()
                                                    ->predikatEkskul->where('ekstrakurikular_id', $ekskul->id)
                                                    ->first();
                                            } catch (\Throwable $th) {
                                                $member = null;
                                            }
                                        @endphp
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ekskulMember->siswa->nama }}</td>
                                        <td>{{ $ekskulMember->siswa->nisn }}</td>
                                        <td><select id="predikat" name="predikat[]">
                                                <option class="lol" value="" selected>--</option>
                                                <option value="A" @selected($member && $member->predikat == 'A')>A</option>
                                                <option value="B" @selected($member && $member->predikat == 'B')>B</option>
                                                <option value="C" @selected($member && $member->predikat == 'C')>C</option>
                                                <option value="D" @selected($member && $member->predikat == 'D')>D</option>
                                                <option value="E" @selected($member && $member->predikat == 'E')>E</option>
                                                <option value="F" @selected($member && $member->predikat == 'F')>F</option>
                                            </select></td>
                                        <td>
                                            <textarea id="" name="keterangan[]" cols="30" rows="1">{{ $member ? $member->keterangan : '' }}</textarea>
                                        </td>
                                        <input name="siswaId[]" type="text" value="{{ $ekskulMember->siswa->id }}"
                                            hidden>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="slide-data">
                            <button><span class="arrow material-symbols-outlined">keyboard_arrow_left</span></button>
                            <button><span class="arrow material-symbols-outlined">keyboard_arrow_right</span></button>
                        </div>
                    </div>
                </div>
            </form>
        </main>
        <!--End of main-->
    </div>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous"></script>

    {{-- <script src="/scripts/ADMscript/ADMbiodata.js"></script> --}}
    <script src="/scripts/ADMscript/ADMmodal.js"></script>
    <script src="/scripts/ADMscript/ADMdashboard.js"></script>
    <script src="/scripts/darkmode.js"></script>
</body>

</html>
