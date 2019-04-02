@extends('layout')
@section('title','Service détail')
@section('breadcrumb')

    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Détail Service</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('main') }}">Accueil</a></li>
                            <li><a href="{{ route('main') }}">Service</a></li>
                            <li class="active">Détail</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')


    <section id="mu-course-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-course-content-area">
                        <div class="row">
                            <div class="col-md-9">
                                <!-- start course content container -->


                                <!-- end course content container -->
                                <!-- start related course item -->

                            </div>

                            <div class="col-md-3">
                                <!-- start sidebar -->
                                @include('front.side')
                                <!-- / end sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
