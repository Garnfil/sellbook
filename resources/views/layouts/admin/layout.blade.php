<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>SellBook - Admin Dashboard</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/fontawesome.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/flag-icon.css') }}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/icofont.css') }}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/prism.css') }}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/chartist.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/admin.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none w-auto">
                    <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded"
                                src="../assets/images/dashboard/multikart-logo.png" alt=""></a></div>
                </div>
                <div class="mobile-sidebar w-auto">
                    <div class="media-body text-end switch-sm">
                        <label class="switch"><a href="#"><i id="sidebar-toggle"
                                    data-feather="align-left"></i></a></label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
                        <li>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input class="form-control-plaintext" type="search" placeholder="Search.."><span
                                        class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                                </div>
                            </form>
                        </li>
                        <li class="onhover-dropdown"><i data-feather="bell"></i><span
                                class="badge badge-pill badge-primary pull-right notification-badge">3</span><span
                                class="dot"></span>
                            <ul class="notification-dropdown onhover-show-div p-0">
                                <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0"><span><i class="shopping-color"
                                                        data-feather="shopping-bag"></i></span>Your order ready for
                                                Ship..!</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-success"><span><i class="download-color font-success"
                                                        data-feather="download"></i></span>Download Complete</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-danger"><span><i class="alert-color font-danger"
                                                        data-feather="alert-circle"></i></span>250 MB trash files</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="txt-dark"><a href="#">All</a> notification</li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="media align-items-center"><img
                                    class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded"
                                    src="../assets/images/dashboard/man.png" alt="header-user">
                                <div class="dotted-animation"><span class="animate-circle"></span><span
                                        class="main-circle"></span></div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                                <li><a href="#"><i data-feather="user"></i>Edit Profile</a></li>
                                <li><a href="#"><i data-feather="mail"></i>Inbox</a></li>
                                <li><a href="#"><i data-feather="lock"></i>Lock Screen</a></li>
                                <li><a href="#"><i data-feather="settings"></i>Settings</a></li>
                                <form action="{{ route('admin.logout') }}" method="post">
                                    @csrf
                                    <li>
                                        <button class="dropdown-item"><i data-feather="log-out"></i> Logout</button>
                                    </li>
                                </form>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded"
                                src="{{ URL::asset('assets/images/dashboard/multikart-logo.png') }}"
                                alt=""></a></div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <div class="sidebar-user text-center">
                        <div><img class="img-60 rounded-circle lazyloaded blur-up"
                                src="{{ URL::asset('assets/images/dashboard/man.png') }}" alt="#">
                        </div>
                        <h6 class="mt-3 f-14">{{ auth()->user()->username }}</h6>
                        <p>{{ auth()->user()->email }}</p>
                    </div>
                    @include('layouts.admin.menu')
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <div class="page-body">
                @yield('content')
            </div>

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2019 © Multikart All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>

    </div>

    <!-- latest jquery-->
    <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ URL::asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>

    <!-- Sidebar jquery-->
    <script src="{{ URL::asset('assets/js/sidebar-menu.js') }}"></script>

    <!-- touchspin js-->
    <script src="{{ URL::asset('assets/js/touchspin/vendors.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/touchspin/touchspin.js') }}"></script>
    <script src="{{ URL::asset('assets/js/touchspin/input-groups.min.js') }}"></script>

    <!-- form validation js-->
    <script src="{{ URL::asset('assets/js/dashboard/form-validation-custom.js') }}"></script>

    <!-- ckeditor js-->
    {{-- <script src="{{ URL::asset('assets/js/editor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('assets/js/editor/ckeditor/styles.js') }}"></script>
    <script src="{{ URL::asset('assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
    <script src="{{ URL::asset('assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script> --}}

    <!-- Zoom js-->
    <script src="{{ URL::asset('assets/js/jquery.elevatezoom.js') }}"></script>
    <script src="{{ URL::asset('assets/js/zoom-scripts.js') }}"></script>

    <!--chartist js-->
    <script src="{{ URL::asset('assets/js/chart/chartist/chartist.js') }}"></script>

    <!--chartjs js-->
    <script src="{{ URL::asset('assets/js/chart/chartjs/chart.min.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ URL::asset('assets/js/lazysizes.min.js') }}"></script>

    <!--copycode js-->
    <script src="{{ URL::asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom-card/custom-card.js') }}"></script>

    <!--counter js-->
    <script src="{{ URL::asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/counter/counter-custom.js') }}"></script>

    <!--peity chart js-->
    <script src="{{ URL::asset('assets/js/chart/peity-chart/peity.jquery.js') }}"></script>

    <!--sparkline chart js-->
    <script src="{{ URL::asset('assets/js/chart/sparkline/sparkline.js') }}"></script>

    <!--Customizer admin-->
    <script src="{{ URL::asset('assets/js/admin-customizer.js') }}"></script>

    <!--dashboard custom js-->
    <script src="{{ URL::asset('assets/js/dashboard/default.js') }}"></script>

    <!--right sidebar js-->
    <script src="{{ URL::asset('assets/js/chat-menu.js') }}"></script>

    <!--height equal js-->
    <script src="{{ URL::asset('assets/js/height-equal.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ URL::asset('assets/js/lazysizes.min.js') }}"></script>

    <!--script admin-->
    <script src="{{ URL::asset('assets/js/admin-script.js') }}"></script>

    <!--custom script-->
    <script src="{{ URL::asset('assets/js/custom-script.js') }}"></script>

    <<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>

    @stack('scripts')

</body>

</html>
