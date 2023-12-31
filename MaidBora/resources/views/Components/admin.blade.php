<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::to('img_3/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ URL::to('img_3/logo.png') }}">
  <title>Admin Dashboard</title>
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f5ffca45f0.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="{{ URL::to('css_3/nucleo-icons.css') }}" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ URL::to('css_3/black-dashboard.css?v=1.0.0') }}" rel="stylesheet">
  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    .fade-in {
      animation: fadeIn 1s ease-in;
    }
  </style>
</head>

<body class="fade-in">
  <div class="wrapper">
    <div class="sidebar">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a class="simple-text logo-normal">
            Admin Dashboard
          </a>
          <a class="simple-text logo-normal">
            {{ $user->firstname }}'s Dashboard
          </a>
        </div>
        <ul class="nav">
          <li class="active">
            <a href="{{ route('viewUsers') }}">
              <i class="fa-solid fa-users"></i>
              <p>View Users</p>
            </a>
          </li>
          <li class="active">
            <a href="{{ route('addUserAdmin') }}">
              <i class="fa-solid fa-users"></i>
              <p>ADD ADMINS / USERS</p>
            </a>
          </li>
          <li class="active">
            <a href="{{ route('JobsMain') }}">
              <i class="fa-solid fa-magnifying-glass"></i>
              <p>View Jobs</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal">
                  <i class="tim-icons icon-zoom-split"></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="{{ URL::to('img_3/anime3.png') }}" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">Log out</p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                    <a href="{{ route('logout') }}" class="nav-item dropdown-item">Log out</a>
                  </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
          <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"></i>
          </a>
          <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
              <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors text-center">
                  <span class="badge filter badge-primary active" data-color="primary"></span>
                  <span class="badge filter badge-info" data-color="blue"></span>
                  <span class="badge filter badge-success" data-color="green"></span>
                </div>
                <div class="clearfix"></div>
              </a>
            </li>
            <li class="adjustments-line text-center color-change">
              <span class="color-label">LIGHT MODE</span>
              <span class="badge light-badge mr-2"></span>
              <span class="badge dark-badge ml-2"></span>
              <span class="color-label">DARK MODE</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- Core JS Files -->
      <script src="{{ URL::to('js_3/core/jquery.min.js') }}"></script>
      <script src="{{ URL::to('js_3/core/popper.min.js') }}"></script>
      <script src="{{ URL::to('js_3/core/bootstrap.min.js') }}"></script>
      <script src="{{ URL::to('js_3/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
      <!-- Google Maps Plugin -->
      <!-- Place this tag in your head or just before your close body tag. -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Chart JS -->
      <script src="../assets/js/plugins/chartjs.min.js"></script>
      <!-- Notifications Plugin -->
      <script src="{{ URL::to('js_3/plugins/bootstrap-notify.js') }}"></script>
      <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
      <!-- Black Dashboard DEMO methods, don't include it in your project! -->
      <script src="../assets/demo/demo.js"></script>
      <script>
        $(document).ready(function() {
          $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');
            $full_page = $('.full-page');
            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;
            window_width = $(window).width();
            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
            $('.fixed-plugin a').click(function(event) {
              if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                  event.stopPropagation();
                } else if (window.event) {
                  window.event.cancelBubble = true;
                }
              }
            });
            $('.fixed-plugin .background-color span').click(function() {
              $(this).siblings().removeClass('active');
              $(this).addClass('active');
              var new_color = $(this).data('color');
              if ($sidebar.length != 0) {
                $sidebar.attr('data', new_color);
              }
              if ($main_panel.length != 0) {
                $main_panel.attr('data', new_color);
              }
              if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
              }
              if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data', new_color);
              }
            });
            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
              var $btn = $(this);
              if (sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                sidebar_mini_active = false;
                blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
              } else {
                $('body').addClass('sidebar-mini');
                sidebar_mini_active = true;
                blackDashboard.showSidebarMessage('Sidebar mini activated...');
              }
              // we simulate the window Resize so the charts will get updated in realtime.
              var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
              }, 180);
              // we stop the simulation of Window Resize after the animations are completed
              setTimeout(function() {
                clearInterval(simulateWindowResize);
              }, 1000);
            });
            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
              var $btn = $(this);
              if (white_color == true) {
                $('body').addClass('change-background');
                setTimeout(function() {
                  $('body').removeClass('change-background');
                  $('body').removeClass('white-content');
                }, 900);
                white_color = false;
              } else {
                $('body').addClass('change-background');
                setTimeout(function() {
                  $('body').removeClass('change-background');
                  $('body').addClass('white-content');
                }, 900);
                white_color = true;
              }
            });
            $('.light-badge').click(function() {
              $('body').addClass('white-content');
            });
            $('.dark-badge').click(function() {
              $('body').removeClass('white-content');
            });
          });
        });
      </script>
      <script>
        $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          demo.initDashboardPageCharts();
        });
      </script>
      <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
      <script>
        window.TrackJS && TrackJS.install({
          token: "ee6fab19c5a04ac1a32a645abde4613a",
          application: "black-dashboard-free"
        });
      </script>
    </body>
    </html>
