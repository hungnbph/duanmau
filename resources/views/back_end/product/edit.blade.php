<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('/image/logo.png') }}" type="image/ico" />
    <title>Thêm  </title>

    <link href="{{ asset('/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

    <link href="{{ asset('/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <link href="{{ asset('/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <link href="{{ asset('/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <link href="{{ asset('/build/css/custom.min.css') }}" rel="stylesheet">
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div  class="navbar nav_title" style="border: 0;">
                    <a style="text-align: center;" href="index.html" class="site_title"> <span>FPT Shop</span></a>
                </div>
                <div class="clearfix"></div>

                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="../../../../public/image/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
                    </div>
                </div>

                <br/>

                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="index.html">Dashboard</a></li>

                                    </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Danh mục <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('back_end.category.showCategory')}}">Danh sách danh mục</a></li>
                                    <li><a href="{{route('back_end.category.add')}}">Thêm danh mục</a></li>
                                </ul>
                            </li>

                            <li><a><i class="fa fa-edit"></i> Sản phẩm <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('back_end.product.index')}}">Danh sách sản phẩm</a></li>
                                    <li><a href="{{route('back_end.product.addProduct')}}">Thêm sản phẩm</a></li>
                                </ul>
                            </li>

                            <li><a><i class="fa fa-edit"></i> Tài khoản <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('back_end.user.index')}}">Danh sách tài khoản</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Slider<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('back_end.slider.index')}}">Danh sách slider</a></li>
                                    <li><a href="{{route('back_end.slider.add')}}">Thêm slider</a></li>
                                    {{--                                    <li><a href="form.html">Thêm slider</a></li>--}}
                                </ul>
                            </li>

                            <li><a><i class="fa fa-edit"></i>Bình luận<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="tables_dynamic.html">Danh sách bình luận</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>



            </div>
        </div>

        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                            <img src="images/img.jpg" alt="">John Doe
                            </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                        </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <!-- <div class="title_left">
                        <h3>Title</h3>
                    </div> -->
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <!-- <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Bảng sửa sản phẩm</h2>
                                <div class="clearfix"></div>
                            </div>
{{--                            xác nhận dữ liệu--}}
                            @foreach($errs as $e)
                                <p style="color: red">
                                    @if(is_array($e))
                                        {{implode('<br>',$e)}}
                                    @else
                                        {{$e}}
                                    @endif
                                </p>
                            @endforeach
                            <div class="x_content">
                                <br />
                                <form   method="post" enctype="multipart/form-data">

                                    @csrf
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Tên sản phẩm<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" name="name"  class="form-control" value="{{$objDemo->name}}" >
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Ảnh<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <img src="../../../../public/image/{{$objDemo->image}}"  alt=""
                                                 style="max-width: 150px;max-height: 150px;"> <hr>
                                            <input type="hidden" name="thayImage" value="{{$objDemo->image}}"  >
                                            <input type="file"  class="form-control " name="image">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tóm tắt sp <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" name="content"  class="form-control" value="{{$objDemo->content}}">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Giá gốc</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input  class="form-control" type="text" name="price" value="{{$objDemo->price}}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Giá khuyến mãi</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="text" name="price_km" value="{{$objDemo->price_km}}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Danh mục</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select   name="id_category" class="form-control">
                                                @foreach($ds as $k => $objRow)
                                                    <option @if($objRow->id_cate == $objDemo->id_category )selected @endif
                                                        value="{{$objRow->id_cate}}" class="form-control">
                                                        {{$objRow->name_cate}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Nội dung</h2>
                                            <div class="clearfix"></div>
                                        </div>

                                            <div class="form-group">

                                                <textarea class="form-control" name="des" value="{{$objDemo->des}}"  rows="3">
                                                    {{$objDemo->des}}
                                                </textarea>
                                            </div>

                                    </div>
                                    <button  class="btn btn-success">Submit</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 ">

            </div>
        </div>
    </div>


    <footer>
        <div class="pull-right">Shop điện thoại FPT</div>
        <div class="clearfix"></div>
    </footer>

</div>


<script src="{{ asset('/vendors/jquery/dist/jquery.min.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/fastclick/lib/fastclick.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/nprogress/nprogress.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/iCheck/icheck.min.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/moment/min/moment.min.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>
{{--<script src="{{ asset('/vendors/bootstrap-daterangepicker/daterangepicker.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>--}}

<script src="{{ asset('/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>
<script src="{{ asset('/vendors/jquery.hotkeys/jquery.hotkeys.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>
<script src="{{ asset('/vendors/google-code-prettify/src/prettify.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/switchery/dist/switchery.min.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/select2/dist/js/select2.full.min.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/parsleyjs/dist/parsley.min.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/autosize/dist/autosize.min.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/vendors/starrr/dist/starrr.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>

<script src="{{ asset('/build/js/custom.min.js') }}" type="41c5851190274a9cef3ff568-text/javascript"></script>
<script src="{{ asset('/ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="41c5851190274a9cef3ff568-|49" defer=""></script></body>

</html>
