<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="/css/customer_variant.css" rel="stylesheet" />
        <title>Document</title>
        <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
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
                    <td class="home-button"><a href="/Home" class="login-text">HOME</a></td>
                    <td class="about-button"><a href="#" class="login-text">ABOUT</a></td>
                    <td class="contact-button"><a href="#" class="login-text">CONTACT</a></td>
                    <td class="logo-chart-box"><a href="/Cart" class="login-text"><img src="/assets/shopping-cart.png" class="logo-chart"></a></td>
                </tr>
            </table>
            <div class="nav-bar-pic-box">
                <img src="/assets/nav-bar_pic.png" class="nav-bar-pic">
            </div>
        </div>
        <div class="gap"></div>
        <div class="container">
            <div class="product-box"> @foreach($menu as $menu) <div class="product-name">{{ $menu->nama }}</div>
                <div>
                    <img src="{{ asset($menu -> gambar) }}" class="product-pic">
                </div> @endforeach
            </div>
            <form class="custom" action="{{ route('cart.store') }}" method="POST"> @csrf <input type="hidden" name="id_menu" value="{{ $menu->id }}">
                <div>
                    <div class="variant-option">
                        <div class="size-option">
                            <div class="select-menu-size">
                                <div class="select-button-size">
                                    <span class="select-size-text">Size</span>
                                    <i class="bx bx chevron-down"></i>
                                </div>
                                <ul class="size-options">
                                    <li class="size-option">
                                        <input type="radio" name="size" value="Tall">
                                        <span class="size-option-text">Tall</span>
                                    </li>
                                    <li class="size-option">
                                        <input type="radio" name="size" value="Grande">
                                        <span class="size-option-text">Grande</span>
                                    </li>
                                    <li class="size-option">
                                        <input type="radio" name="size" value="Venti">
                                        <span class="size-option-text">Venti</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sugar-option">
                            <div class="select-menu-sugar">
                                <div class="select-button-sugar">
                                    <span class="select-sugar-text">Sugar</span>
                                    <i class="bx bx chevron-down"></i>
                                </div>
                                <ul class="sugar-options">
                                    <li class="sugar-option">
                                        <input type="radio" name="sugar" value="Normal">
                                        <span class="sugar-option-text">Normal</span>
                                    </li>
                                    <li class="sugar-option">
                                        <input type="radio" name="sugar" value="Less Sugar">
                                        <span class="sugar-option-text">Less Sugar</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ice-option">
                            <div class="select-menu-ice">
                                <div class="select-button-ice">
                                    <span class="select-ice-text">Ice</span>
                                    <i class="bx bx chevron-down"></i>
                                </div>
                                <ul class="ice-options">
                                    <li class="ice-option">
                                        <input type="radio" name="ice" value="Normal">
                                        <span class="ice-option-text">Normal</span>
                                    </li>
                                    <li class="ice-option">
                                        <input type="radio" name="ice" value="Less Ice">
                                        <span class="ice-option-text">Less Ice</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="whip-option">
                            <div class="select-menu-whip">
                                <div class="select-button-whip">
                                    <span class="select-whip-text">Whip</span>
                                    <i class="bx bx chevron-down"></i>
                                </div>
                                <ul class="whip-options">
                                    <li class="whip-option">
                                        <input type="radio" name="whip" value="Normal">
                                        <span class="whip-option-text">Normal</span>
                                    </li>
                                    <li class="whip-option">
                                        <input type="radio" name="whip" value="Less Whip">
                                        <span class="whip-option-text">Less Whip</span>
                                    </li>
                                    <li class="whip-option">
                                        <input type="radio" name="whip" value="No Whip">
                                        <span class="whip-option-text">No Whip</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-amount">
                    <div class="min-button"><a href = "">-</a></div>
                    <div class="amount">
                        <input type="number" name="jumlah" value="1" class="amount-text">
                    </div>
                    <div class="plus-button">+</div>
                    <div class="to-chart-button">
                        <button type="submit" class="to-chart-text">Save to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="footer">
            <table class="social-media-box">
                <tr>
                    <td colspan="3" class="social-media-text">Our Social Media</td>
                </tr>
                <tr class="Social-media-logo">
                    <td>
                        <img src="/assets/logo_whatsapp.png" class="whatsapp-logo">
                    </td>
                    <td>
                        <img src="/assets/logo_instagram.png" class="instagram-logo">
                    </td>
                    <td>
                        <img src="/assets/logo_twitter.png" class="twitter-logo">
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
        <script src="/js/variant-drop-down.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var minButton = document.querySelector('.min-button');
                var plusButton = document.querySelector('.plus-button');
                var amountInput = document.querySelector('.amount input');
                minButton.addEventListener('click', function() {
                    var currentValue = parseInt(amountInput.value);
                    if (currentValue > 1) {
                        amountInput.value = currentValue - 1;
                    }
                });
                plusButton.addEventListener('click', function() {
                    var currentValue = parseInt(amountInput.value);
                    amountInput.value = currentValue + 1;
                });
            });
        </script>
    </body>
</html>