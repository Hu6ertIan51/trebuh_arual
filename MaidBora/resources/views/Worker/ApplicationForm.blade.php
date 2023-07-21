<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Apply for the job
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
  <!-- Navbar -->
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
<h4 class="font-weight-bolder">APPLY</h4>
                <p class="mb-0">Type your details to apply to this job</p>
              </div>
              <div class="card-body">
                <form role="form" action = "{{route('authenticate')}}" method = "POST" class = "needs-validation" novalidate ="">
                  @csrf
                  <div class="mb-3">
                    <input type="text" required name = "username" class="form-control form-control-lg" placeholder="Username" value = "{{old('username')}}" 
                    tabindex = "1" required = "required" autofocus= "autofocus">
                  </div>
                  <div class="mb-3">
                    <input type="text" required name = "age" class="form-control form-control-lg" placeholder="Age" 
                    value = "" required = "required">
                  </div>
                  <div class="mb-3">
                    <input type="text" required name = "location" class="form-control form-control-lg" placeholder="location" 
                    value = "" required = "required">
                  </div>
                  <div class="mb-3">
                    <input type="text" required name = "password" class="form-control form-control-lg" placeholder="Expected Salary" 
                    value = "" required = "required">
                  </div>
                  <div class="mb-3">
                    <input type="text" required name = "password" class="form-control form-control-lg" placeholder="Your description" 
                    value = "" required = "required">
                  </div>
                <div class="mb-3">
                    <input type="text" required name = "password" class="form-control form-control-lg" placeholder="Work-type" 
                    value = "" required = "required">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">SEND REQUEST</button>
                  </div>
                </form>
              </div>
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