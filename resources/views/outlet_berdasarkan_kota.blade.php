<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="/css/outlet_berdasarkan_kota.css" rel="stylesheet" />
        <title>Document</title>
    </head>
    <body>
        <div class="header">
            <table class="header-box">
                <tr>
                    <td class="logo-text">DejaVu C<img src="/assets/logo.png" class="logo-nav-bar">offee</td>
                    <td class="login-button">LOGIN</td>
                    <td class="home-button">HOME</td>
                    <td class="about-button">ABOUT</td>
                    <td class="contact-button">CONTACT</td>
                    <td class="logo-chart-box"><img src="/assets/shopping-cart.png" class="logo-chart"></td>
                </tr>
            </table>
            <div class="nav-bar-pic-box"><img src="/assets/nav-bar_pic.png" class="nav-bar-pic"></div>
        </div>
        <div class="container">
            <div class="city-name">{{ $kota->nama }}</div>
            <hr>
            <table class="outlet-table" cellspacing="10">
                @foreach ($outlets as $outlet)
                    <tr>
                        <td>
                            <table class="content-table">
                                <tr>
                                    <td class="outlet-name">{{ $outlet->nama }}</td>
                                    <td rowspan="3"><img src="{{ asset('assets/Store-'.$loop->iteration.'.png') }}" class="store-pic"></td>
                                </tr>
                                <tr>
                                    <td class="outlet-address">{{ $outlet->alamat }}</td>
                                </tr>
                                <tr>
                                    <td class="outlet-status">{{ $outlet->jam_buka }} - {{ $outlet->jam_tutup }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="gap"></div>
        <div class="footer">
            <table class="social-media-box">
                <tr>
                    <td colspan="3" class="social-media-text">Our Social Media</td>
                </tr>
                <tr class="Social-media-logo">
                    <td><img src="/assets/logo_whatsapp.png" class="whatsapp-logo"></td>
                    <td><img src="/assets/logo_instagram.png" class="instagram-logo"></td>
                    <td><img src="/assets/logo_twitter.png" class="twitter-logo"></td>
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