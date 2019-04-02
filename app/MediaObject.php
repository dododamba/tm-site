<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MediaObject extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mediaobjects';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['media', 'objet'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
