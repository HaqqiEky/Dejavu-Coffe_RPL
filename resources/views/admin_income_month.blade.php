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
                    <div ><a href="/Home" class="dashboard-text">Dashboard</a></div>
                </div>
                <div class="order-box">
                    <img src="./assets/list.svg" class="order-logo">
                    <div ><a href="{{ route('orderlist.index') }}" class="order-text">Order List</a></div>
                </div>
                <div class="statistic-box">
                    <img src="./assets/statistic.svg" class="statistic-logo">
                    <div ><a href="{{ route('statistik_day') }}" class="statistic-text">Statistic Detail</a></div>
                </div>
                <div class="beverage-box">
                    <img src="./assets/beverage.svg" class="beverage-logo">
                    <div ><a href="{{ route('beverage') }}" class="beverage-text">beverage</a></div>
                </div>
                <div class="archive-box">
                    <img src="./assets/trash.svg" class="archive-logo">
                    <div ><a href="{{ route('archive') }}" class="archive-text">Archive</a></div>
                </div>
            </div>
        </div>
        <div class="profile-box">
            <img src="./assets/log-out.svg" class="logout-logo"/>
            <form  action="{{ route('Logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link text-body font-weight-bold px-0 py-0" style="border: none; background: none;">
                    <i class="fa fa-sign-out-alt ms-sm-1"></i>    
                    <a class="login-text">Hello Admin</a>
                </button>
            </form>
        </div>
        <table class="statistic-menu" border="0">
            <tr>
                <th class="statistic-menu-title" colspan="3">Statistic Detail</th>
            </tr>
            <tr class="statistic-menu-head">
                <td class="statistic-menu-head-text"><a class="statistic-menu-head-text" href="{{ route('income_day') }}">Day</a></td>           
                <td class="statistic-menu-head-text"><a class="statistic-menu-head-text" href="{{ route('income_week') }}">Week</a></td>     
                <td class="statistic-menu-head-text" style="background: #57381B; border-radius: 20px;"><a class="statistic-menu-head-text" href="{{ route('income_month') }}">Month</a></td>
            </tr>
            <tr class="gap"></tr>
            <tr class="statistic-menu-box">
                <td class="statistic-menu-detail" colspan="3"><a class="statistic-menu-detail" href="{{ route('statistik_day') }}">Total Ordered</a></td>
            </tr>
            <tr class="gap"></tr>
            <tr class="statistic-menu-box">
                <td class="statistic-menu-detail" colspan="3"><a class="statistic-menu-detail" href="{{ route('income_day') }}">Income</a></td>
            </tr>
        </table>
        <div class="line"></div>
        <table class="statistic-info">
            <tr>
                <th class="statistic-info-title" colspan="4">Total Income in a Month</th>
            </tr>
            <tr class="statistic-total">
                <td><img src="./assets/income.png" class="income-pic"></td>
                <td colspan="3">Rp 280.000</td>
            </tr>
            <tr class="gap"></tr>
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