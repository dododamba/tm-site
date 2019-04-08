<?php

namespace App\Http\Controllers\Blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use APP\Models\Blog\Article;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $article = Article::all();
        defaultLog(Article::class);
        return view('backEnd.admin.blog.article.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        createLog(Article::class);
        return view('backEnd.admin.blog.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
     
         if ( Article::create($request->all())) {
           session()->flash('message', tableName( Article::class).' ajouté avec succès, id = '.lastChild( Article::class));
           storeLog( Article::class);
           return redirect('apropos');

       }
        createFailureLog( Article::class);
        return redirect('article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
     
         if (Article::findOrFail($id))   {
            $article = Article::findOrFail($id);
            showLog(Article::class,$id);
            return view('backEnd.admin.blog.article.show', compact('article'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Article::class,$id);
        return view('backEnd.admin.apropos.show', compact('apropos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
       
         if (Article::findOrFail($id))   {
            $article = Article::findOrFail($id);
            editLog(Article::class,$id);
                   return view('backEnd.admin.blog.article.edit', compact('article'));

        }

         editFailureLog(Article::class,$id);
         session()->flash('error', ' l\'arcticle n\'existe pas !');
         return view('backEnd.admin.blog.article.index');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
      
          if (Article::findOrFail($id)){
           $article =  Article::findOrFail($id);

           if ($article->update($request->all())){
               session()->flash('success', 'Resource mise à jours avec succès!');
               updateLog(Article::class,$id);
               return redirect('article');
           }
       }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Article::class,$id);
        return redirect('article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
     
         if (Article::findOrFail($id))   {
            $article = Article::findOrFail($id);
            $article->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Article::class,$id);
            return redirect('article');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Article::class,$id);
        return redirect('article');
    }

}
