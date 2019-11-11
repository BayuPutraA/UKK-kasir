<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img//favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Skuy Resto - Manage your business</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/paper-kit.css" rel="stylesheet" />
    <link href="/css/resto-icon.css" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
    <!-- Navbar -->
    @include('landing.landing-nav')
    <!-- End Navbar -->

    <!-- Paralax -->
    <div id="top" class="page-header" data-parallax="true" style="background-image: url('/img/paralax1.jpg');">
        <div class="filter"></div>
        <div class="container">
            <div class="motto text-center">
                <h1>Welcome</h1>
                <h3>Manage your business more easy!</h3>
                <br />
                <a href="#register" class="btn btn-outline-neutral btn-round"><i class=""></i>Start Now</a>
            </div>
        </div>
    </div>
    <!-- End Paralax -->

    <div class="main">
        @include('landing.index')
    </div>
    <div class="footer footer-white">
        @include('layouts.footer')
    </div>

    <!--   Core JS Files   -->
    <script src="/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="/js/core/popper.min.js" type="text/javascript"></script>
    <script src="/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="/js/plugins/moment.min.js"></script>
    <script src="/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>