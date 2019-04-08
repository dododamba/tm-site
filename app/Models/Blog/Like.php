<?php

namespace App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'likes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['like', 'is_validated', 'article', 'auteur'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
