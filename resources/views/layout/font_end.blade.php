<!DOCTYPE html>
<html>
<head>
    <title>Shop điện thoại</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}" />
    <script type="text/javascript" href="{{ asset('/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <meta />
    <style>
        #textChao {
            color: #fff0ff;
        }
    </style>
</head>

<body>

<!-- Menu -->
<section class="menu_con">

    <div class="container" style="background-color: #0c9a9a; height: 80px;  padding-left:10%;">
        @if (Auth::check())

            <p id="textChao">Chào bạn {{Auth::user()->username}}</p>
            <a href="{{ route('font_end.user.logout')}}" id="textChao">Đăng xuất</a>

        @else

            <a href="{{route('font_end.user.login')}}" id="textChao">Đăng nhập</a>

        @endif

    </div>
</section>
<section id="menu">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img src="../../../public/image/logo1.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home.index') }}">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.showProduct') }}">Sản phẩm</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên sản phẩm" aria-label="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </div>
        </nav>
    </div>
</section>
<!-- Trình chiếu -->
<section id="slider">
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <!-- <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner" ;>

                <div class="carousel-item active" style="display: block;">
                    <img src="../../../public/image/banner1.jpg" class="d-block w-100" style="height: 480px;" alt="..." >
                    <div class="carousel-caption d-none d-md-block">

                        <h3 style="color: #313131;padding-bottom: 10px;;">Điện thoại A</h3>
                        <button type="button" class="btn btn-outline-danger">Xem ngay !!!</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../../public/image/banner2.jpg" class="d-block w-100" style="height: 480px;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="color: #313131;padding-bottom: 10px;">Điện thoại A</h3>
                        <button type="button" class="btn btn-outline-danger">Xem ngay !!!</button>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>
<section id="menuCon">
    <div class="container">
        <h3><span class="badge badge-success">Tìm thấy</span></h3>
    </div>
</section>
@yield('search')
<section class="thank" style="height: 350px; background-color: #fff1f1; text-align: center;">
    <div class="container-fluid">
        <h3>Cảm ơn quý khách</h3>
        <p>Đã tin tưởng sử dụng sản phẩm của chúng tôi suốt thời gian vừa qua :))</p>
    </div>
</section>
<!-- footer -->
<footer>
    <div class="container-fluid" style="background-color: #ff324d; color: cornsilk;">
        <div class="row">
            <div class="col-md-3" style="width: 100%;">
                <h5 style="padding-top: 15px; padding-left: 20px;">Cam kết chất lượng</h5>
                <p style="padding-top: 15px; padding-left: 20px;">0123456789</p>
            </div>
            <div class="col-md-3" style="width: 100%;">
                <h5 style="padding-top: 15px; padding-left: 20px;">Số điện thoại</h5>
                <p style="padding-top: 15px; padding-left: 20px;">0123456789</p>
            </div>
            <div class="col-md-3" style="width: 100%;">
                <h5 style="padding-top: 15px; padding-left: 20px;">Địa chỉ</h5>
                <p style="padding-top: 15px; padding-left: 20px;">Thái Bình</p>
            </div>
            <div class="col-md-3" style="width: 100%;">
                <h5 style="padding-top: 15px; padding-left: 20px;">Địa chỉ</h5>
                <p style="padding-top: 15px; padding-left: 20px;">Thái Bình</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
