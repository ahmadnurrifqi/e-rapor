<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon from font-awesome website -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/styles/login.css">
    <title>{{ $title }}</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-in">
            <form action="{{ route('login') }}" method="GET">
                @csrf
                <h2>Masuk E-Rapor</h2>
                <input type="text" name="email" placeholder="Nama Pengguna">
                <input type="password" name="password"  placeholder="Password">
                <input type="text" name="capthaKey" class="input_field captch_box" value="5 x 8 P" readonly>
                <input type="text" name="captha" class="input_field captch_input" placeholder="Ketik 4 Kode diatas">
                @if (session('error'))
                    <div class="message" style="display: block; color: red;">{{ session('error') }}</div>
                @endif
                <div class="input_field button" disabled>
                    <input type="submit" value="Masuk" class="ButtonLog">
                </div>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <div class="profil">
                        <img src="/assets/logo.png" alt="">
                        <div class="logo-name">
                            <h1>SMK</h1>
                            <h1>Nusantara</h1>
                        </div>
                    </div>
                    <div class="toggle-contain">
                        <h2>Selamat Datang</h2>
                        <p>di Website E-Rapor SMK Nusantara<br>Ayo Mulai Bekerja !</p>
                    </div>
                    <div class="contact">
                        <p>Butuh Bantuan ? Hubungi Kami</p>
                        <div class="social-icons">
                            <a href="#" class="icon-email"><i class="fa-solid fa-envelope"></i></a>
                            <a href="https://www.instagram.com/smknusantaramandiri?igsh=MTBsN3l4YzJieHU5cQ==" class="icon-instagram"><i class="fa-brands fa-instagram"></i></i></a>
                            <a href="#" class="icon-phone"><i class="fa-solid fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/scripts/login.js"></script>
</body>

</html>