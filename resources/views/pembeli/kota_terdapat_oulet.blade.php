<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="./css/kota_terdapat_outlet.css" rel="stylesheet" />
        <title>Document</title>
    </head>
    <body>
        <div class="header">
            <table class="header-box">
                <tr>
                    <td class="logo-text">DejaVu C<img src="./assets/logo.png" class="logo-nav-bar">offee</td>
                    <td class = "login-button">
                        <form  action="{{ route('Logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="nav-link text-body font-weight-bold px-0 py-0" style="border: none; background: none;">
                                <i class="fa fa-sign-out-alt ms-sm-1"></i>    
                                <a class="login-text">LOGOUT</a>
                            </button>
                        </form>
                    </td>
                    <td class="home-button"><a href="/" class="login-text">HOME</a></td>
                    <td class="about-button"><a href="#" class="login-text">ABOUT</a></td>
                    <td class="contact-button"><a href="#" class="login-text">CONTACT</a></td>
                    <td class="logo-chart-box"><a href="/Cart" class="login-text"><img src="./assets/shopping-cart.png" class="logo-chart"></a></td>
                </tr>
            </table>
            <div class="nav-bar-pic-box"><img src="./assets/nav-bar_pic.png" class="nav-bar-pic"></div>
        </div>
        <div class="container">
            <div class="choose-city-text">Select the city closest to you</div>
            <div class="city-box">
                <table class="city-table" cellspacing="10">
                @php
                    $kotaChunks = $kota->chunk(6); // Mengelompokkan data kota menjadi beberapa array dengan 6 elemen per array
                @endphp

                @foreach ($kotaChunks as $chunk)
                    <tr>
                        @foreach ($chunk as $k)
                            <td><a href="{{ route('outlets', ['id_kota' => $k->id]) }}">{{ $k->nama }}</a></td>
                        @endforeach

                        @if ($chunk->count() < 6)
                            @for ($i = 0; $i < 6 - $chunk->count(); $i++)
                                <td></td> <!-- Tambahkan kolom kosong jika jumlah elemen kurang dari 6 -->
                            @endfor
                        @endif
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
        <div class="footer">
            <table class="social-media-box">
                <tr>
                    <td colspan="3" class="social-media-text">Our Social Media</td>
                </tr>
                <tr class="Social-media-logo">
                    <td><img src="./assets/logo_whatsapp.png" class="whatsapp-logo"></td>
                    <td><img src="./assets/logo_instagram.png" class="instagram-logo"></td>
                    <td><img src="./assets/logo_twitter.png" class="twitter-logo"></td>
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
