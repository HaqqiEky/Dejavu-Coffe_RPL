<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="./css/admin_beverage.css" rel="stylesheet" />
        <title>DejeVu Coffee</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <div class="side-bar">
            <div class="logo-box">
                <div class="logo-text">DejaVu C<img src="./assets/logo.png" class="logo-nav-bar">offee</div>
            </div>
            <div class="menu-box">
                <div class="dashboard-box">
                    <img src="./assets/home.svg" class="dashboard-logo">
                    <div class="dashboard-text">Dashboard</div>
                </div>
                <div class="order-box">
                    <img src="./assets/list.svg" class="order-logo">
                    <div class="order-text">Order List</div>
                </div>
                <div class="statistic-box">
                    <img src="./assets/statistic.svg" class="statistic-logo">
                    <div class="statistic-text">Statistic Detail</div>
                </div>
                <div class="beverage-box">
                    <img src="./assets/beverage.svg" class="beverage-logo">
                    <div class="beverage-text">beverage</div>
                </div>
                <div class="archive-box">
                    <img src="./assets/trash.svg" class="archive-logo">
                    <div class="archive-text">Archive</div>
                </div>
            </div>
        </div>
        <div class="profile-box">
            <img src="./assets/log-out.svg" class="logout-logo"/>
            <div class="hello-text">Hello, Haqqi</div>
        </div>
        <table class="category" border="0">
            <tr>
                <th class="category-title-text">Beverage</th>
            </tr>
            <tr>
                <td class="category-text">BLENDED COFFEE</td>                
            </tr>
            <tr class="gap"></tr>
            <tr>
                <td class="category-text">BLENDED CREAM</td>
            </tr>
            <tr class="gap"></tr>
            <tr>
                <td class="category-text">BLENDED TEA</td>
            </tr>
            <tr class="gap"></tr>
            <tr>
                <td class="category-text">BREWED COFFE</td>
            </tr>
            <tr class="gap"></tr>
            <tr>
                <td class="category-text">ESPRESSO</td>
            </tr>
            <tr class="gap"></tr>
        </table>
        <div class="line"></div>
        <table border="0" class="menu-table">
            <tr>
                <th class="category-title-text">BLENDED COFFEE</th>
            </tr>
            <tr>
                <td class="menu-edit-box">
                    <table border="0" class="menu-edit">
                        <tr>
                            <td class="menu-title" colspan="4">Caramel Frappucino</td>
                            <td rowspan="3" class="menu-pic-edit"><img class="menu-pic" src="./assets/menu-edit.png"></td>
                        </tr>
                        <tr>
                            <td class="menu-price" colspan="4">Rp. 40.000</td>
                        </tr>
                        <tr>
                            <td class="min-button">-</td>
                            <td class="stock">2</td>
                            <td class="plus-button">+</td>
                            <td class="archive-button">Archive</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="gap"></tr>
            <tr>
                <td class="menu-edit-box">
                    <table border="0" class="menu-edit">
                        <tr>
                            <td class="menu-title" colspan="4">Caramel Frappucino</td>
                            <td rowspan="3" class="menu-pic-edit"><img class="menu-pic" src="./assets/menu-edit.png"></td>
                        </tr>
                        <tr>
                            <td class="menu-price" colspan="4">Rp. 40.000</td>
                        </tr>
                        <tr>
                            <td class="min-button">-</td>
                            <td class="stock">2</td>
                            <td class="plus-button">+</td>
                            <td class="archive-button">Archive</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="gap"></tr>
        </table>
        <div class="line-2"></div>
        <div class="save-button">
            Save
        </div>
    </body>
</html>