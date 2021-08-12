<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee shop | Tin tức</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style type="text/css">
 .col-lg-6 .a:hover{
  box-shadow: 5px 10px 8px 10px #888888;
 } 
    .col-lg-6 .a a button{
        color: black;
        border: solid white 1px;
        background: white;
        padding: 3%;
    }
     .col-lg-6 .a a button:hover {
        padding: 3%;
        background-color:#7fad39;
        border: solid #7fad39 1px;
        color: white;
     }
    .a:hover{
 box-shadow: 5px 10px 8px 10px #888888;
 } 
    .a a button{
 padding: 1%;
        color: black;
        border: solid white 1px;
        background: white;
    }
     .a a button:hover {
         padding: 1%;
        background-color:#7fad39;
        border: solid #7fad39 1px;
        color: white;
     }
     .col-lg-3 ul li:hover{
        box-shadow: 5px 10px 8px 10px #888888;
     }
    </style>
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
     <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>

                            <div class="header__top__right__auth">
                                @if($user != "")
                                <a href="#"><i class="fa fa-user"></i>{{$user -> name}}</a>
                                @else
                                <a href="#"><i class="fa fa-user"></i>login</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ route('home') }}"><img src="https://i.ytimg.com/vi/zy9neIJzttY/maxresdefault.jpg" height="100px"></a>
                    </div>
                </div>
                <div class="col-lg-6" style="padding-top: 30px;">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li><a href="#">Sản phẩm</a>
                            <ul class="header__menu__dropdown">
                             @foreach ($list_danhmuc as $item)
                            <li><a href="{{ route('product') }}?id={{$item -> id}}">{{$item -> name}}</a></li>
                            @endforeach
                                </ul>
                            </li>
                            <li class="active"><a href="{{ route('news') }}">Tin tức</a></li>
                            <li><a href="{{ route('abus') }}">about us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3"style="padding-top: 40px;">
                    <div class="header__cart">
                        <ul>
                            @if($user == "")
                            <li><a href=""><i class="fa fa-heart"></i> <span>{{ $l }}</span></a></li>
                            <li><a href=""><i class="fa fa-shopping-bag"></i> <span>{{ $t }}</span></a></li>
                            @else
                            <li><a href="{{ route('plike') }}"><i class="fa fa-heart"></i> <span>{{ $l }}</span></a></li>
                            <li><a href="{{ route('cart') }}"><i class="fa fa-shopping-bag"></i> <span>{{ $t }}</span></a></li>
                            @endif
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Loại sản phẩm</span>
                        </div>
                        <ul>
                        @foreach ($list_danhmuc as $item)
                            <li><a href="{{ route('product') }}?id={{$item -> id}}">{{$item -> name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
<div class="hero__search__form">
                            <form action="{{route('product')}}" method="get">
                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                                <input type="text" placeholder="Tìm kiếm sản phẩm ?" name="s">
                                <button type="submit" class="site-btn" style="color: white;">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 88.888.888</h5>
                                <span>hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="https://caphenguyenchat.org/wp-content/uploads/hinh-3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Coffee shop</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Trang chủ</a>
                            <a href="{{ route('news') }}">tin tức</a>
                            @foreach ($list_new as $item)
                            <span>{{$item -> title}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
            <div class="container">
                        <div class="section-title product__discount__title" style="padding-top: 3%;">
                            <h2>Tin tức</h2>
                        </div>
            <div class="row" style="padding-bottom: 10%;">

                <div class="col-lg-9" style="padding-right: 2%;">
      <div>              
    @foreach ($list_new as $item)
    <h4><b>{{$item -> title}}</b></h4>
    <p style="text-align: center; padding-top: 10%;padding-bottom: 10%;"><img src="../../public/sanpham/tintuc/{{ $item -> thumbnail}}.jpg"></p>
    <p>{{$item -> content}}</p>
    @endforeach</div>
        </div>
                <div class="col-lg-3"style="border-left: solid #7fad39 3px;">
                    <div >
                        <div >
                            <h4 style="text-transform: uppercase;">bài viết mới nhất</h4>
                        </div>
                            <ul style="list-style-type: none;">
                            @foreach ($list_nb as $item)
                            <li style="margin-top: 20px; ba"><a href="{{ route('newdet') }}?id={{$item -> id}}">
                                <img src="../../public/sanpham/tintuc/{{ $item -> thumbnail}}.jpg">
                                <h6 style="padding-top: 20px;color: black; font-weight: bold;">{{$item -> title}}</h6></a>
                            </li>
                            @endforeach
                            </ul>
                        </div>
                </div> 
    </div>
                
            </div>
            
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>



</body>

</html>