@extends('backLayout.app')
@section('title')
Mon profile
@stop
@section('css')
@stop
@section('content')
@include('flashy::message')
<div class="emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Changer Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h3>
                                      <p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                                    </h3>
                                    <h6>
                                        {{ Auth::user()->roles->name }}
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div id="myTabContent">
                            <div id="profile" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom et Prénom : </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pseudo : </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->username }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date d'inscription : </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->created_at }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email : </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Téléphone : </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>+24106063900</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                          <input data-toggle="modal" data-target="#squarespaceModal" class="btn btn-warning" value="Editer le profile"/>
                                          <input data-toggle="modal" data-target="#changepassword" class="btn btn-danger" value="Changer mot de pass"/>
                                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>



        <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
        	<div class="modal-content">
        		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">X</span></button>
        			<h3 class="modal-title" id="lineModalLabel">Modification profile</h3>
        		</div>
        		<div class="modal-body">

                    <!-- content goes here -->
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

        	</div>
          </div>
        </div>



        <div class="modal fade" id="changepassword" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Modification mot de pass</h3>
		</div>
		<div class="modal-body">

            <!-- content goes here -->





            {!! Form::open(['url' => 'password-modifiable']) !!}



              <div class="form-group">
                <label for="exampleInputPassword1">Nouveau mot de pass</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez un nouveau mot de pass" name="password">
              </div>

                  <div class="form-group">
                              <label for="exampleInputPassword1">Confirmation nouveau mot de pass</label>
                              <input class="password" name="passwordconfirmation" type="password" placeholder="Entrez le meme mot de pass que vous veniez de saisir"/>

                            <div class="form-group">
                              <label for="exampleInputPassword1">Entrez l'ancien mot de pass pour confirmer</label>
                              <input type="password" class="form-control" placeholder="Entrez votre ancien mot pass pour valider la modification" name="oldpassword" >
                            </div>

                            <button type="submit" class="btn btn-default">Enregistrer</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Annuler</button>

          </form>

		</div>

	</div>
  </div>
</div>

</script>
        @endsection
