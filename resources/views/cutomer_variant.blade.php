<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="./css/customer_variant.css" rel="stylesheet" />
        <title>Document</title>
        <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="header">
            <table class="header-box">
                <tr>
                    <td class="logo-text">DejaVu C<img src="./assets/logo.png" class="logo-nav-bar">offee</td>
                    <td class="login-button">LOGOUT</td>
                    <td class="home-button">HOME</td>
                    <td class="about-button">ABOUT</td>
                    <td class="contact-button">CONTACT</td>
                    <td class="logo-chart-box"><img src="./assets/shopping-cart.png" class="logo-chart"></td>
                </tr>
            </table>
            <div class="nav-bar-pic-box"><img src="./assets/nav-bar_pic.png" class="nav-bar-pic"></div>
        </div>
        <div class="gap"></div>
        <div class="container">
            <div class="product-box">
                <div class="product-name">Caramel Cream Frappucino</div>
                <div><img src="./assets/popular-baverage-1.png" class="product-pic"></div>
            </div>
            <div class="custom">
                <div class="variant-option">
                    <div class="size-option">
                        <div class="select-menu-size">
                            <div class="select-button-size">
                                <span class="select-size-text">Size</span>
                                <i class="bx bx chevron-down"></i>
                            </div>
                            <ul class="size-options">
                                <li class="size-option">
                                    <span class="size-option-text">Tall</span>
                                </li>
                                <li class="size-option">
                                    <span class="size-option-text">Grande</span>
                                </li>
                                <li class="size-option">
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
                                    <span class="sugar-option-text">Normal</span>
                                </li>
                                <li class="sugar-option">
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
                                    <span class="ice-option-text">Normal</span>
                                </li>
                                <li class="ice-option">
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
                                    <span class="whip-option-text">Normal</span>
                                </li>
                                <li class="whip-option">
                                    <span class="whip-option-text">Less Whip</span>
                                </li>
                                <li class="whip-option">
                                    <span class="whip-option-text">No Whip</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="custom-amount">
                    <div class="min-button">-</div>
                    <div class="amount">2</div>
                    <div class="plus-button">+</div>
                    <div class="to-chart-button">Save to Chart</div>
                </div>
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
        <script src="./js/variant-drop-down.js"></script>
    </body>
</html>