<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="./css/admin_statistic.css" rel="stylesheet" />
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
        <table class="statistic-menu" border="0">
            <tr>
                <th class="statistic-menu-title" colspan="3">Statistic Detail</th>
            </tr>
            <tr class="statistic-menu-head">
                <td class="statistic-menu-head-text"><a class="statistic-menu-head-text" href="admin_income_day.php">Day</a></td>           
                <td class="statistic-menu-head-text" style="background: #57381B; border-radius: 20px;"><a class="statistic-menu-head-text" href="admin_income_week.php">Week</a></td>     
                <td class="statistic-menu-head-text"><a class="statistic-menu-head-text" href="admin_income_month.php">Month</a></td>
            </tr>
            <tr class="gap"></tr>
            <tr class="statistic-menu-box">
                <td class="statistic-menu-detail" colspan="3"><a class="statistic-menu-detail" href="admin_statistic_day.php">Total Ordered</a></td>
            </tr>
            <tr class="gap"></tr>
            <tr class="statistic-menu-box">
                <td class="statistic-menu-detail" colspan="3"><a class="statistic-menu-detail" href="admin_income_day.php">Income</a></td>
            </tr>
        </table>
        <div class="line"></div>
        <table class="statistic-info">
            <tr>
                <th class="statistic-info-title" colspan="4">Total Income in a Week</th>
            </tr>
            <tr class="statistic-total">
                <td colspan="4">Rp 280.000</td>
            </tr>
            <tr class="statistic-info-head">
                <td class="statistic-info-head-text">Product Name</td>
                <td class="statistic-info-head-text">Quantity</td>
                <td class="statistic-info-head-text">Unit Price</td>
                <td class="statistic-info-head-text">Income</td>
            </tr>
            <tr>
                <td class="statistic-info-detail">Caramel Frappucino</td>
                <td class="statistic-info-detail">4</td>
                <td class="statistic-info-detail">Rp 40.000</td>
                <td class="statistic-info-detail">Rp 160.000</td>
            </tr>
            <tr>
                <td class="statistic-info-detail">Caramel Java Chip Frappuccino</td>
                <td class="statistic-info-detail">3</td>
                <td class="statistic-info-detail">Rp 40.000</td>
                <td class="statistic-info-detail">Rp 120.000</td>
            </tr>
        </table>
    </body>
</html>