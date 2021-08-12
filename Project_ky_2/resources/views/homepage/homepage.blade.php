<!DOCTYPE html>
<html lang="zxx">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee shop | Trang chủ</title>
    
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
            <a href="#"><img src="sanpham/cafedenda.jpg" alt=""></a>
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
                <a href="#"><i class="fa fa-user"></i> Đăng nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
             <ul>
                <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a>
                <ul class="header__menu__dropdown">
                @foreach ($list_danhmuc as $item)
                 <li><a href="{{ route('product') }}?id={{$item -> id}}">{{$item -> name}}</a></li>
                @endforeach
                </ul>
                </li>
                <li><a href="./shop-grid.html">Tin tức</a></li>
                <li><a href="./blog.html">about us</a></li>
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
                            <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li><a href="#">Sản phẩm</a>
                            <ul class="header__menu__dropdown">
                             @foreach ($list_danhmuc as $item)
                            <li><a href="{{ route('product') }}?id={{$item -> id}}">{{$item -> name}}</a></li>
                            @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ route('news') }}">Tin tức</a></li>
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
    <section class="hero">
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
                                <i class='fa fa-phone'></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 88.888.888</h5>
                                <span>hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="../../public/sanpham/products/lattepn.jpg">
                        <div class="hero__text">
                            <h2 style="color: white;">Latte coffee<br /></h2>
                            <p style="color: white;">Loại Coffee Được Cả Thế Giới Yêu Thích</p>
                            <a href="{{ route('product') }}?s= latte" class="primary-btn">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($list_danhmuc as $item)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="../../public/sanpham/category/{{ $item -> img}}.jpg" height="100%">
                            <h5><a href="{{ route('product') }}?id={{$item -> id}}">{{$item -> name}}</a></h5>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
@if($user != "")
@foreach ($list_spnb as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg">
                            <img src="../../public/sanpham/products/{{ $item -> thumbnail}}.jpg" width="100%" height="100%">
                            <ul class="featured__item__pic__hover">
                                @if($item -> like_user != "" && $item -> like_user == $user -> id)
                                <li><a href="{{ route('plike') }}"><i style="color:red;" class="fa fa-heart"></i></a></li>
                                @else
                                <li><a href="{{ route('likeproduct') }}?id={{$item -> id}}"><i class="fa fa-heart"></i></a></li>   
                                @endif
                                <li><a href="{{ route('det') }}?id={{$item -> id}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{$item -> name}}</a></h6>
                        @if ($item -> sale > 1)
                        <h5 style="color:#b3822e;">{{ number_format($item -> giasale) }} đ<h5>
                        @else
                        <h5 style="color:#b3822e;">{{ number_format($item -> price) }} đ<h5>
                        @endif
                        </div>
                    </div>
                </div>
@endforeach
@else
@foreach ($list_spnb as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg">
                            <img src="../../public/sanpham/products/{{ $item -> thumbnail}}.jpg" width="100%" height="100%">
                            <ul class="featured__item__pic__hover">
                                <li><a href=""><i class="fa fa-heart"></i></a></li>   
                                <li><a href="{{ route('det') }}?id={{$item -> id}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{$item -> name}}</a></h6>
                        @if ($item -> sale > 1)
                        <h5 style="color:#b3822e;">{{ number_format($item -> giasale) }} đ<h5>
                        @else
                        <h5 style="color:#b3822e;">{{ number_format($item -> price) }} đ<h5>
                        @endif
                        </div>
                    </div>
                </div>
@endforeach
@endif

            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản phẩm mới nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            @foreach ($list_new as $item) 
                            @if ($count++ < 4)
                                <a href="{{ route('det') }}?id={{$item -> id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic" style="width: 150px;">
                                        <img src="../../public/sanpham/products/{{ $item -> thumbnail}}.jpg">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$item -> name}}</h6>
                                         @if ($item -> sale > 1)
                                        <span style="color:#b3822e;">{{ number_format($item -> giasale) }} đ</span>
                                        @else
                                        <span style="color:#b3822e;">{{ number_format($item -> price) }} đ</span>
                                        @endif
                                    </div>
                                </a>
                            @endif
                            @endforeach 

                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach ($list_new as $item) 
                            @if ($count1++ >=4)
                                    <a href="{{ route('det') }}?id={{$item -> id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic" style="width: 150px;">
                                        <img src="../../public/sanpham/products/{{ $item -> thumbnail}}.jpg">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$item -> name}}</h6>
                                        @if ($item -> sale > 1)
                                        <span style="color:#b3822e;">{{ number_format($item -> giasale) }} đ</span>
                                        @else
                                        <span style="color:#b3822e;">{{ number_format($item -> price) }} đ</span>
                                        @endif
                                    </div>
                                </a>
                            @endif
                            @endforeach  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Xếp theo lượt thích</h4>
                         <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            @foreach ($list_like as $item) 
                            @if ($count3++ < 4)
                                <a href="{{ route('det') }}?id={{$item -> id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic" style="width: 150px;">
                                        <img src="../../public/sanpham/products/{{ $item -> thumbnail}}.jpg">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$item -> name}}</h6>
                                        @if ($item -> sale > 1)
                                        <span style="color:#b3822e;">{{ number_format($item -> giasale) }} đ</span>
                                        @else
                                        <span style="color:#b3822e;">{{ number_format($item -> price) }} đ</span>
                                        @endif
                                    </div>
                                </a>
                            @endif
                            @endforeach 

                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach ($list_like as $item) 
                            @if ($count4++ >=4)
                                    <a href="{{ route('det') }}?id={{$item -> id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic" style="width: 150px;">
                                        <img src="../../public/sanpham/products/{{ $item -> thumbnail}}.jpg">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$item -> name}}</h6>
                                        @if ($item -> sale > 1)
                                        <span style="color:#b3822e;">{{ number_format($item -> giasale) }} đ</span>
                                        @else
                                        <span style="color:#b3822e;">{{ number_format($item -> price) }} đ</span>
                                        @endif
                                    </div>
                                </a>
                             @endif
                             @endforeach  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Xêp theo lương mua</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            @foreach ($list_buy as $item) 
                            @if ($count5++ < 4)
                                <a href="{{ route('det') }}?id={{$item -> id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic" style="width: 150px;">
                                        <img src="../../public/sanpham/products/{{ $item -> thumbnail}}.jpg">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$item -> name}}</h6>
                                        @if ($item -> sale > 1)
                                        <span style="color:#b3822e;">{{ number_format($item -> giasale) }} đ</span>
                                        @else
                                        <span style="color:#b3822e;">{{ number_format($item -> price) }} đ</span>
                                        @endif
                                    </div>
                                </a>
                            @endif
                             @endforeach 

                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach ($list_buy as $item) 
                            @if ($count6++ >=4)
                                    <a href="{{ route('det') }}?id={{$item -> id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic" style="width: 150px;">
                                        <img src="../../public/sanpham/products/{{ $item -> thumbnail}}.jpg">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$item -> name}}</h6>
                                        @if ($item -> sale > 1)
                                        <span style="color:#b3822e;">{{ number_format($item -> giasale) }} đ</span>
                                        @else
                                        <span style="color:#b3822e;">{{ number_format($item -> price) }} đ</span>
                                        @endif
                                    </div>
                                </a>
                            @endif
                                
                            @endforeach  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Tin tức</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                 @foreach ($list_news as $item) 
                    <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="../../public/sanpham/tintuc/{{ $item -> thumbnail}}.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> {{$item -> created_at}}</li>
                            </ul>
                            <h5><a href="{{ route('newdet') }}?id={{$item -> id}}">{{$item -> title}}</a></h5>
                            <p>{{$item -> demo}}</p>
                        </div>
                    </div>
                </div>
                 @endforeach  
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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