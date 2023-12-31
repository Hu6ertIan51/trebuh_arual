<!--
=========================================================
* Soft UI Design System - v1.0.9
=========================================================

* Product Page:  https://www.creative-tim.com/product/soft-ui-design-system 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    MaidBora - Login page
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
                <h4 class="font-weight-bolder">Worker Details</h4>
                <p class="mb-0">Fill in your details to finish</p>
              </div>
              <div class="card-body">
                <form role="form" action = "{{route('WorkDetails')}}" method = "POST">
                  @csrf
                  <div class="mb-3">
                    <input type="text" required name = "YearsExperienced" class="form-control form-control-lg" placeholder="Years of experience" aria-label="ID" >
                  </div>
                  <div class="mb-3">
                    <input type="text" required name= "WorkType" class="form-control form-control-lg" placeholder="Work Type" aria-label="Work Type" >
                  </div>
                  <div class="mb-3">
                    <input type="text" required name = "WorkingHours" class="form-control form-control-lg" placeholder="Work Hours" aria-label="Work Hours" >
                  </div>
                  <div class="mb-3">
                    <input type="text" required name = "Expectedsalary" class="form-control form-control-lg" placeholder="Expected_salary" aria-label="Expected salary" >
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">NEXT</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Have an account?
                  <a href="{{URL::to('User/SignIn')}}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="{{URL::to('img_1/shapes/pattern-lines.svg')}}" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-100 position-relative z-index-2" src="{{URL::to('img/logo.png')}}">
              </div>
              <h4 class="mt-5 text-white font-weight-bolder">Need a cleaner to clean your house</h4>
              <p class="text-white">We'll find the right cleaner for your house.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--   Core JS Files   -->
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