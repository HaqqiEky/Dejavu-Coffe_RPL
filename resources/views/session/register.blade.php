<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="/css/register.css" rel="stylesheet" />
        <title>Document</title>
    </head>
    <body>
        <div class="header">
            <table class="header-box">
                <tr>
                    <td class="logo-text">DejaVu C<img src="./assets/logo.png" class="logo-nav-bar">offee</td>
                    <td class="login-button"> <a href="/Login" class="login-text">LOGIN</a></td>
                    <td class="home-button"><a href="/" class="login-text">HOME</a></td>
                    <td class="about-button"><a href="#" class="login-text">ABOUT</a></td>
                    <td class="contact-button"><a href="#" class="login-text">CONTACT</a></td>
                    <td class="logo-chart-box"><a href="/Cart" class="login-text"><img src="./assets/shopping-cart.png" class="logo-chart"></a></td>
                </tr>
            </table>
            <div class="nav-bar-pic-box"><img src="./assets/nav-bar_pic.png" class="nav-bar-pic"></div>
        </div>
        <div class="container">
            <div class="register-blank">
                <div class="register-box">
                    <div class="register-text">Register</div>
                    <form action = "/Session/Register" method = "POST">
                        @csrf
                        <div class="name-add-text">Name*</div>
                        <input name = "name" id= 'name' class="input-name" type="text" placeholder="Name">

                        <div class="username-add-text">Username*</div>
                        <input name = "username" id= 'username' class="input-username" type="text" placeholder="username">

                        <div class="username-add-text">Telephone Number*</div>
                        <input name = "no_telp" id= 'no_telp' class="input-username" type="text" placeholder="username">

                        <div class="email-add-text">Email address*</div>
                        <input name = "email" id= 'email' class="input-email" type="text" placeholder="email">

                        <div class="password-add-text">Password*</div>
                        <input name = "password" id= 'password' class="input-password" type="password" placeholder="Password"></br></br>

                        <button name ="submit" type="submit" class="input-button"> Register </button>
                    </form>
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
    </body>
</html>
