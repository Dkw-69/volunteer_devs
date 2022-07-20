<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{url('main/images/favicon.png')}}">
    <title>Vounteerdevs | Admin area</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{url('admin_assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!-- CUSTOM STYLES-->
    <link href="{{url('admin_assets/css/custom.css?247')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
          
<div id="wrapper">
 <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="adjust-nav">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('admin')}}">
              <img src="{{url('main/images/logo66.svg')}}" />
          </a>
        </div>
         <span class="logout-spn" style="font-size: 20px; margin-top: 20px;">
            <form class="inline" method="POST" action="{{url('logout')}}">
                @csrf
                <button class="btn btn-light" type="submit">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </button>
            </form>
         </span>
         <span class="logout-spn" style="font-size: 15px; margin-top: 20px;">
          <a href="{{url('/')}}" style="color:#fff;">VIEW WEBSITE</a>
         </span>
         @auth
            <span class="logout-spn mt-1" style="font-size: 15px; margin-top: 20px;">Hi there admin, {{Auth::user()->name}}</span>
         @endauth
    </div>
</div>
    <!-- /. NAV TOP  -->