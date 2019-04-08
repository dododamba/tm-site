<!DOCTYPE html>
<html class="no-js" lang="en">
<head>    
    <title>TMP Admin | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Dominique DAMBA" />
    @include('partials.css')
        @yield('css')

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">
    
    
    </head>
    
    <body>

            @include('partials.side')

            <!-- Right Panel -->

            <div id="right-panel" class="right-panel">
        
                <!-- Header-->
            
                @include('partials.top')

                <!-- /header -->
                <!-- Header-->
        
                <div class="breadcrumbs">
                    <div class="col-sm-4">

                    </div>
        
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Tabeau de bord</a></li>
                                    <li class="active"> @yield('breadcumb')</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="content mt-3">
                    <div class="animated fadeIn">
                        <div class="row">
        
                            <div class="col-md-12">
                                <div class="card">
                                   
                                    <div class="card-body">
                                            @yield('content')
                                    </div>
                                </div>
                            </div>
        
        
                        </div>
                    </div>
                </div>
        
            </div>
        
          
        
        @include('partials.js')
        @yield('javascript')
    </body>
</html>
