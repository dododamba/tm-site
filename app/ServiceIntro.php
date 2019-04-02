<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceIntro extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'serviceintros';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['texte'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
