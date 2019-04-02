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
        $contact = MessageContact::all();

        return view('backEnd.admin.messagecontact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.messagecontact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if (MessageContact::create($request->all())) {
            flashy()->success('Votre message a été  enregistré avec succès, nous vous contacterons bientot ! ');
            return redirect('contacts');
        }
        flashy()->success('Votre message  n\'a pas été envoyé enregistré , remplissez le formulaire correctement svp ! ');
        return redirect('contacts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contact = MessageContact::findOrFail($id);

        return view('backEnd.admin.messagecontact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contact = MessageContact::findOrFail($id);

        return view('backEnd.admin.messagecontact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {

        $contact = MessageContact::findOrFail($id);
        $contact->update($request->all());

        Session::flash('message', 'MessageContact updated!');
        Session::flash('status', 'success');

        return redirect('contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contact = MessageContact::findOrFail($id);

        $contact->delete();

        Session::flash('message', 'MessageContact deleted!');
        Session::flash('status', 'success');

        return redirect('contact');
    }

}
