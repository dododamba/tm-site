<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carousel extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'carouseltables';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [ 'lien', 'texte','statut','media'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function image()
    {
       return $this->hasOne('App\Media','id');
    }

}
