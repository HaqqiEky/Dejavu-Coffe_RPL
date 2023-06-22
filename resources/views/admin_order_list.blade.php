<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="./css/admin_order_list.css" rel="stylesheet" />
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
        <table class="order-list" border="0">
            <tr>
                <th class="order-list-title" colspan="3">Order List</th>
            </tr>
            <tr class="order-list-head">
                <td class="order-list-head-text">New</td>           
                <td class="order-list-head-text">Preparing</td>     
                <td class="order-list-head-text">Finish</td>
            </tr>
            <tr class="gap"></tr>
            <tr class="order-list-box">
                <td class="order-list-detail" colspan="2">Order #0123</td>
                <td class="customer-info">Haqqi</td>
            </tr>
            <tr class="gap"></tr>
            <tr class="order-list-box">
                <td class="order-list-detail" colspan="2">Order #0123</td>
                <td class="customer-info">Haqqi</td>
            </tr>
            <tr class="gap"></tr>
            <tr class="order-list-box">
                <td class="order-list-detail" colspan="2">Order #0123</td>
                <td class="customer-info">Haqqi</td>
            </tr>
            <tr class="gap"></tr>
            <tr class="order-list-box">
                <td class="order-list-detail" colspan="2">Order #0123</td>
                <td class="customer-info">Haqqi</td>
            </tr>
        </table>
        <div class="line"></div>
        <table class="order-info" border="0">
            <tr>
                <th class="order-info-title" colspan="3">Order Info</th>
                <td></td>
            </tr>
            <tr class="order-info-head">
                <td class="order-info-head-text">Product Name</td>           
                <td class="order-info-head-text">Quantity</td>     
                <td class="order-info-head-text">Unit Price</td>
                <td class="order-info-head-text">Size</td>
                <td class="order-info-head-text">Seugar</td>
                <td class="order-info-head-text">Ice</td>
                <td class="order-info-head-text">Whip</td>
                <td class="order-info-head-text">Total</td>
            </tr>
            <tr>
                <td class="order-info-detail">Caramel Frappucino</td>
                <td class="order-info-detail">2</td>
                <td class="order-info-detail">Rp 40.000</td>
                <td class="order-info-detail">Large</td>
                <td class="order-info-detail">Less Sugar</td>
                <td class="order-info-detail">Less Ice</td>
                <td class="order-info-detail">Whip</td>
                <td class="order-info-detail">Rp 80.000</td>
            </tr>
            <tr>
                <td class="order-info-detail">Caramel Frappucino</td>
                <td class="order-info-detail">2</td>
                <td class="order-info-detail">Rp 40.000</td>
                <td class="order-info-detail">Large</td>
                <td class="order-info-detail">Less Sugar</td>
                <td class="order-info-detail">Less Ice</td>
                <td class="order-info-detail">Whip</td>
                <td class="order-info-detail">Rp 80.000</td>
            </tr>
            <tr>
                <td class="order-info-detail">Caramel Frappucino</td>
                <td class="order-info-detail">2</td>
                <td class="order-info-detail">Rp 40.000</td>
                <td class="order-info-detail">Large</td>
                <td class="order-info-detail">Less Sugar</td>
                <td class="order-info-detail">Less Ice</td>
                <td class="order-info-detail">Whip</td>
                <td class="order-info-detail">Rp 80.000</td>
            </tr>
            <tr>
                <td colspan="7"></td>
                <td class="total-detail">Rp 320.000</td>
            </tr>
            <tr>
                <td class="acc-button" colspan="8">
                    <div class="accept-button">Accept Order</div>
                </td>
            </tr>
        </table>
    </body>
</html>