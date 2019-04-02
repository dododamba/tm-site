<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarouselCitation extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'carouselcitations';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['texte', 'auteur'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
