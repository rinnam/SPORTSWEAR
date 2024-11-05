<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="{{ asset('backend/css/index.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>ADMIN</h2>
        <ul class="nav flex-column font-weight-bold">
            <li class="nav-item">
                <a class="nav-link" href="#">Tổng quan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="product-category">Quản lý menu </a>
                <!-- Sub-menu -->
                <ul class="submenu">
                    <li><a class="sub-link" href="{{URL::to ('admin/add_horizontal_menu') }}">Menu ngang</a></li>
                    <li><a class="sub-link" href="{{URL::to ('admin/add_vertical_menu') }}">Menu dọc</a></li>
                    <li><a class="sub-link" href="#">Sản phẩm 3</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Typography</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Glyphicon</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <nav class="navbar">
            <span class="navbar-text">Chào mừng bạn đến với Admin</span>
            <div class="user-info">
                <input type="text" placeholder="Search">
                <div class="user-profile">
                    <img src="https://via.placeholder.com/30" alt="User">
                    <span>John Doe</span>
                </div>
            </div>
        </nav>
        <section  class="content">

            @yield('mutil-content')
        </section>
        
        
        <div class="content">
            <p>© 2017 Visitors. All rights reserved | Design by W3layouts</p>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript for submenu toggle -->
    <script src="{{ asset('backend/js/index.js') }}"></script>
</body>
</html>
