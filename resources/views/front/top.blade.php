<!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span> {{ $contact->email }}</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span> {{ $contact->telephone }}</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                        @foreach ( $icons as $item )
                        <li><a href="{{ $item->lien }}" target="_blank"><span class="fa {{ $item->faicon }}"></span></a></li>
                        @endforeach
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="row" style="display : inline-block;"><a class="navbar-brand " href="{{ route('main') }}"><img src="{{ asset('front') }}/assets/img/logo.png" alt="TMP" style="width: 100px;height: 100px;"></a> <h2 style="  float: right;padding-top : 15%;color: #333;">TM PARTNERS</h2>
          </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="{{ route('main') }}">Accueil</a></li>
            <li><a href="{{ route('apropo') }}">A Propos</a></li>
            <li><a href="{{ route('services') }}">Services & Produits</a></li>
            <li><a href="{{ route('contacts') }}">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->