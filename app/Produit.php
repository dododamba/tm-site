<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produit extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'produits';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'image', 'icon', 'texte'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
