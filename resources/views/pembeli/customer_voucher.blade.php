<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="./css/customer_voucher.css" rel="stylesheet" />
        <title>Document</title>
    </head>
    <body>
        <div class="header">
            <table class="header-box">
                <tr>
                    <td class="logo-text">DejaVu C <img src="./assets/logo.png" class="logo-nav-bar">offee </td>
                    <td class="login-button">LOGIN</td>
                    <td class="home-button">HOME</td>
                    <td class="about-button">ABOUT</td>
                    <td class="contact-button">CONTACT</td>
                    <td class="logo-chart-box">
                        <img src="./assets/shopping-cart.png" class="logo-chart">
                    </td>
                </tr>
            </table>
            <div class="nav-bar-pic-box">
                <img src="./assets/nav-bar_pic.png" class="nav-bar-pic">
            </div>
        </div>
        <div class="container">
            <div class="voucher-title">DejaVu Voucher</div>
            <hr>
            <table class="voucher-table" cellspacing="10" border="0"> @php $count = 0; // Inisialisasi variabel count untuk menghitung jumlah diskon yang ditampilkan @endphp <tr> @foreach ($diskon as $k) @if ($count % 2 == 0 && $count > 0) </tr>
                <tr>
                    <!-- Tambahkan </tr><tr> setelah setiap 2 diskon --> @endif <td>
                        <table class="content-table" border="0">
                            <tr>
                                <td class="voucher-code"><a class="voucher-code" href="{{ route('diskon.cart', ['id_diskon' => $k->id_diskon]) }}">{{ $k->kode }}</a></td>
                                <td class="voucher-amount" rowspan="3">{{ $k->discount }} %</td>
                            </tr>
                            <tr>
                                <td class="voucher-detail">{{ $k->minimum }}</td>
                            </tr>
                            <tr>
                                <td class="voucher-detail">{{ $k->maximal_disc }}</td>
                            </tr>
                        </table>
                    </td> @php $count++; // Tambahkan 1 ke count setelah setiap diskon @endphp @endforeach
                </tr>
            </table>
        </div>
        <div class="footer">
            <table class="social-media-box">
                <tr>
                    <td colspan="3" class="social-media-text">Our Social Media</td>
                </tr>
                <tr class="Social-media-logo">
                    <td>
                        <img src="./assets/logo_whatsapp.png" class="whatsapp-logo">
                    </td>
                    <td>
                        <img src="./assets/logo_instagram.png" class="instagram-logo">
                    </td>
                    <td>
                        <img src="./assets/logo_twitter.png" class="twitter-logo">
                    </td>
                </tr>
                <tr class="Social-media-text">
                    <td class="whatsapp-text">+62 82123456789</td>
                    <td class="instagram-text">@DejaVuCoffee</td>
                    <td class="twitter-text">@DejaVuCoffee</td>
                </tr>
            </table>
            <table class="copyright-box">
                <tr>
                    <td class="copyright-text">Copyright © 2023 | Rekayasa Perangkat Lunak</td>
                </tr>
            </table>
        </div>
    </body>
</html>