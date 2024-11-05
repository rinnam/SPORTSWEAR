<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('fronttend/css/index.css') }}">
</head>
<body>
     <!-- Top Bar for Login/Register -->
     <div class="top-bar bg-dark text-white py-1">
        <div class="container d-flex justify-content-end align-items-center">
            <a href="#" class="text-white mx-2">Đăng nhập</a>
            <a href="#" class="text-white mx-2">Đăng ký</a>
        </div>
    </div>

    <!-- Header Section with Responsive Navigation -->
    <header class="bg-dark text-white">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark position-relative">
                <!-- Logo -->
                <a class="navbar-brand text-warning font-weight-bold" href="#">Sport</a>

                <!-- Hamburger Menu for Mobile -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>
                    </ul>
                </div>

                <!-- Cart Button -->
                <a href="#" class="btn btn-warning ml-lg-3">🛒 Giỏ hàng</a>
            </nav>
        </div>
    </header>



    <!-- Banner Section -->
    <section class="banner text-center text-white d-flex flex-column align-items-center justify-content-center" style="background-image: url('https://lehren.com/wp-content/uploads/2020/09/Web5-Exercises-to-Improve-Agility.-696x392.jpg'); height: 300px; background-size: cover;">
        <h2>Phụ Kiện Golf Mùa Giải 2016</h2>
        <p>Giảm giá tới 50% mọi sản phẩm</p>
    </section>

    <!-- Featured Products Section -->
    <section class="container my-5">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="https://lehren.com/wp-content/uploads/2020/09/Web5-Exercises-to-Improve-Agility.-696x392.jpg" alt="Áo thun Gunny" class="img-fluid">
                <h3>Áo thun Gunny</h3>
                <p>Chỉ: 850.000 đ</p>
            </div>
            <div class="col-md-4">
                <img src="https://badasshelmetstore.com/wp-content/uploads/2014/10/71hqI5Oz7DL._SL1500_-1400x1450.jpg" alt="Mũ bảo hiểm Axtro" class="img-fluid">
                <h3>Mũ bảo hiểm Axtro</h3>
                <p>Chỉ: 700.000 đ</p>
            </div>
            <div class="col-md-4">
                <img src="shoes.jpg" alt="Giày thể thao Supra" class="img-fluid">
                <h3>Giày thể thao Supra</h3>
                <p>Chỉ: 480.000 đ</p>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <main class="container my-5">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 mb-4">
                <!-- Product Categories -->
                <div class="bg-light p-3 rounded mb-4">
                    <h5 class="font-weight-bold">Danh mục sản phẩm</h5>
                    <ul class="list-unstyled ">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>

                <!-- Product Filters -->
                <div class="bg-light p-3 rounded">
                    <h5 class="font-weight-bold">Bộ lọc sản phẩm</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Adidas</a></li>
                        <li><a href="#">Anta</a></li>
                        <li><a href="#">Aryca</a></li>
                        <li><a href="#">Bagus</a></li>
                    </ul>
                </div>
            </aside>

            <!-- Product List -->
            <section class="col-md-9">
                <h2 class="mb-4">Sản phẩm mới</h2>
                <div class="row">
                    <!-- Repeat this block for each product -->
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="card">
                            <img src="https://lehren.com/wp-content/uploads/2020/09/Web5-Exercises-to-Improve-Agility.-696x392.jpg" class="card-img-top" alt="Giày cầu lông Kawa">
                            <div class="card-body text-center">
                                <h5 class="card-title">Giày cầu lông Kawa</h5>
                                <p class="card-text">600.000 đ</p>
                                <button class="btn btn-primary">Mua hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="card">
                            <img src="https://badasshelmetstore.com/wp-content/uploads/2014/10/71hqI5Oz7DL._SL1500_-1400x1450.jpg" class="card-img-top" alt="Giày cầu lông Kawa">
                            <div class="card-body text-center">
                                <h5 class="card-title">Giày cầu lông Kawa</h5>
                                <p class="card-text">600.000 đ</p>
                                <button class="btn btn-primary">Mua hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="card">
                            <img src="product1.jpg" class="card-img-top" alt="Giày cầu lông Kawa">
                            <div class="card-body text-center">
                                <h5 class="card-title">Giày cầu lông Kawa</h5>
                                <p class="card-text">600.000 đ</p>
                                <button class="btn btn-primary">Mua hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="card">
                            <img src="product1.jpg" class="card-img-top" alt="Giày cầu lông Kawa">
                            <div class="card-body text-center">
                                <h5 class="card-title">Giày cầu lông Kawa</h5>
                                <p class="card-text">600.000 đ</p>
                                <button class="btn btn-primary">Mua hàng</button>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                </div>
            </section>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row text-left">
                <div class="col-md-3  ">
                    <h4>Sport</h4>
                    <p>266 Đội Cấn, Ba Đình, Hà Nội</p>
                    <p>Phone: 18006750</p>
                    <p>Email: support@sapo.com</p>
                </div>
                <div class="col-md-3">
                    <h5>Điều Khoản</h5>
                    <a href="#" class="text-white-50">Trang chủ</a><br>
                    <a href="#" class="text-white-50">Giới thiệu</a><br>
                    <a href="#" class="text-white-50">Sản phẩm</a><br>
                    <a href="#" class="text-white-50">Tin tức</a>
                </div>
                <div class="col-md-3">
                    <h5>Hướng Dẫn</h5>
                    <a href="#" class="text-white-50">Trang chủ</a><br>
                    <a href="#" class="text-white-50">Giới thiệu</a><br>
                    <a href="#" class="text-white-50">Sản phẩm</a><br>
                    <a href="#" class="text-white-50">Tin tức</a>
                </div>
                <div class="col-md-3">
                    <h5>Chính Sách</h5>
                    <a href="#" class="text-white-50">Trang chủ</a><br>
                    <a href="#" class="text-white-50">Giới thiệu</a><br>
                    <a href="#" class="text-white-50">Sản phẩm</a><br>
                    <a href="#" class="text-white-50">Tin tức</a>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; Bản quyền thuộc về Avent Team | Cung cấp bởi Sapo</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

