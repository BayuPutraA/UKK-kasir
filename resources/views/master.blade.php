<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="csrf-token" content="width=device-width, initial-scale=1.0">
    <title>Skuy Resto - </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- bootstrap  -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/paper-dashboard.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
     
</head>
<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
          <!--
            Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
        -->
          <div class="logo">
              
            <a href="#" class="simple-text logo-normal text-center">
                Skuy Resto
              <!-- <div class="logo-image-big">
                <img src="../assets/img/logo-big.png">
              </div> 
            <a href="#" class="simple-text logo-mini">
                <div class="logo-image-small">
                  <img src="">
                </div>
              </a>
            -->
            </a>
          </div>
          <div class="sidebar-wrapper">
            <ul class="nav">
              <li class="active ">
                <a href="./dashboard">
                  <i class="nc-icon nc-bank"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li>
                <a href="./icons.html">
                  <i class="nc-icon nc-calendar-60"></i>
                  <p>Pemesanan</p>
                </a>
              </li>
              <li>
                <a href="./user.html">
                  <i class="nc-icon nc-money-coins"></i>
                  <p>Pembayaran</p>
                </a>
              </li>
              <li>
                <a href="./tables.html">
                  <i class="nc-icon nc-book-bookmark"></i>
                  <p>List Menu</p>
                </a>
              </li>
              <li>
                <a href="./typography.html">
                  <i class="nc-icon nc-paper"></i>
                  <p>Report</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Skuy Dashboard</a>
            <span onclick='return false;'></span>
            <p class="navbar-brand"></p>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class=""></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-single-02"></i>
                  <p>
                      <span class="d-lg-none d-md-block">Some Actions</span>
                    
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
        </div>
        <div class="content">
          
        </div>
      


      <script src="/js/core/jquery.min.js"></script>
      <script src="/js/core/popper.min.js"></script>
      <script src="/js/core/bootstrap.min.js"></script>
      <script src="/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Chart JS -->
      <script src="/js/plugins/chartjs.min.js"></script>
      <!--  Notifications Plugin    -->
      <script src="/js/plugins/bootstrap-notify.js"></script>
      <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
      <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
      <script src="/demo/demo.js"></script>
      <script>
        $(document).ready(function() {
          // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
          demo.initChartsPages();
    });
  </script>
</body>
</html>