<!DOCTYPE html>
<html lang="en">
<head>
  <title>Volunteer Devs | Volunteer your skills</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Volunteer developers, giving back to community, top developers, software developers, volunteering">
  <link rel="manifest" href="site.webmanifest"> 
  <link rel="shortcut icon" type="image/x-icon" href="{{url('main/images/favicon.png')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="{{url('main/vendors/owl-carousel/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('main/vendors/owl-carousel/css/owl.theme.default.css')}}">
  <link rel="stylesheet" href="{{url('main/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('main/vendors/aos/css/aos.css')}}">
  <link rel="stylesheet" href="{{url('main/css/style.min.css')}}">
  <link rel="stylesheet" href="{{url('main/css/style.css?1438')}}">
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
        <a href="{{url('/')}}">
          <img class="landing_logo" src="{{url('main/images/logo66.svg')}}" alt="">
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="{{url('main/images/Group2.svg')}}" alt="">
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('jobs')}}">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('profiles')}}">Volunteers</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('profiles/login')}}"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>
          </li>
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
            <a href="{{url('contact')}}">
              <button class="btn btn-info">Contact Support</button>
            </a>
          </li>
        </ul>
      </div>
    </div> 
    </nav>   
  </header>

<x-flash-message />
  <main>
    {{$slot}}
  </main>

   <footer class="border-top">
        <p class="text-center text-muted pt-4">Copyright © 2022 volunteerdevs All rights reserved.</p>
      </footer>
      
    </div> 
  </div>
  <script src="{{url('main/vendors/jquery/jquery.min.js')}}"></script>
  <script src="{{url('main/vendors/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{url('main/vendors/owl-carousel/js/owl.carousel.min.js')}}"></script>
  <script src="{{url('main/vendors/aos/js/aos.js')}}"></script>
  <script src="{{url('main/js/main.js')}}"></script>
</body>
</html>
