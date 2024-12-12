<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rapor Kelas - {{ $kelas->tingkat_kelas . ' ' . $kelas->nama_kelas }}</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <style>
        *,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.rapor th,.rapor td{border-width:1px;--tw-border-opacity: 1;border-color:rgb(0 0 0 / var(--tw-border-opacity));font-size:.75rem;line-height:1rem}.rapor th{padding:.25rem}.rapor td{padding:.5rem}.biodata td{padding-left:.5rem;padding-right:.5rem;font-weight:700}.ekskul td,.ekskul th{border-width:1px;--tw-border-opacity: 1;border-color:rgb(0 0 0 / var(--tw-border-opacity));font-size:.75rem;line-height:1rem}.visible{visibility:visible}.mx-auto{margin-left:auto;margin-right:auto}.\!mt-4{margin-top:1rem!important}.mb-2{margin-bottom:.5rem}.mt-8{margin-top:2rem}.block{display:block}.flex{display:flex}.table{display:table}.hidden{display:none}.w-7{width:1.75rem}.w-\[1080px\]{width:1080px}.w-\[11\.3\%\]{width:11.3%}.w-\[12\%\]{width:12%}.w-\[2\%\]{width:2%}.w-\[21\%\]{width:21%}.w-\[25\.3\%\]{width:25.3%}.w-\[32\%\]{width:32%}.w-\[32\.3\%\]{width:32.3%}.w-\[335px\]{width:335px}.w-\[400px\]{width:400px}.w-\[5\%\]{width:5%}.w-\[54\%\]{width:54%}.w-fit{width:-moz-fit-content;width:fit-content}.w-full{width:100%}.max-w-44{max-width:11rem}.max-w-60{max-width:15rem}.max-w-\[950px\]{max-width:950px}.-translate-x-3\.5{--tw-translate-x: -.875rem;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.flex-col{flex-direction:column}.justify-around{justify-content:space-around}.gap-20{gap:5rem}.space-y-2>:not([hidden])~:not([hidden]){--tw-space-y-reverse: 0;margin-top:calc(.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(.5rem * var(--tw-space-y-reverse))}.border{border-width:1px}.border-y{border-top-width:1px;border-bottom-width:1px}.border-b{border-bottom-width:1px}.border-r{border-right-width:1px}.border-black{--tw-border-opacity: 1;border-color:rgb(0 0 0 / var(--tw-border-opacity))}.bg-\[\#bfbfbf\]{--tw-bg-opacity: 1;background-color:rgb(191 191 191 / var(--tw-bg-opacity))}.p-1{padding:.25rem}.p-3{padding:.75rem}.px-1{padding-left:.25rem;padding-right:.25rem}.\!pl-0{padding-left:0!important}.pb-6{padding-bottom:1.5rem}.pr-2{padding-right:.5rem}.text-center{text-align:center}.text-start{text-align:start}.font-tinos{font-family:Tinos,ui-serif}.text-xs{font-size:.75rem;line-height:1rem}.font-bold{font-weight:700}.italic{font-style:italic}.underline{text-decoration-line:underline}ol.alpha{counter-reset:item}ol.alpha li:before{content:counter(item,upper-alpha) ". ";counter-increment:item;font-weight:700;margin-left:-14px}
    </style>
</head>

<body>
    @foreach ($kelas->siswa as $siswa)
        <main class="mx-auto w-[1080px] font-tinos" style="margin-top: 16px;">
            <div class="mx-auto w-fit text-xs">
                <table class="mb-2">
                    <tbody class="biodata">
                        <tr>
                            <td class="!pl-0 pr-2">Nama Sekolah</td>
                            <td>:</td>
                            <td class="w-[400px]">SMK Nusantara Mandiri Bontang</td>
                            <td>Kelas</td>
                            <td>:</td>
                            <td>{{ $kelas->tingkat_kelas }}</td>
                        </tr>
                        <tr>
                            <td class="!pl-0 pr-2">Alamat</td>
                            <td>:</td>
                            <td class="w-[400px]">{{ $siswa->alamat }}</td>
                            <td>Semester</td>
                            <td>:</td>
                            <td>5 (Lima)/ Ganjil</td>
                        </tr>
                        <tr>
                            <td class="!pl-0 pr-2">Nama Siswa</td>
                            <td>:</td>
                            <td class="w-[400px]">{{ $siswa->nama }}</td>
                            <td>Konsentrasi Keahlian</td>
                            <td>:</td>
                            <td>{{ $siswa->konsentrasi_keahlian }}</td>
                        </tr>
                        <tr>
                            <td class="!pl-0 pr-2">NIS / NISN</td>
                            <td>:</td>
                            <td class="w-[400px]">{{ $siswa->nis }} / {{ $siswa->nisn }}</td>
                            <td>Tahun Ajaran</td>
                            <td>:</td>
                            <td>{{ $kelas->tahunAjaran->tahun }}</td>
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
                            <p>
                                {{ $siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->sikap_spiritual ?? '-' }}
                            </p>
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
                                @php
                                    $numberI = 1;
                                @endphp
                                @foreach ($siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->mapelRapor as $i => $mapelRapor)
                                    @if ($mapelRapor->mapel->kelompok == 'Muatan Nasional')
                                        <tr>
                                            <td class="text-center">{{ $numberI++ }}</td>
                                            <td class="max-w-44" style="width: 27%">{{ $mapelRapor->mapel->nama }}</td>
                                            <td class="text-center">{{ $mapelRapor->nilaiPengetahuanC3->kkm }}</td>
                                            <td class="text-center">{{ $mapelRapor->nilaiPengetahuanC3->nilai }}</td>
                                            <td class="text-center">{{ $mapelRapor->nilaiPengetahuanC3->predikat }}</td>
                                            <td class="max-w-60" style="width: 38%;">
                                                {{ $mapelRapor->nilaiPengetahuanC3->deskripsi }}
                                            </td>
                                            <td class="text-center">{{ $mapelRapor->nilaiKeterampilanC4->kkm }}</td>
                                            <td class="text-center">{{ $mapelRapor->nilaiKeterampilanC4->nilai }}</td>
                                            <td class="text-center">{{ $mapelRapor->nilaiKeterampilanC4->predikat }}</td>
                                            <td class="max-w-60" style="width: 35%;">
                                                {{ $mapelRapor->nilaiKeterampilanC4->deskripsi }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
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
                                @php
                                    $numberJ = 1;
                                @endphp
                                @foreach ($siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->mapelRapor as $j => $mapelRapor)
                                    @if ($mapelRapor->mapel->kelompok == 'Muatan Kejuruan')
                                        <tr>
                                            <td class="text-center">{{ $numberJ++ }}</td>
                                            <td class="max-w-44" style="width: 27%">{{ $mapelRapor->mapel->nama }}</td>
                                            <td class="text-center">{{ $mapelRapor->nilaiPengetahuanC3->kkm }}</td>
                                            <td class="text-center">{{ $mapelRapor->nilaiPengetahuanC3->nilai }}</td>
                                            <td class="text-center">{{ $mapelRapor->nilaiPengetahuanC3->predikat }}</td>
                                            <td class="max-w-60" style="width: 38%;">
                                                {{ $mapelRapor->nilaiPengetahuanC3->deskripsi }}
                                            </td>
                                            <td class="text-center">{{ $mapelRapor->nilaiKeterampilanC4->kkm }}</td>
                                            <td class="text-center">{{ $mapelRapor->nilaiKeterampilanC4->nilai }}</td>
                                            <td class="text-center">{{ $mapelRapor->nilaiKeterampilanC4->predikat }}</td>
                                            <td class="max-w-60" style="width: 35%;">
                                                {{ $mapelRapor->nilaiKeterampilanC4->deskripsi }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                {{-- <tr>
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
                                </tr> --}}
                            </tbody>
                        </table>
                    </li>
                    @pageBreak
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
                    <li class="!mt-4" style="margin-top: 16px;">
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
                                @forelse ($siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->prestasi as $i => $prestasi)
                                    <tr>
                                        <td class="w-7">{{ ++$i }}</td>
                                        <td class="w-[25.3%]">{{ $prestasi->uraian_prestasi ?? '-' }}</td>
                                        <td>{{ $prestasi->keterangan ?? '-' }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="w-7">1</td>
                                        <td class="w-[25.3%]">-</td>
                                        <td>-</td>
                                    </tr>
                                @endforelse
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
                                @php
                                    $totalNilaiC3 = $siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->mapelRapor()->join('nilai_pengetahuan_c3_s', 'mapel_rapors.nilai_pengetahuan_c3_s_id', 'nilai_pengetahuan_c3_s.id')->sum('nilai_pengetahuan_c3_s.nilai');
                                    $totalNilaiC4 = $siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->mapelRapor()->join('nilai_keterampilan_c4_s', 'mapel_rapors.nilai_keterampilan_c4_s_id', 'nilai_keterampilan_c4_s.id')->sum('nilai_keterampilan_c4_s.nilai');

                                    $totalNilaiAvg = collect([
                                        $siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->mapelRapor()->join('nilai_pengetahuan_c3_s', 'mapel_rapors.nilai_pengetahuan_c3_s_id', 'nilai_pengetahuan_c3_s.id')->avg('nilai_pengetahuan_c3_s.nilai'),
                                        $siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->mapelRapor()->join('nilai_keterampilan_c4_s', 'mapel_rapors.nilai_keterampilan_c4_s_id', 'nilai_keterampilan_c4_s.id')->avg('nilai_keterampilan_c4_s.nilai'),
                                    ])->filter()->avg();
                                @endphp
                                <tr>
                                    <td class="w-7">1</td>
                                    <td class="px-1 text-start">Pengetahuan (C3)</td>
                                    <td class="w-[5%]">{{ $totalNilaiC3 }}</td>
                                    <td rowspan="2">{{ $totalNilaiC3 + $totalNilaiC4 }}</td>
                                    <td rowspan="2">{{ (int) $totalNilaiAvg }}</td>
                                    <td rowspan="2">{{ $siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->peringkat }}</td>
                                    <td rowspan="2">{{ $kelas->siswa->count() }}</td>
                                </tr>
                                <tr>
                                    <td class="w-7">2</td>
                                    <td class="px-1 text-start">Keterampilan (C4)</td>
                                    <td class="w-[5%]">{{ $totalNilaiC4 }}</td>
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
                                    <td class="w-[12%] border-y border-black text-center">
                                        {{ $siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->sakit ?? 0 }}
                                    </td>
                                    <td class="w-[32%] border-y border-r border-black text-start">Hari</td>
                                </tr>
                                <tr>
                                    <td class="w-[54%] border border-black">Izin</td>
                                    <td class="w-[2%] border-y border-black">:</td>
                                    <td class="w-[12%] border-y border-black text-center">
                                        {{ $siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->izin ?? 0 }}
                                    </td>
                                    <td class="w-[32%] border-y border-r border-black text-start">Hari</td>
                                </tr>
                                <tr>
                                    <td class="w-[54%] border border-black">Tanpa Keterangan</td>
                                    <td class="w-[2%] border-y border-black">:</td>
                                    <td class="w-[12%] border-y border-black text-center">
                                        {{ $siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->tanpa_keterangan ?? 0 }}
                                    </td>
                                    <td class="w-[32%] border-y border-r border-black text-start">Hari</td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                    <li class="!mt-4">
                        <span class="font-bold">Catatan Wali Kelas</span>
                        <p class="w-full border border-black p-3 text-center italic font-bold">
                            {{ $siswa->rapor->where('tahun_ajaran_id', $kelas->tahunAjaran->id)->first()->catatan_wali_kelas ?? "Semangat belajarnya lebih ditingkatkan lagi agar dapat memperoleh prestasi yang lebih baik" }}
                        </p>
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
                            <p class="underline">{{ $kelas->guru->user->name }}</p>
                            <p>NPY.{{ $kelas->guru->npy }}</p>
                        </span>
                    </div>
                    <div class="flex flex-col gap-20">
                        <span>
                            <h4>{{ $kelas->tahunAjaran->tempat_pembagian }}, {{ date('d F Y', strtotime($kelas->tahunAjaran->tanggal_pembagian)) }}</h4>
                            <p>Orang Tua/Wali</p>
                        </span>
                        <div class="w-full border-b border-black"></div>
                    </div>
                </section>
            </div>
        </main>
        @pageBreak
    @endforeach
</body>

</html>
