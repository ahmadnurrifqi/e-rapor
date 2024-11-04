<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <main class="mx-auto w-[1080px] font-tinos">
        <div class="mx-auto w-fit text-xs">
            <table class="mb-2">
                <tbody class="biodata">
                    <tr>
                        <td class="!pl-0 pr-2">Nama Sekolah</td>
                        <td>:</td>
                        <td class="w-[400px]">SMK Nusantara Mandiri Bontang</td>
                        <td>Kelas</td>
                        <td>:</td>
                        <td>XII (Duabelas)</td>
                    </tr>
                    <tr>
                        <td class="!pl-0 pr-2">Alamat</td>
                        <td>:</td>
                        <td class="w-[400px]">Jl. Banjarmasin No. 29 Kel. Gn. Telihan Kec. Bontang Barat</td>
                        <td>Semester</td>
                        <td>:</td>
                        <td>5 (Lima)/ Ganjil</td>
                    </tr>
                    <tr>
                        <td class="!pl-0 pr-2">Nama Siswa</td>
                        <td>:</td>
                        <td class="w-[400px]">YOSAFAT JESELIN BORO</td>
                        <td>Konsentrasi Keahlian</td>
                        <td>:</td>
                        <td>Teknik Mekanik Industri</td>
                    </tr>
                    <tr>
                        <td class="!pl-0 pr-2">NIS / NISN</td>
                        <td>:</td>
                        <td class="w-[400px]">0057647612 / 20210201414</td>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>2023 / 2024</td>
                    </tr>
                </tbody>
            </table>
            <h1 class="-translate-x-3.5 font-bold">CAPAIAN HASIL BELAJAR </h1>
            <ol class="alpha max-w-[950px] space-y-2">
                <li class="">
                    <span class="font-bold">
                        Sikap Spiritual
                    </span>
                    <div class="w-full border border-black p-1 pb-6">
                        <span class="font-bold">Deskripsi:</span>
                        <p>Selalu bersyukur, selalu berdoa sebelum melakukan kegiatan, toleran pada agama yang berbeda
                            dan perlu meningkatkan ketaatan beribadah serta selalu bersikap santun, peduli, percaya
                            diri, dan perlu meningkatkan sikap jujur, disiplin, dan tanggungjawab sebagai perwujudan
                            moto sekolah Modis (Moralitas, Displin, dan Kompetensi)</p>
                    </div>
                </li>
                <li class="">
                    <span class="font-bold">
                        Pengetahuan dan Keterampilan
                    </span>
                    <table class="rapor">
                        <thead class="bg-[#bfbfbf]">
                            <tr class="text-center">
                                <th rowspan="2">No</th>
                                <th rowspan="2">Mata Pelajaran</th>
                                <th colspan="4">Pengetahuan (C3)</th>
                                <th colspan="4">Pengetahuan (C4)</th>
                            </tr>
                            <tr class="text-center">
                                <th>KKM</th>
                                <th>Angka</th>
                                <th>Predikat</th>
                                <th>Deskripsi</th>
                                <th>KKM</th>
                                <th>Angka</th>
                                <th>Predikat</th>
                                <th>Deskripsi</th>
                            </tr>
                            <tr>
                                <th class="text-start" colspan="10">Muatan Nasional</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="max-w-44">Pendidikan Agama dan Budi Pekerti</td>
                                <td class="text-center">78</td>
                                <td class="text-center">82</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup mampu memahami alur cerita dari kisah - kisah yang terjadi di
                                    Alkitab
                                </td>
                                <td class="text-center">78</td>
                                <td class="text-center">80</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup terampil dalam menyampaikan sebuah kisah yang terdapat dalam
                                    Alkitab
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="max-w-44">Pendidikan Pancasila dan Kewarganegaraan</td>
                                <td class="text-center">78</td>
                                <td class="text-center">78</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup mampu dalam memahami Hakikat Perlindungan dan Penegakan Hukum
                                </td>
                                <td class="text-center">78</td>
                                <td class="text-center">78</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup terampil dalam menerapkan Hakikat Perlindungan dan Penegakan
                                    Hukum
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="max-w-44">Bahasa Indonesia</td>
                                <td class="text-center">78</td>
                                <td class="text-center">78</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup mampu memahami penyusunan laporan ilmiah sederhana dan
                                    menganalisis
                                    isi, sistematika, dan kebahasaan suatu laporan</td>
                                <td class="text-center">78</td>
                                <td class="text-center">78</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup terampil dalam menyusun laporan ilmiah sederhana</td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="max-w-44">Matematika</td>
                                <td class="text-center">78</td>
                                <td class="text-center">78</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup mampu mendeskripsikan dan menentukan peluang kejadian majemuk
                                    (Peluang, kejadian saling bebas,saling lepas, dan kejadian bersyarat dari suatu
                                    percobaan
                                    acak)</td>
                                <td class="text-center">78</td>
                                <td class="text-center">78</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup terampil mendeskripsikan dan menentukan peluang kejadian
                                    majemuk
                                    (Peluang, kejadian saling bebas,saling lepas, dan kejadian bersyarat dari suatu
                                    percobaan
                                    acak)</td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td class="max-w-44">Bahasa Inggris dan Bahasa Asing Lainnya</td>
                                <td class="text-center">78</td>
                                <td class="text-center">78</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup mampu mengnanalisis unsur kebahasaan beberapa teks khusus
                                    dalam
                                    bentuk surat lamaran kerja, dengan memberi dan meminta informasi terkait jati diri,
                                    latar
                                    belakang pedidikan / pengalaman kerja sesuai konteks penggunaannya</td>
                                <td class="text-center">78</td>
                                <td class="text-center">78</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup terampil menangkap makna unsur kebahasaan teks khusus dalam
                                    bentuk
                                    surat lamaran kerja, yang memberikan informasi antara lain jati diri, latar belakang
                                    pendidikan/pengalaman kerja</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th class="text-start" colspan="10">Muatan Peminatan Kejuruan</th>
                            </tr>
                            <tr>
                                <th class="text-start" colspan="10">C3. Konsentrasi Keahlian (KK)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="max-w-44">Teknik Mekanik Mesin Industri / KK1</td>
                                <td class="text-center">78</td>
                                <td class="text-center">84</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup mampu menerapkan prosedur pemeliharaan/ perbaikan mekanik
                                    kompresor,
                                    pompa, dan mesin penggerak (genset) motor bensin</td>
                                <td class="text-center">78</td>
                                <td class="text-center">85</td>
                                <td class="text-center">B</td>
                                <td class="max-w-60">Terampil melakukan pemeliharaan/perbaikan mekanik kompresor,
                                    pompa,
                                    dan
                                    mesin penggerak (genset) motor bensin sesuai Prosedur Operasional Standar (POS)
                                    serta
                                    melakukan pencegahan (preventif maintenance) pada mesin</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="max-w-44">Proses Produksi dan Kontruksi Mesin / KK2</td>
                                <td class="text-center">78</td>
                                <td class="text-center">80</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup mampu memahami materi tentang menerapkan pekerjaan gerinda
                                    permukaan
                                    (surface grinding)</td>
                                <td class="text-center">78</td>
                                <td class="text-center">80</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup terampil dalam melakukan pekerjaan gerinda permukaan
                                    (surface
                                    grinding)</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="max-w-44">Sistem Pneumatik dan Hidrolik / KK3</td>
                                <td class="text-center">78</td>
                                <td class="text-center">79</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup mampu dalam memahami macam-macam jenis media fluida ,konsep
                                    fluida
                                    pada sistem pneumatik dan hidrolik , fungsi komponen pneumatik dan hidrolik serta
                                    simbolnya
                                </td>
                                <td class="text-center">78</td>
                                <td class="text-center">80</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup terampil dalam menerapkan macam-macam jenis media fluida ,
                                    konsep
                                    fluida pada sistem pneumatik dan hidrolik , fungsi komponen pneumatik dan hidrolik ,
                                    fungsi
                                    komponen pneumatik dan hidrolik serta simbolnya</td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="max-w-44">Sistem Kelistrikan Mesin Industri / KK4</td>
                                <td class="text-center">78</td>
                                <td class="text-center">79</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup mampu menganalisis pekerjaan pemeliharaan pada sistem
                                    rangkaian
                                    kelistrikan mesin produksi dan jenis - jenis gangguan pada sistem rangkaian kontrol
                                    kelistrikan</td>
                                <td class="text-center">78</td>
                                <td class="text-center">78</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup terampil melaksanakan pekerjaan pemeliharaan pada sistem
                                    rangkaian
                                    kelistrikan mesin produksi dan menunjukan gangguan pada sistem rangkaian kontrol
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td class="max-w-44">Produk Kreatif dan Kewirausahaan / KK5</td>
                                <td class="text-center">78</td>
                                <td class="text-center">80</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup mampu dalam memahami prosedur ketika menggunakan leptop atau
                                    komputer</td>
                                <td class="text-center">78</td>
                                <td class="text-center">83</td>
                                <td class="text-center">C</td>
                                <td class="max-w-60">Cukup terampil dalam menerapkan prosedur ketika menggunakan laptop
                                    atau
                                    komputer</td>
                            </tr>
                        </tbody>
                    </table>
                </li>
                <li class="!mt-4">
                    <span class="font-bold">
                        Ekstra Kurikuler
                    </span>
                    <table class="ekskul w-full text-center">
                        <thead class="bg-[#bfbfbf]">
                            <tr>
                                <th class="w-7">No.</th>
                                <th class="w-[32.3%]">Kegiatan Ekstra Kurikuler</th>
                                <th class="w-[25.3%]">Predikat</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-7">1</td>
                                <td class="w-[32.3%]">-</td>
                                <td class="w-[25.3%]">-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </li>
                <li class="!mt-4">
                    <span class="font-bold">
                        Prestasi
                    </span>
                    <table class="ekskul w-full text-center">
                        <thead class="bg-[#bfbfbf]">
                            <tr>
                                <th class="w-7">No.</th>
                                <th class="w-[32.3%]">Uraian Prestasi</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-7">1</td>
                                <td class="w-[25.3%]">-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </li>
                <li class="!mt-4">
                    <span class="font-bold">
                        Peringkat
                    </span>
                    <table class="ekskul w-full text-center">
                        <thead class="bg-[#bfbfbf]">
                            <tr>
                                <th class="w-7">No.</th>
                                <th class="w-[21%]" colspan="2">Jumlah Nilai</th>
                                <th class="w-[11.3%]">Jumlah Nilai Total</th>
                                <th>Rata - rata</th>
                                <th>Peringkat</th>
                                <th>Jumlah Peserta Didik</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-7">1</td>
                                <td class="px-1 text-start">Pengetahuan (C3)</td>
                                <td class="w-[5%]">801</td>
                                <td rowspan="2">1604</td>
                                <td rowspan="2">80</td>
                                <td rowspan="2">-</td>
                                <td rowspan="2">25</td>
                            </tr>
                            <tr>
                                <td class="w-7">2</td>
                                <td class="px-1 text-start">Keterampilan (C4)</td>
                                <td class="w-[5%]">803</td>
                            </tr>
                        </tbody>
                    </table>
                </li>
                <li class="!mt-4">
                    <span class="font-bold">Ketidakhadiran</span>
                    <table class="w-[335px]">
                        <tbody>
                            <tr>
                                <td class="w-[54%] border border-black">Sakit</td>
                                <td class="w-[2%] border-y border-black">:</td>
                                <td class="w-[12%] border-y border-black text-center">10</td>
                                <td class="w-[32%] border-y border-r border-black text-start">Hari</td>
                            </tr>
                            <tr>
                                <td class="w-[54%] border border-black">Izin</td>
                                <td class="w-[2%] border-y border-black">:</td>
                                <td class="w-[12%] border-y border-black text-center">0</td>
                                <td class="w-[32%] border-y border-r border-black text-start">Hari</td>
                            </tr>
                            <tr>
                                <td class="w-[54%] border border-black">Tanpa Keterangan</td>
                                <td class="w-[2%] border-y border-black">:</td>
                                <td class="w-[12%] border-y border-black text-center">30</td>
                                <td class="w-[32%] border-y border-r border-black text-start">Hari</td>
                            </tr>
                        </tbody>
                    </table>
                </li>
                <li class="!mt-4">
                    <span class="font-bold">Catatan Wali Kelas</span>
                    <p class="w-full border border-black p-3 text-center italic font-bold">Semangat belajarnya lebih ditingkatkan
                        lagi agar dapat memperoleh prestasi yang lebih baik</p>
                </li>
            </ol>
            <section class="mt-8 flex justify-around text-center">
                <div class="flex flex-col gap-20">
                    <h4>Kepala Sekolah</h4>
                    <span>
                        <p class="underline">Ir. Bahrun Amin, S.T.IPM</p>
                        <p>NPY.19823110720080109</p>
                    </span>
                </div>
                <div class="flex flex-col gap-20">
                    <h4>Wali Kelas</h4>
                    <span>
                        <p class="underline">Aminatus Zahrah, S.Pd</p>
                        <p>NPY.198909250720170235</p>
                    </span>
                </div>
                <div class="flex flex-col gap-20">
                    <span>
                        <h4>Bontang, 22 Desember 2023</h4>
                        <p>Orang Tua/Wali</p>
                    </span>
                    <div class="w-full border-b border-black"></div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
