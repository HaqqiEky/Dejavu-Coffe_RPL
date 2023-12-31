<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet" />
        <link href="./css/admin_dashboard.css" rel="stylesheet" />
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
        <div class="total-menu-box">
            <img src="./assets/total-menu.png" class="total-menu-logo">
            <div class="total-menu-count-box">
                <div class="total-menu-count-text">75</div>
                <div class="total-menu-text">Total Menu</div>
            </div>
        </div>
        <div class="total-outlet-box">
            <img src="./assets/total-outlet.png" class="total-outlet-logo">
            <div class="total-outlet-count-box">
                <div class="total-outlet-count-text">357</div>
                <div class="total-outlet-text">Total Outlet</div>
            </div>
        </div>
        <div class="total-ordered-box">
            <img src="./assets/ordered.png" class="total-ordered-logo">
            <div class="total-ordered-count-box">
                <div class="total-ordered-count-text">65</div>
                <div class="total-ordered-text">Total Ordered in 30 Days</div>
            </div>
        </div>
    </body>
</html>