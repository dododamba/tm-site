<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','middle_name','last_name', 'email', 'password','username','role','statut','remember_token','confirm_token','reset_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role');
    }

    private function checkIfUserHasRole($need_role)
   {
       return (strtolower($need_role)==strtolower($this->roles->name)) ? true : null;
   }

   public function hasRole($roles)
   {
       if (is_array($roles))
       {

           foreach ($roles as $need_role)
           {
               if ($this->checkIfUserHasRole($need_role))
               {
                   return true;
               }
           }
       } else{
           return $this->checkIfUserHasRole($roles);
       }
       return false;
   }

    public function photos()
    {
        $logged_user_id = Auth::user()->id;
        return Media::all()->where('owner',$logged_user_id);
    }

    public function current_profile_pict()
    {
        return $this->hasMany(Media::class,'owner')->orderBy('created_at','desc');
    }
}
