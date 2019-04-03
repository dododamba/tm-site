@extends('backLayout.app')
@section('title')
    Gallery
@stop
@section('breadcumb')
    Gallery
@stop
@section('css')
    <style>
        .gallery-title
        {
            font-size: 36px;
            color: #42B32F;
            text-align: center;
            font-weight: 500;
            margin-bottom: 70px;
        }
        .gallery-title:after {
            content: "";
            position: absolute;
            width: 7.5%;
            left: 46.5%;
            height: 45px;
            border-bottom: 1px solid #5e5e5e;
        }
        .filter-button
        {
            font-size: 18px;
            border: 1px solid #42B32F;
            border-radius: 5px;
            text-align: center;
            color: #42B32F;
            margin-bottom: 30px;
        
        }
        .filter-button:hover
        {
            font-size: 18px;
            border: 1px solid #42B32F;
            border-radius: 5px;
            text-align: center;
            color: #ffffff;
            background-color: #42B32F;
        
        }
        .btn-default:active .filter-button:active
        {
            background-color: #42B32F;
            color: white;
        }
        
        .port-image
        {
            width: 100%;
        }
        
        .gallery_product
        {
            margin-bottom: 30px;
        }
        

    </style>

@stop

@section('content')




    <h1>
        <div class="DemoModal2">
            <a href=" {{ route('logo.create') }}" class="btn btn-lg btn-primary"
               >Ajouter une image </a>
        </div>
    </h1>


    @if(session()->has('success'))
        @include('alert.alert_success')
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissable">
            @include('alert.alert_error')
        </div>
    @endif

  

    <hr>




    <div class="container">
            <div class="row">
           
            <br/>
    
    
            @foreach($logo as $item)
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="{{ $item->nom }}" alt="{{  $item->alt }}" class="img-responsive">
                    <a href="{{ route('logo.show',$item->id) }}" class="btn btn-secondary mb-1">
                            Voir
                    </a>
                @endforeach

            </div>
        </div>





@endsection
@section('javascript')
    <script>

        $(document).ready(function(){

            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');
                
                if(value == "all")
                {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
        //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
        //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');
                    
                }
            });
            
            if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
        }
        $(this).addClass("active");
        
        });
    </script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

@endsection
