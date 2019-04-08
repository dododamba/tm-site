<?php

namespace App\Http\Controllers\Blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Blog\Categorie;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CategorieController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categorie = Categorie::all();
        defaultLog(Categorie::class);
        return view('backEnd.admin.blog.categorie.index', compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        createLog(Categorie::class);
        return view('backEnd.admin.blog.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
     
         if ( Categorie::create($request->all())) {
           session()->flash('message', tableName( Categorie::class).' ajouté avec succès, id = '.lastChild( Categorie::class));
           storeLog( Categorie::class);
           return redirect('categorie');

       }
        createFailureLog( Categorie::class);
        return redirect('categorie');
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
     
         if (Categorie::findOrFail($id))   {
            $categorie = Categorie::findOrFail($id);
            showLog(Categorie::class,$id);
            return view('backEnd.admin.blog.categorie.show', compact('categorie'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Categorie::class,$id);
        return view('backEnd.admin.categorie.index');

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
       
         if (Categorie::findOrFail($id))   {
            $categorie = Categorie::findOrFail($id);
            editLog(Categorie::class,$id);
                   return view('backEnd.admin.blog.categorie.edit', compact('categorie'));

        }

         editFailureLog(Categorie::class,$id);
         session()->flash('error', ' l\'arcticle n\'existe pas !');
         return view('backEnd.admin.blog.categorie.index');

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
      
          if (Categorie::findOrFail($id)){
           $categorie =  Categorie::findOrFail($id);

           if ($categorie->update($request->all())){
               session()->flash('success', 'Resource mise à jours avec succès!');
               updateLog(Categorie::class,$id);
               return redirect('categorie');
           }
       }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Categorie::class,$id);
        return redirect('categorie');
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
     
         if (Categorie::findOrFail($id))   {
            $categorie = Categorie::findOrFail($id);
            $categorie->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Categorie::class,$id);
            return redirect('categorie');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Categorie::class,$id);
        return redirect('categorie');
    }

}
