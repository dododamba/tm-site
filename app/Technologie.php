<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technologie extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'technologies';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'image', 'icon', 'description'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
