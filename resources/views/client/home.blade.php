<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>SellBook - Home</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/fontawesome.css') }}">
                  
    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/slick-theme.css') }}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/animate.css') }}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/themify-icons.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/bootstrap.css') }}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">



</head>

<body class="theme-color-1">


    <!-- loader start -->
    <div class="loader_skeleton">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Our store SellBook</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                                My Account
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="navbar">
                                    <a href="javascript:void(0)">
                                        <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="brand-logo">
                                    <a href="index.html"><img src="../assets/images/icon/logo.png"
                                            class="img-fluid blur-up lazyload" alt=""></a>
                                </div>
                            </div>
                            <div class="menu-right pull-right">
                                <div>
                                    <nav>
                                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                        <ul class="sm pixelstrap sm-horizontal">
                                            <li>
                                                <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                        aria-hidden="true"></i></div>
                                            </li>
                                            <li>
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>
                                            {{-- <li>
                                                <a href="#">feature<div class="lable-nav">new</div></a>
                                            </li>
                                            <li>
                                                <a href="#">shop</a>
                                            </li>
                                            <li>
                                                <a href="#">product</a>
                                            </li>
                                            <li>
                                                <a href="#">pages</a>
                                            </li>
                                            <li><a href="#">blog</a>
                                            </li> --}}
                                        </ul>
                                    </nav>
                                </div>
                                <div>
                                    <div class="icon-nav d-none d-sm-block">
                                        <ul>
                                            <li class="onhover-div mobile-search">
                                                <div><img src="../assets/images/icon/search.png" onclick="openSearch()"
                                                        class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                        onclick="openSearch()"></i></div>
                                            </li>
                                            <li class="onhover-div mobile-setting">
                                                <div><img src="../assets/images/icon/setting.png"
                                                        class="img-fluid blur-up lazyload" alt=""> <i
                                                        class="ti-settings"></i></div>
                                            </li>
                                            <li class="onhover-div mobile-cart">
                                                <div><img src="../assets/images/icon/cart.png"
                                                        class="img-fluid blur-up lazyload" alt=""> <i
                                                        class="ti-shopping-cart"></i></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="home-slider">
            <div class="home"></div>
        </div>
        <section class="collection-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container section-b-space">
            <div class="row section-t-space">
                <div class="col-lg-6 offset-lg-3">
                    <div class="product-para">
                        <p class="first"></p>
                        <p class="second"></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="no-slider row">
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader end -->


    <!-- header start -->
    <header>
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Our store Multikart</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                                My Account
                                <ul class="onhover-show-div">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar">
                                <a href="javascript:void(0)" onclick="openNav()">
                                    <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <div onclick="closeNav()">
                                            <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back</div>
                                        </div>
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="brand-logo">
                                <a href="index.html"><img src="../assets/images/icon/logo.png"
                                        class="img-fluid blur-up lazyload" alt=""></a>
                            </div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                    aria-hidden="true"></i></div>
                                        </li>
                                        <li><a href="index.html">Home</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div><img src="../assets/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                    onclick="openSearch()"></i></div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div> 
                                                    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div><img src="../assets/images/icon/setting.png"
                                                    class="img-fluid blur-up lazyload" alt=""> <i
                                                    class="ti-settings"></i></div>
                                            <div class="show-div setting"></div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div><img src="../assets/images/icon/cart.png"
                                                    class="img-fluid blur-up lazyload" alt=""> <i
                                                    class="ti-shopping-cart"></i></div>
                                            <span class="cart_qty_cls">2</span>
                                            <ul class="show-div shopping-cart">
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="me-3"
                                                                src="../assets/images/fashion/product/1.jpg"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="me-3"
                                                                src="../assets/images/fashion/product/2.jpg"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="total">
                                                        <h5>subtotal : <span>$299.00</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="buttons"><a href="cart.html" class="view-cart">view
                                                            cart</a> <a href="#" class="checkout">checkout</a></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-- Home slider -->
    <section class="p-0">
        <div class="slide-1 home-slider">
            <div>
                <div class="home  text-center">
                    <img src="../assets/images/home-banner/1.jpg" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4>welcome to fashion</h4>
                                        <h1>men fashion</h1>
                                        <a href="#" class="btn btn-solid">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="home text-center">
                    <img src="../assets/images/home-banner/2.jpg" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4>welcome to fashion</h4>
                                        <h1>women fashion</h1>
                                        <a href="#" class="btn btn-solid">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- Paragraph-->
    <div class="title1 section-t-space">
        <h4>special offer</h4>
        <h2 class="title-inner1">Latest Drops</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="product-para">
                    <p class="text-center">Looking for the latest trends in clothing, shoes and accessories? Welcome to our 'Latest Drops' edit, bringing you all the latest styles from all your fave brands.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Paragraph end -->


    <!-- Product slider -->
    <section class="section-b-space pt-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product-4 product-m no-arrow">
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img src="../assets/images/pro3/27.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page(no-sidebar).html"><img src="../assets/images/pro3/28.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                        <i class="ti-shopping-cart"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="ti-reload" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Purple polo tshirt</h6>
                                </a>
                                <h4>$20.00</h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                        sale</span></div>
                                <div class="front">
                                    <a href="product-page(no-sidebar).html">
                                        <img src="../assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img"
                                            alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page(no-sidebar).html"><img src="../assets/images/pro3/2.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                            class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                        title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                        href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a
                                        href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Sleevless white top</h6>
                                </a>
                                <h4>$25.00 <del>$30.00</del></h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                        sale</span></div>
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img src="../assets/images/pro3/33.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page(no-sidebar).html"><img src="../assets/images/pro3/34.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                            class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                        title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                        href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a
                                        href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>multi color polo tshirt</h6>
                                </a>
                                <h4>$65.00</h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img src="../assets/images/pro3/35.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page(no-sidebar).html"><img src="../assets/images/pro3/36.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                            class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                        title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                        href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a
                                        href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Candy red solid tshirt</h6>
                                </a>
                                <h4>$89.00</h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                        sale</span></div>
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img src="../assets/images/pro3/33.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page(no-sidebar).html"><img src="../assets/images/pro3/34.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                            class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                        title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                        href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a
                                        href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>multicolored polo tshirt</h6>
                                </a>
                                <h4>$36.00</h4>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product slider end -->

    @include('layouts.client.footer')

    <!-- facebook chat section start -->
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src =
                'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="2123438804574660" theme_color="#0084ff"
        logged_in_greeting="Hi! Welcome to PixelStrap Themes  How can we help you?"
        logged_out_greeting="Hi! Welcome to PixelStrap Themes  How can we help you?">
    </div>
    <!-- facebook chat section end -->


    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- fly cart ui jquery-->
    <script src="{{ URL::asset('assets/js/jquery-ui.min.js') }}"></script>

    <!-- exitintent jquery-->
    <script src="{{ URL::asset('assets/js/jquery.exitintent.js') }}"></script>
    <script src="{{ URL::asset('assets/js/exit.js') }}"></script>

    <!-- slick js-->
    <script src="{{ URL::asset('assets/js/slick.js') }}"></script>

    <!-- menu js-->
    <script src="{{ URL::asset('assets/js/menu.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ URL::asset('assets/js/lazysizes.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{ URL::asset('assets/js/bootstrap-notify.min.js') }}"></script>

    <!-- Fly cart js-->
    <script src="{{ URL::asset('assets/js/fly-cart.js') }}"></script>

    <!-- Theme js-->
    <script src="{{ URL::asset('assets/js/theme-setting.js') }}"></script>
    <script src="{{ URL::asset('assets/js/script.js') }}"></script>

    <script>
        $(window).on('load', function () {
            setTimeout(function () {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

</body>

</html>