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
  <link href="{{ URL::to('css_3/nucleo-icons.css') }}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{ URL::to('css_3/black-dashboard.css?v=1.0.0') }}" rel="stylesheet" />
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
  <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <!-- Navbar content here -->
  </nav>

  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <div class="container">
    <h1 class="simple-text logo-normal">All Users</h1>
    <div class="card mb-4">
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">ID</th>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Names</th>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Username</th>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Role</th>
              <th class="align-middle text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Actions</th>
            </thead>
            <tbody>
              @forelse($users as $user)
                <tr>
                  <td>
                    <p class="align-middle text-xs px-3 font-weight-bold mb-0">{{ $user->id }}</p>
                  </td>
                  <td>
                    <p class="align-middle text-xs px-3 mb-0">{{ $user->firstname }} {{ $user->lastname }}</p>
                  </td>
                  <td>
                    <p class="align-middle text-xs px-3 mb-0">{{ $user->username }}</p>
                  </td>
                  <td>
                    <p class="align-middle text-xs px-3 mb-0">{{ $user->role }}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <form action="{{ route('deleteUser', ['id' => $user->id]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-link">
                        <i class="fa-solid fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5">No records found</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center mt-5">
    <a class="btn btn-primary" href="{{ route('dashboard') }}">
      <i class="fa-solid fa-chevron-left"></i> GO BACK
    </a>
  </div>

  <div class="fixed-plugin">
    <!-- The rest of the code for the fixed-plugin if required -->
  </div>

  <!-- Core JS Files -->
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
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

  <script>
    $(document).ready(function () {
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
