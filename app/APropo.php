<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class APropo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'apropos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titre', 'text', 'image', 'texte'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
