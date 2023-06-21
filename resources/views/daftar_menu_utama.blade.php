<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
    <link href="./css/daftar_menu_utama.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <div class="header">
        <table class="header-box">
            <tr>
                <td class="logo-text">DejaVu C<img src="./assets/logo.png" class="logo-nav-bar">offee</td>
                <td class="login-button">LOGIN</td>
                <td class="home-button">HOME</td>
                <td class="about-button">ABOUT</td>
                <td class="contact-button">CONTACT</td>
                <td class="logo-chart-box"><img src="./assets/shopping-cart.png" class="logo-chart"></td>
            </tr>
        </table>
        <div class="nav-bar-pic-box"><img src="./assets/nav-bar_pic.png" class="nav-bar-pic"></div>
    </div>
    <div class="beverage_title">
        <table class="baverage-table" border="0">
            <tr>
                <td class="our_beverage">Our Beverage<hr></td>  
            </tr>
        </table>
    </div>
    <div class="content">
        <table class="content-table" border="0">
            @foreach ($category as $index => $k)
                @if ($loop->iteration % 2 == 1)
                    <tr>
                @endif
                <td><img src="{{ asset($k->gambar) }}" class="list-menu"><div class="category-text">{{ $k->nama }}</div></td>
                @if ($loop->iteration % 2 == 0 || $loop->last)
                    </tr>
                @endif
            @endforeach
        </table>
    </div>
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