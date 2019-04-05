<?php

namespace App\Http\Controllers;


use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $contact = Contact::all();
        defaultLog(Contact::class);
        return view('backEnd.admin.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(Contact::class);
        return view('backEnd.admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( Contact::create($request->all())) {
            session()->flash('message', tableName(Contact::class).' ajouté avec succès, id = '.lastChild(Contact::class));
            storeLog(Contact::class);
            return redirect('contact');

        }
        createFailureLog(Contact::class);
        return redirect('contact');
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

        if (Contact::findOrFail($id))   {
            $contact = Contact::findOrFail($id);
            showLog(Contact::class,$id);
            return view('backEnd.admin.contact.show', compact('contact'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Contact::class,$id);
        return view('backEnd.admin.contact.show', compact('contact'));

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

        if (Contact::findOrFail($id))   {
            $contact = Contact::findOrFail($id);
            editLog(Contact::class,$id);
            return view('backEnd.admin.contact.edit', compact('contact'));
        }

        editFailureLog(Contact::class,$id);
        return view('backEnd.admin.contact.edit', compact('contact'));
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


        if (Contact::findOrFail($id)){
            $contact =  Contact::findOrFail($id);

            if ($contact->update($request->all())){
                session()->flash('success', 'Contact mise à jours avec succès!');
                updateLog(Contact::class,$id);
                return redirect('contact');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Contact::class,$id);
        return redirect('contact');

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
        if (Contact::findOrFail($id))   {
            $contact = Contact::findOrFail($id);
            $contact->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Contact::class,$id);
            return redirect('contact');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Contact::class,$id);
        return redirect('contact');
    }
}
