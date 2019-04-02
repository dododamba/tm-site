<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MessageContact extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'messagecontacts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'email', 'sujet', 'message'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
