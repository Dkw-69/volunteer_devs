<!DOCTYPE html>
<html lang="en">
<head>
  <title>Volunteerdevs | Volunteer dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="{{url('main/images/favicon.png')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="{{url('main/vendors/owl-carousel/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('main/vendors/owl-carousel/css/owl.theme.default.css')}}">
  <link rel="stylesheet" href="{{url('main/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('main/vendors/aos/css/aos.css')}}">
  <link rel="stylesheet" href="{{url('main/css/style.min.css')}}">
  <link rel="stylesheet" href="{{url('main/css/style.css?4466')}}">
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
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
          @auth
          <li class="nav-item px-5">Hello <span style="color: #5ed6b3; padding-left: 5px; font-weight: bold;">{{Auth::user()->name}}</span></li>
          <li class="nav-item">
            <form class="inline" method="POST" action="{{url('logout')}}">
                @csrf
                <button class="btn btn-light" type="submit">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </button>
            </form>
          </li>
          @else
          <div class="navbar-brand-wrapper d-flex w-100">
            <a href="{{url('/')}}">
              <img src="{{url('main/images/Group2.svg')}}" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-menu navbar-toggler-icon"></span>
            </button> 
          </div>
          @endauth
        </ul>
      </div>
    </div> 
    </nav>   
  </header>
  <x-flash-message />