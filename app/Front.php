<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Front extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fronts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['page_name'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
