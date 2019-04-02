<!DOCTYPE html>
<html lang="en">


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Dominique DAMBA" />
@include('partials.css')

   @yield('css')



<body class="cbp-spmenu-push">
<div class="main-content">
    @include('partials.side')
    @include('partials.top')
    <div id="page-wrapper">
        <div class="main-page">
            @if(isset($siteTitle))
                <h3 class="title1">
                    @yield('page_name')
                </h3>
            @endif
            <div class="blank-page widget-shadow scroll" id="style-2 div1">
                @yield('content')
            </div>
        </div>
    </div>
    @include('partials.bottom')
</div>
@include('partials.js')
@yield('javascript')
</body>
</html>
