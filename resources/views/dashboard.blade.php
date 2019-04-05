@extends('backLayout.app')
@section('title','Tableau de bord')
@section('breadcrumbs')
 Tableau de bord
@stop
@section('content')

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">UTILISATEURS</div>
                    <div class="stat-digit">{{ $user_count  }}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-anchor text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">ROLES</div>
                    <div class="stat-digit">{{ $role_count  }}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-book text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">CONTACTS</div>
                    <div class="stat-digit">{{ $contact_count  }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-bookmark text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">SERVICES</div>
                    <div class="stat-digit">{{ $service_count  }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-list text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">PRODUITS</div>
                    <div class="stat-digit">{{ $produit_count  }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-na text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">TECHNOLOGIES</div>
                    <div class="stat-digit">{{  $technologie_count }}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">CITATIONS</div>
                    <div class="stat-digit">{{ $citation_count  }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">CAROUSELS</div>
                    <div class="stat-digit">{{ $carousel_count  }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">LOGOS</div>
                    <div class="stat-digit">{{  $logo_count }}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">HISTORIQUES</div>
                    <div class="stat-digit">{{ $log_count  }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">IMAGES</div>
                    <div class="stat-digit">{{ $media_count  }}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">MESSAGE DES UTILISATEURS </div>
                    <div class="stat-digit">{{ $message_count  }}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">COORDONEES</div>
                    <div class="stat-digit">{{ $message_count  }}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">MOT DU CEO </div>
                    <div class="stat-digit">{{ $message_count  }}</div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
