<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Logo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'logos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'alt', 'media'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
