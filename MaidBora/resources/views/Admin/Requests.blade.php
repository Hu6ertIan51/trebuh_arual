<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::to('img_3/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ URL::to('img_3/logo.png') }}">
  <title>
    Admin Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/f5ffca45f0.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="{{ URL::to('css_3/nucleo-icons.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ URL::to('css_3/black-dashboard.css?v=1.0.0') }}" rel="stylesheet" />
  <style>
    /* Custom CSS for animations */
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="search-bar input-group">
            <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i
                class="tim-icons icon-zoom-split"></i>
              <span class="d-lg-none d-md-block">Search</span>
            </button>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <div class="photo">
                <img src="{{ URL::to('img_3/anime3.png') }}" alt="Profile Photo">
              </div>
              <b class="caret d-none d-lg-block d-xl-block"></b>
              <p class="d-lg-none">
                Log out
              </p>
            </a>
            <ul class="dropdown-menu dropdown-navbar">
              <li class="dropdown-divider"></li>
              <li class="nav-link"><a href="{{ route('logout') }}" class="nav-item dropdown-item">Log out</a></li>
            </ul>
          </li>
          <li class="separator d-lg-none"></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
    aria-hidden="true">
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

  <div class="container">
    <h1>All Job Requests</h1>
    <div class="card mb-4">
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">User</th>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Job Title</th>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status</th>
            </thead>
            <tbody>
              @isset($jobRequests)
              @forelse ($jobRequests as $jobRequest)
              <tr>
                <td><p class = "align-middle" class="align-middle text-xs px-3 mb-0">{{ $jobRequest->user->firstname}}</p></td>
                <td><p class="align-middle text-xs px-3 mb-0">{{ $jobRequest->joblist->jobID}}</p></td>
                <td><p class="align-middle text-xs px-3 mb-0">{{ $jobRequest->status}}</p></td>
              </tr>
              @empty
              <tr>
                <td colspan="5">No records found</td>
              </tr>
              @endforelse
              @else
              <tr>
                <td colspan="5">No records found</td>
              </tr>
              @endisset
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center mt-5">
    <a class="btn btn-primary" href="{{ route('JobsMain') }}">
      <i class="fa-solid fa-chevron-left"></i> GO BACK
    </a>
  </div>

  <div class="fixed-plugin">
    <!-- The rest of the code for the fixed-plugin if required -->
  </div>

  <!--   Core JS Files   -->
  <script src="{{ URL::to('js_3/core/jquery.min.js') }}"></script>
  <script src="{{ URL::to('js_3/core/popper.min.js') }}"></script>
  <script src="{{ URL::to('js_3/core/bootstrap.min.js') }}"></script>
  <script src="{{ URL::to('js_3/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ URL::to('js_3/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function () {
      $().ready(function () {
        // The rest of the code for the theme
      });
    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free",
      });
  </script>
</body>

</html>
