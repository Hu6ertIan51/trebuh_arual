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
  <link rel="apple-touch-icon" sizes="76x76" href="{{URL::to('img_3/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{URL::to('img_3/logo.png')}}">
  <title>
    Admin Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/f5ffca45f0.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="{{URL::to('css_3/nucleo-icons.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{URL::to('css_3/black-dashboard.css?v=1.0.0')}}" rel="stylesheet" />
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
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Admin Dashboard</h5>
    <ul class="list-group">
      <li class="list-group-item">
        <a href="{{ route('viewJobListings') }}">View Job Listings</a>
      </li>
      <li class="list-group-item">
        <a href="{{ route('viewJobRequests') }}">View Job Requests</a>
      </li>
      <li class="list-group-item">
        <a href="{{ route('viewOngoingJobs') }}">View Ongoing Jobs</a>
      </li>
    </ul>
  </div>
</div>
</body>

</html>