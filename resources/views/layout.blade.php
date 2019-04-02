<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dominique DAMBA" />

    <title>TMPartners | @yield('title')</title>
    @include('front.css')
  </head>
  <body>


    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>

  @include('front.top')

  @yield('breadcrumb')
    @yield('content')

  @include('front.carousel')
  @include('front.bottom')
  @include('front.js')


  </body>
</html>
