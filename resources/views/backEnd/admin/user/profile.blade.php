@extends('backLayout.app')
@section('title')
Mon profile
@stop
@section('breadcumb')
 Profile
@stop
@section('css')
@stop
@section('content')

    @if(session()->has('success'))
        @include('alert.alert_success')
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissable">
            @include('alert.alert_error')
        </div>
    @endif

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">


                <div class="col-md-12">
                            <div class="mx-auto d-block">
                                <img class="rounded-circle mx-auto d-block" src="{{ Auth::user()->current_profile_pict->nom }}" alt="Card image cap" style="width: 167px;height: 158px;">
                                <h5 class="text-sm-center mt-2 mb-1">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
                                <div class="location text-sm-center">{{ Auth::user()->username }} ({{ Auth::user()->roles->name }})  </div>
                                <div class="col-md-1"></div>
                               <div class="col-md-10">
                                   <ul class="list-group list-group-flush">
                                       <li class="list-group-item">
                                           <a href="#">Nom et Prénom :  <span class="pull-right">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span></a>
                                       </li>
                                       <li class="list-group-item">
                                           <a href="#"> Pseudo :  <span class="pull-right">{{ Auth::user()->username }}</span></a>
                                       </li>
                                       <li class="list-group-item">
                                           <a href="#"> Email  : <span class="pull-right r-activity">{{ Auth::user()->email }}</span></a>
                                       </li>
                                       <li class="list-group-item">
                                           <a href="#"> Profile :  <span class="pull-right r-activity">{{ Auth::user()->roles->name }}</span></a>
                                       </li>

                                       <li class="list-group-item">
                                           <a href="#"> Date de création : <span class="pull-right">{{ Auth::user()->created_at }}</span></a>
                                       </li>


                                   </ul>
                                   <hr>
                                   <div class="clearfix"></div>
                                   <div class="card-text text-sm-center">
                                       <a  href="{{ route('myprofile.picture') }}" class="btn btn-primary"><i class="fa fa-edit"></i>Photo de profile</a>
                                       <a  href="{{ route('myprofile.private') }}" class="btn btn-default"><i class="fa fa-edit"></i>Informations Personnelles</a>
                                       <a  href="{{ route('myprofile.password') }}" class="btn btn-danger"><i class="fa fa-edit"></i>Mot de Pass</a>
                                   </div>
                               </div>

                                <div class="col-md-1"></div>
                            </div>

                </div>


            </div><!-- .row -->
        </div><!-- .animated -->
    </div>

@endsection
