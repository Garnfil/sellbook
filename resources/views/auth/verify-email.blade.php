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
    <title>SellBook - Admin Login</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/fontawesome.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/themify-icons.css') }}">

    <!-- slick icon-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/slick-theme.css') }}">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/jsgrid.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/vendors/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/admin.css') }}">

</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="authentication-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 p-0 card-left">
                        <div class="card bg-primary">
                            <div class="single-item">
                                <div>
                                    <div>
                                        <h3>Welcome to SellBook</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy.</p>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <h3>Welcome to SellBook</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy.</p>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <h3>Welcome to SellBook</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 p-0 card-right">
                        <div class="card tab2-card">
                            <div class="card-body">
                                <h2 class="text-center">Please verify your email address to continue in the
                                    application.</h2>
                                <div class="text-center mt-1">
                                    <form action="#" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary ">Resend Email
                                            Verification</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="{{ URL::asset('assets/js/slick.js') }}"></script>

    <!-- Jsgrid js-->
    <script src="{{ URL::asset('assets/js/jsgrid/jsgrid.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jsgrid/griddata-invoice.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jsgrid/jsgrid-invoice.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ URL::asset('assets/js/lazysizes.min.js') }}"></script>

    <!--right sidebar js-->
    <script src="{{ URL::asset('assets/js/chat-menu.js') }}"></script>

    <!--script admin-->
    <script src="{{ URL::asset('assets/js/admin-script.js') }}"></script>
    <script>
        $('.single-item').slick({
            arrows: false,
            dots: true
        });
    </script>

</body>

</html>
