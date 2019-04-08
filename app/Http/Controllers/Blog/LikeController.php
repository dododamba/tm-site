<?php

namespace App\Http\Controllers\Blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Blog\Like;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class LikeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $like = Like::all();
        defaultLog(Like::class);
        return view('backEnd.admin.blog.like.index', compact('like'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        createLog(Like::class);
        return view('backEnd.admin.blog.like.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
     
         if ( Like::create($request->all())) {
           session()->flash('message', tableName( Like::class).' ajouté avec succès, id = '.lastChild( Like::class));
           storeLog( Like::class);
           return redirect('like');

       }
        createFailureLog( Like::class);
        return redirect('like');
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
     
         if (Like::findOrFail($id))   {
            $like = Like::findOrFail($id);
            showLog(Like::class,$id);
            return view('backEnd.admin.blog.like.show', compact('like'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Like::class,$id);
        return view('backEnd.admin.like.index');

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
       
         if (Like::findOrFail($id))   {
            $like = Like::findOrFail($id);
            editLog(Like::class,$id);
                   return view('backEnd.admin.blog.like.edit', compact('like'));

        }

         editFailureLog(Like::class,$id);
         session()->flash('error', ' l\'arcticle n\'existe pas !');
         return view('backEnd.admin.blog.like.index');

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
      
          if (Like::findOrFail($id)){
           $like =  Like::findOrFail($id);

           if ($like->update($request->all())){
               session()->flash('success', 'Resource mise à jours avec succès!');
               updateLog(Like::class,$id);
               return redirect('like');
           }
       }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Like::class,$id);
        return redirect('like');
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
     
         if (Like::findOrFail($id))   {
            $like = Like::findOrFail($id);
            $like->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Like::class,$id);
            return redirect('like');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Like::class,$id);
        return redirect('like');
    }

}
