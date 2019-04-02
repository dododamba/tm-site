<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Icon extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'icons';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'lien', 'faicon'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
