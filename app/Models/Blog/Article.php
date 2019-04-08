<?php

namespace App\Models\Blog;

use App\Media;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titre', 'contenu', 'date_creation', 'categorie', 'brouillon', 'auteur'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'tag_articles');
    }

    public function medias()
    {
        return $this->belongsToMany(Media::class,'media_articles');
    }

    public function author()
    {
        return $this->belongsTo(User::class,'auteur');
    }

    public function category()
    {
        return $this->belongsTo(Categorie::class,'categorie');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class,'id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class,'id');
    }

    public function shares()
    {

    }

}
