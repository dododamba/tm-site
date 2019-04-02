<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Hash;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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
      return view('backEnd.admin.user.profile',compact($user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function updated($data,$id)
    {
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

        $user->update($data);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function show($id)
    {
        return User::findOrFail($id);
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
         $user = $this->show($loged_user_id);
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
            flashy()->success($password_updated_successfuly, '');
            return redirect('/my-profile');

         }else {

         }
      }else {
        flashy()->error($error_password_not_match, '');
        return redirect('/my-profile');
      }
    }

    public function basic_email() {
          $data = array('name'=>"Sensei takezo");

          Mail::send(['text'=>'mail.password_updated'], $data, function($message) {
             $message->to('dominicdamba95@gmail.com', 'Tutorials Point')->subject
                ('Laravel Basic Testing Mail');
             $message->from('dominicdamba95@gmail.com','Dominique DAMBA');
          });
          echo "Basic Email Sent. Check your inbox.";
       }


  public function changeMyPersonnalInformation(Request $request)
  {

    $loged_user_id = (integer)Auth::user()->id;
    $first_name = $request->first_name;
    $last_name = $request->last_name;
    $username = $request->username;
    $email = $request->email;



    $new_first_name = '';
    $new_last_name = '';
    $new_username = '';
    $new_email = '';

    $user = $this->show($loged_user_id);
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
      flashy()->error('Entrez votre mot de pass pour confirmer la modification','');
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
        flashy()->success('Mise à jours effectué avec succès', '');
        return redirect('/my-profile');

      }else {
        flashy()->error('Le mot de pass que vous avez saisie est incorrect','');
        return redirect('/my-profile');
      }
    }

  }

}
