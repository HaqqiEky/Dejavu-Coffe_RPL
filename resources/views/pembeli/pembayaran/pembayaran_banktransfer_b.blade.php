<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="/css/pembayaran_banktransfer_b.css" rel="stylesheet" />
        <title>Document</title>
    </head>
    <body>
        <div class="header">
            <table class="header-box">
                <tr>
                    <td class="logo-text">DejaVu C<img src="/assets/logo.png" class="logo-nav-bar">offee</td>
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
            <div class="nav-bar-pic-box"><img src="/assets/nav-bar_pic.png" class="nav-bar-pic"></div>
        </div>

        <div class="container-1">
            <table class="status-page" border="0">
                <tr>
                    <td><div class="circle-cart"></div></td>
                    <td><div class="status-line"></div></td>
                    <td><div class="circle-payment"></div></td>
                    <td><div class="status-line"></div></td>
                    <td><div class="circle-finish"></div></td>
                </tr>
                <tr>
                    <td><div class="status-text">Cart</div></td>
                    <td></td>
                    <td><div class="status-text">Payment</div></td>
                    <td></td>
                    <td><div class="status-text">Finish</div></td>
                </tr>
            </table>
        </div>

        <div class="container-2">
            <table class="metode-payment-box" border="0">
                <tr>
                    <td colspan="2"><div class="payment-text">PEMBAYARAN VIRTUAL ACCOUNT</div></td>
                </tr>
                <tr>
                    <td colspan="2"><div class="bank-pic-border"><img src="/assets/bank/mandiri.webp" class="bank-pic"></div></td>
                </tr>
                <tr>
                    <td><div class="payment-description">No Order</div></td>
                    <td><div class="payment-description">12345678</div></td>
                </tr>
                <tr>
                    <td><div class="payment-description">Pembayaran dengan</div></td>
                    <td><div class="payment-description">Bank Transfer - Virtual Account</div></td>
                </tr>
                <tr>
                    <td><div class="payment-description">Bank</div></td>
                    <td><div class="payment-description">Mandiri</div></td>
                </tr>
                <tr>
                    <td><div class="payment-description">Virtual Account</div></td>
                    <td><div class="payment-description">8922201235752165</div></td>
                </tr>
                <tr>
                    <td><div class="payment-description">Jumlah</div></td>
                    <td><div class="payment-description">Rp35.000</div></td>
                </tr>
                <tr>
                    <td colspan="2"><div class="continue-shop-button"><div class="continue-shop-text"><a href="/Home" class="continue-shop-text">Pembayaran Anda telah Berhasil !<br>silahkan ambil pesanan di outlet pukul 15.30</a></div></div></td>
                </tr>
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