<?php

namespace App\Http\Controllers\Blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Blog\Commentaire;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CommentaireController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $commentaire = Commentaire::all();
        defaultLog(Commentaire::class);
        return view('backEnd.admin.blog.commentaire.index', compact('commentaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        createLog(Commentaire::class);
        return view('backEnd.admin.blog.commentaire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
     
         if ( Commentaire::create($request->all())) {
           session()->flash('message', tableName( Commentaire::class).' ajouté avec succès, id = '.lastChild( Commentaire::class));
           storeLog( Commentaire::class);
           return redirect('commentaire');

       }
        createFailureLog( Commentaire::class);
        return redirect('commentaire');
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
     
         if (Commentaire::findOrFail($id))   {
            $commentaire = Commentaire::findOrFail($id);
            showLog(Commentaire::class,$id);
            return view('backEnd.admin.blog.commentaire.show', compact('commentaire'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Commentaire::class,$id);
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
       
         if (Commentaire::findOrFail($id))   {
            $commentaire = Commentaire::findOrFail($id);
            editLog(Commentaire::class,$id);
                   return view('backEnd.admin.blog.commentaire.edit', compact('commentaire'));

        }

         editFailureLog(Commentaire::class,$id);
         session()->flash('error', ' l\'arcticle n\'existe pas !');
         return view('backEnd.admin.blog.commentaire.index');

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
      
          if (Commentaire::findOrFail($id)){
           $commentaire =  Commentaire::findOrFail($id);

           if ($commentaire->update($request->all())){
               session()->flash('success', 'Resource mise à jours avec succès!');
               updateLog(Commentaire::class,$id);
               return redirect('commentaire');
           }
       }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Commentaire::class,$id);
        return redirect('commentaire');
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
     
         if (Commentaire::findOrFail($id))   {
            $commentaire = Commentaire::findOrFail($id);
            $commentaire->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Commentaire::class,$id);
            return redirect('commentaire');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Commentaire::class,$id);
        return redirect('commentaire');
    }

}
