<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MessageBienvenu extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'messagebienvenus';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['message'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
