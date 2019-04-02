<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordonee extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'coordonees';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'altitude', 'longitude'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
