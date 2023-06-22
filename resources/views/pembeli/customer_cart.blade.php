<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="/css/customer_cart.css" rel="stylesheet" />
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
            
            <div class="payment-head">
                <div class="cart-icon">
                    <div class="cart-circle"></div>
                    <div class="cart-text">Cart</div>
                </div>
                <hr>
                <div class="payment-icon">
                    <div class="payment-circle"></div>
                    <div class="payment-text">Payment</div>
                </div>
                <hr>
                <div class="finish-icon">
                    <div class="finish-circle"></div>
                    <div class="finish-text">Finish</div>
                </div>
            </div>
            <table class="order-info" border="0">
                <tr class="order-info-head">
                    <td class="order-info-head-text">Product Name</td>           
                    <td class="order-info-head-text">Quantity</td>     
                    <td class="order-info-head-text">Unit Price</td>
                    <td class="order-info-head-text">Size</td>
                    <td class="order-info-head-text">Sugar</td>
                    <td class="order-info-head-text">Ice</td>
                    <td class="order-info-head-text">Whip</td>
                    <td class="order-info-head-text">Total</td>
                    <td class="order-info-head-text">Action</td>
                </tr>
                @php
                    $orderSubtotal = 0; // Inisialisasi subtotal pesanan
                @endphp
                @foreach($carts as $cart)
                @php
                    $subtotal = $cart->harga * $cart->jumlah;
                $orderSubtotal += $subtotal; // Menambahkan subtotal item ke subtotal pesanan
                @endphp
                <tr>
                    <td class="order-info-detail">{{ $cart->nama }}</td>
                    <td class="order-info-detail">{{ $cart->jumlah }}</td>
                    <td class="order-info-detail">Rp {{ $cart->harga }}</td>
                    <td class="order-info-detail">{{ $cart->size }}</td>
                    <td class="order-info-detail">{{ $cart->sugar }}</td>
                    <td class="order-info-detail">{{ $cart->ice }}</td>
                    <td class="order-info-detail">{{ $cart->whip }}</td>
                    <td class="order-info-detail">Rp {{ $subtotal }}</td>
                    <td class="order-info-detail">X</td>
                </tr>
                @endforeach
            </table>
            <div class="voucher-button-box">
                <div class="voucher-button">Get Code Voucher</div>
            </div>
            <div class="subtotal-box">
                <table class="subtotal-table">
                    <tr>
                       <th class="subtotal-head-text" colspan="2">CART SUBTOTAL</th> 
                    </tr>
                    <tr>
                        <td class="subtotal-text">Order Subtotal</td>
                        <td class="subtotal-text">Rp {{ $orderSubtotal }}</td>
                    </tr>
                    <tr>
                        <td class="subtotal-text">Diskon Amount</td>
                        <td class="subtotal-text">-5k</td>
                    </tr>
                    <tr>
                        <td class="subtotal-text">Total</td>
                        <td class="subtotal-text">35k</td>
                    </tr>
                </table>
            </div>
            <div class="payment-button-box">
                <div class="payment-button">Poceed To Payment</div>
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
        <script></script>
    </body>
</html>
