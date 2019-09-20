<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>The Geniee</title>
  <meta name="description" content="The Geniee">
  <meta name="keywords" content="The Geniee">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/def/flexslider.css">
  <link rel="stylesheet" href="css/def/bootstrap.min.css">
  <link rel="stylesheet" href="css/def/font-awesome.min.css">
  <link rel="stylesheet" href="css/def/style.css">
</head>

<body id="top" data-spy="scroll">
<header id="home">

    <section class="top-nav hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="top-left">

              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>

            </div>
          </div>

          <div class="col-md-6">
            <div class="top-right">
              <p>Location:<span>Unvailable</span></p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!--main-nav-->

    <div id="main-nav">

      <nav class="navbar">
        <div class="container">

          <div class="navbar-header">
            {{-- <a href="index.html" class="navbar-brand">The Geniee</a> --}}
            <img src="{{ asset('public/storage/logo/logo.jpeg') }}" height="50%" width="30%">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
              <span class="sr-only">Toggle</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="navbar-collapse collapse" id="ftheme">

            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ url('/') }}">home</a></li>
              <li><a href="{{ url('/merchant/registration') }}">Become A Partner</a></li>
              <li><a href="#contact">contact</a></li>
              <li class="hidden-sm hidden-xs">
                <a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
              </li>
            </ul>

          </div>

          <div class="search-form">
            <form>
              <input type="text" id="s" size="40" placeholder="Search..." />
            </form>
          </div>

        </div>
      </nav>
    </div>

  </header>