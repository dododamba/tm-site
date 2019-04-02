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

        return view('backEnd.admin.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Contact::create($request->all());

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
        $contact = Contact::findOrFail($id);

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
        $contact = Contact::findOrFail($id);

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
        
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());


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
        $contact = Contact::findOrFail($id);

        $contact->delete();


        return redirect('contact');
    }

}
