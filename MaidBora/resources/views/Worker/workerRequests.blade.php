<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
        Accepted Jobs
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{URL::to('css_1/soft-design-system.css?v=1.0.9')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<body class="sign-in-illustration">
  <!-- Navbar -->
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">On-going jobs </h4>
                <ul>
                </div>
              @if ($WongoingJobs->isEmpty())
        <p>You have no ongoing jobs.</p>
    @else
        <ul>
            @foreach ($WongoingJobs as $jobRequest)
            <li>
                <p>Job Title: {{ $jobRequest->joblist->jobTitle }}</p>
                    <p>Employment Type: {{ $jobRequest->joblist->employmentType }}</p>
                        <p>Salary: {{ $jobRequest->joblist->salary }}</p>
                            <form action="{{ route('WorkerRateForm')}}" method="" class="d-flex">
                                @csrf
                                    <button type="submit" class="btn btn-sm bg-gradient-primary btn-lg me-2 w-50">RATE EMPLOYER</button>
                             </form>
                             <form action="{{ route('WorkerRateForm')}}" method="" class="d-flex">
                                @csrf
                                    <button type="submit" class="btn btn-sm bg-gradient-primary btn-lg me-2 w-50">VIEW PROFILE</button>
                             </form>
            </li>
            @endforeach
        </ul> @endif


             
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
              <script src="{{URL::to('js_1/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{URL::to('js_1/core/bootstrap.min.js')}}" type="text/javascript"></script>
  
  <script src="{{URL::to('js_1/plugins/perfect-scrollbar.min.js')}}"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="{{URL::to('js_1/soft-design-system.min.js?v=1.0.9')}}" type="text/javascript"></script>
</body>

</html>