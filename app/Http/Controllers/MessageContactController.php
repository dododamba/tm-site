<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\MessageContact;
use Illuminate\Http\Request;
use Session;

class MessageContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $messagecontact = MessageContact::all();
        defaultLog(MessageContact::class);
        return view('backEnd.admin.messagecontact.index', compact('messagecontact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(MessageContact::class);
        return view('backEnd.admin.messagecontact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( MessageContact::create($request->all())) {
            session()->flash('message', tableName(MessageContact::class).' ajouté avec succès, id = '.lastChild(MessageContact::class));
            storeLog(MessageContact::class);
            return redirect('messagecontact');

        }
        createFailureLog(MessageContact::class);
        return redirect('messagecontact');
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

        if (MessageContact::findOrFail($id))   {
            $messagecontact = MessageContact::findOrFail($id);
            showLog(MessageContact::class,$id);
            return view('backEnd.admin.messagecontact.show', compact('messagecontact'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(MessageContact::class,$id);
        return view('backEnd.admin.messagecontact.show', compact('messagecontact'));

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

        if (MessageContact::findOrFail($id))   {
            $messagecontact = MessageContact::findOrFail($id);
            editLog(MessageContact::class,$id);
            return view('backEnd.admin.messagecontact.edit', compact('messagecontact'));
        }

        editFailureLog(MessageContact::class,$id);
        return view('backEnd.admin.messagecontact.edit', compact('messagecontact'));
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


        if (MessageContact::findOrFail($id)){
            $messagecontact =  MessageContact::findOrFail($id);

            if ($messagecontact->update($request->all())){
                session()->flash('success', 'Log mise à jours avec succès!');
                updateLog(MessageContact::class,$id);
                return redirect('messagecontact');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(MessageContact::class,$id);
        return redirect('messagecontact');

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
        if (MessageContact::findOrFail($id))   {
            $messagecontact = MessageContact::findOrFail($id);
            $messagecontact->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(MessageContact::class,$id);
            return redirect('messagecontact');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(MessageContact::class,$id);
        return redirect('messagecontact');
    }

}
