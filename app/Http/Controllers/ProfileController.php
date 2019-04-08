<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = User::findOrFail(Auth::user()->id);
      $user_pic = $user->current_profile_pict;
     createLog(User::class);
      //return view('backEnd.admin.user.profile',compact($user));
        dd($user_pic);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function password()
    {
        $user = User::findOrFail(Auth::user()->id);

        createLog(User::class);
        return view('backEnd.admin.user.password', compact($user));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function private()
    {
        $user = User::findOrFail(Auth::user()->id);
        createLog(User::class);
        return view('backEnd.admin.user.private', compact($user));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function picture()
    {
        $user = User::findOrFail(Auth::user()->id);
        createLog(User::class);
        return view('backEnd.admin.user.profile_pict', compact($user));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function updated(Request $request,$id)
    {
        if ( User::findOrFail($id))  {
            $user =  User::findOrFail($id);

            $data = [
                'first_name' => $user->first_name,
                'middle_name' => $user->middle_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'password' => $user->password,
                'username' => $user->username,
                'role' => $user->role,
                'statut' => $user->statut
            ];


               if ($user->update($data)) {
                    updateLog(User::class,$id);
                    session()->flash('success','Mise à effectué');
                   return view('backEnd.admin.user.profile',compact($user));

               }else{
                   updateFailureLog(User::class,$id);
                   session()->flash('error','Echec mise à jours');
                   return view('backEnd.admin.user.profile',compact($user));

               }


        }


            updateLog(User::class,$id);
            session()->flash('error','Mise effectué');
        return view('backEnd.admin.user.profile');

    }



    public function changeMyPassword(Request $request)
    {
       $old_password = $request->oldpassword;
       $new_password = $request->password;
       $new_password_confirmation = $request->passwordconfirmation;
       $loged_user_id = (integer)Auth::user()->id;
       $error_password_not_match = "les nouveaux mots de pass saisies ne correspond pas ";
       $password_updated_successfuly = "mot de pass mise à jours avec succès";

      if (strcmp($new_password,$new_password_confirmation) == 0) {
          $user = User::findOrFail($loged_user_id);
         $hashedPassword = $user->password;
         if (Hash::check($old_password, $hashedPassword)) {
           $data = [
             'first_name' => $user->first_name,
             'middle_name' => $user->middle_name,
             'last_name' => $user->last_name,
             'email' => $user->email,
             'password' => bcrypt($new_password),
             'username' => $user->username,
             'role' => $user->role,
             'statut' => $user->statut
           ];

            $user->update($data);
             session()->flash('success', $password_updated_successfuly);
            return redirect('/my-profile');

         }else {
             session()->flash('error', 'L\'ancien mot de pass saisie est incorrect');
             return redirect('/my-profile');
         }
      }else {
          session()->flash('error', $error_password_not_match);
        return redirect('/my-profile');
      }
    }


  public function changeMyPersonnalInformation(Request $request)
  {

    $loged_user_id = (integer)Auth::user()->id;
    $first_name = $request->first_name;
    $last_name = $request->last_name;
    $username = $request->username;
    $email = $request->email;


      $user = User::findOrFail($loged_user_id);
    $password = $request->password;
    $hashedPassword = $user->password;


    if (empty($first_name)) {
      $new_first_name = $user->first_name;
    }else {
      $new_first_name = $request->first_name;
    }

    if (empty($last_name)) {
      $new_last_name = $user->last_name;
    }else {
      $new_last_name = $request->last_name;
    }

    if (empty($username)) {
      $new_username = $user->username;
    }else {
      $new_username = $request->username;
    }

    if (empty($email)) {
      $new_email = $user->email;
    }else {
      $new_email = $request->email;
    }


    if (empty($password)) {
        updateFailureLog(User::class,$loged_user_id);
        session()->flash('error','Entrez votre mot de pass pour confirmer la modification');
      return redirect('/my-profile');
    }else {
      if (Hash::check($password, $hashedPassword)) {
      $data = [
          'first_name' => $new_first_name,
          'last_name' => $new_last_name,
          'email' => $new_email,
          'password' => $user->password,
          'username' => $new_username,
          'role' => $user->role,
          'statut' => $user->statut
        ];

        $user->update($data);
          updateLog(User::class,$loged_user_id);
          session()->flash('success','Mise à effectué');
          return redirect('/my-profile');

      }else {
          updateFailureLog(User::class,$loged_user_id);
          session()->flash('error','Le mot de pass que vous avez saisie est incorrect');
        return redirect('/my-profile');
      }
    }

  }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $format = file_manager()->extension('media');
        $extention = [
            'png', 'PNG', 'JPEG', 'jpeg', 'jpg', 'JPG'
            //'audio'  => ['mp3','MP3','m4a','3gp','wav','bwf','aac'],
            //'video' => ['avi','mp4']
        ];

        if (!in_array($format, $extention)) {
            $token = name_generator('tmp', 10);
            $filename = file_manager()->filename('images/images/' . $token, 'media');
            $data = [
                'nom' => $filename,
                'description' => Str::slug($filename, '-'),
                'alt' => Str::slug($filename, '-'),
                'type' => $format,
                'owner' => Auth::user()->id
            ];

            if (Media::create($data)) {
                file_manager()->store('images/images/' . $token, 'media');
                session()->flash('success', 'image ajouté avec succès ');
                return redirect('myprofile');

            } else {
                session()->flash('error', 'Echec de téléchargement, recommencez ');
                return redirect('myprofile');
            }

        } else {
            session()->flash('error', 'le fichier choisie n\'est pas une image ');
            return redirect('myprofile');


        }


    }

}
