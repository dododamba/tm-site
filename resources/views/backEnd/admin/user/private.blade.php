@extends('backLayout.app')
@section('title')
    Informations personnelles
@stop
@section('breadcumb')
    Modifcation  Informations personnelles
@stop
@section('css')
@stop
@section('content')

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">


                <div class="col-md-12">
                    {!! Form::open(['url' => 'personnal-info-modifiable']) !!}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="text" class="form-control" name="first_name" value="{{ Auth::user()->first_name }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Prenom</label>
                        <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom d'Utilisateur</label>
                        <input type="text" class="form-control" name="username" value="{{ Auth::user()->username }}">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Entrez votre mot de pass pour confirmer la modification</label>
                        <input type="password" class="form-control" name="password" >
                    </div>

                    <button type="submit" class="btn btn-default">Enregistrer</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Annuler</button>

                    </form>
                </div>


            </div><!-- .row -->
        </div><!-- .animated -->
    </div>

@endsection
