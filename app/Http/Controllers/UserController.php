<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = User::all();
        defaultLog(User::class);
        return view('backEnd.admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(User::class);
        return view('backEnd.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( User::create($request->all())) {
            session()->flash('message', tableName(User::class).' ajouté avec succès, id = '.lastChild(User::class));
            storeLog(User::class);
            return redirect('user');

        }
        createFailureLog(User::class);
        return redirect('user');
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

        if (User::findOrFail($id))   {
            $user = User::findOrFail($id);
            showLog(User::class,$id);
            return view('backEnd.admin.user.show', compact('user'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(User::class,$id);
        return view('backEnd.admin.user.show', compact('user'));

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

        if (User::findOrFail($id))   {
            $user = User::findOrFail($id);
            editLog(User::class,$id);
            return view('backEnd.admin.user.edit', compact('user'));
        }

        editFailureLog(User::class,$id);
        return view('backEnd.admin.user.edit', compact('user'));
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


        if (User::findOrFail($id)){
            $user =  User::findOrFail($id);

            if ($user->update($request->all())){
                session()->flash('success', 'Log mise à jours avec succès!');
                updateLog(User::class,$id);
                return redirect('user');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(User::class,$id);
        return redirect('user');

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
        if (User::findOrFail($id))   {
            $user = User::findOrFail($id);
            $user->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(User::class,$id);
            return redirect('user');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(User::class,$id);
        return redirect('user');
    }
}
