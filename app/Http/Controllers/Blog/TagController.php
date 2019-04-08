<?php

namespace App\Http\Controllers\Blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Blog\Tag;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class TagController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tag = Tag::all();
        defaultLog(Tag::class);
        return view('backEnd.admin.blog.tag.index', compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        createLog(Tag::class);
        return view('backEnd.admin.blog.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
     
         if ( Tag::create($request->all())) {
           session()->flash('message', tableName( Tag::class).' ajouté avec succès, id = '.lastChild( Tag::class));
           storeLog( Tag::class);
           return redirect('apropos');

       }
        createFailureLog( Tag::class);
        return redirect('tag');
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
     
         if (Tag::findOrFail($id))   {
            $tag = Tag::findOrFail($id);
            showLog(Tag::class,$id);
            return view('backEnd.admin.blog.tag.show', compact('tag'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Tag::class,$id);
        return view('backEnd.admin.tag.show', compact('tag'));

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
       
         if (Tag::findOrFail($id))   {
            $tag = Tag::findOrFail($id);
            editLog(Tag::class,$id);
                   return view('backEnd.admin.blog.tag.edit', compact('tag'));

        }

         editFailureLog(Tag::class,$id);
         session()->flash('error', ' l\'arcticle n\'existe pas !');
         return view('backEnd.admin.blog.tag.index');

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
      
          if (Tag::findOrFail($id)){
           $tag =  Tag::findOrFail($id);

           if ($tag->update($request->all())){
               session()->flash('success', 'Resource mise à jours avec succès!');
               updateLog(Tag::class,$id);
               return redirect('tag');
           }
       }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Tag::class,$id);
        return redirect('tag');
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
     
         if (Tag::findOrFail($id))   {
            $tag = Tag::findOrFail($id);
            $tag->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Tag::class,$id);
            return redirect('tag');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Tag::class,$id);
        return redirect('tag');
    }

}
