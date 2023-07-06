<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="./css/login.css" rel="stylesheet" />
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

        <div class="login-blank">
            <div class="login-box">
                <div class="login-text">Login</div>
                <form action = "/Session/Login" method = "POST">
                    @csrf
                    <div class="username-text">Username or email address *</div>
                    <input type = "text" name = "email" id= 'email' class="input-email" type="text" placeholder="Username or Email" required>

                    <div class="password-text">Password *</div>
                    <input type = "password" name = "password" id='password' class="input-password" type="password" placeholder="Password" required>

                    <button name ="submit" type="submit" class="input-button"> Login </button>
                </form>
                <div><a class = "link-register" href = "/Register">Dont have an account? Click here!</a></div>
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
