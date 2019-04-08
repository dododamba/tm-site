<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commentaire extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'commentaires';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['contenu', 'user', 'article'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
