@extends('backLayout.app')
@section('title')
    Mot de Pass
@stop
@section('breadcumb')
    Modifcation mot de pass
@stop
@section('css')
@stop
@section('content')

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">


                <div class="col-md-12">
                    {!! Form::open(['url' => 'password-modifiable']) !!}



                    <div class="form-group">
                        <label for="exampleInputPassword1">Nouveau mot de pass</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez un nouveau mot de pass" name="password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmation nouveau mot de pass</label>
                        <input class="form-control" name="passwordconfirmation" type="password" placeholder="Entrez le meme mot de pass que vous veniez de saisir"/>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Entrez l'ancien mot de pass pour confirmer</label>
                            <input type="password" class="form-control" placeholder="Entrez votre ancien mot pass pour valider la modification" name="oldpassword" >
                        </div>

                        <button type="submit" class="btn btn-default">Enregistrer</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Annuler</button>

                        </form>
                </div>


            </div><!-- .row -->
        </div><!-- .animated -->
    </div>

@endsection
