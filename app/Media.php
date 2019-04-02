<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'medias';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'description', 'alt', 'owner'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
