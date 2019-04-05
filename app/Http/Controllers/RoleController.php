<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Role;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $role = Role::all();
        defaultLog(Role::class);
        return view('backEnd.admin.role.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(Role::class);
        return view('backEnd.admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( Role::create($request->all())) {
            session()->flash('message', tableName(Role::class).' ajouté avec succès, id = '.lastChild(Role::class));
            storeLog(Role::class);
            return redirect('role');

        }
        createFailureLog(Role::class);
        return redirect('role');
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

        if (Role::findOrFail($id))   {
            $role = Role::findOrFail($id);
            showLog(Role::class,$id);
            return view('backEnd.admin.role.show', compact('role'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Role::class,$id);
        return view('backEnd.admin.role.show', compact('role'));

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

        if (Role::findOrFail($id))   {
            $role = Role::findOrFail($id);
            editLog(Role::class,$id);
            return view('backEnd.admin.role.edit', compact('role'));
        }

        editFailureLog(Role::class,$id);
        return view('backEnd.admin.role.edit', compact('role'));
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


        if (Role::findOrFail($id)){
            $role =  Role::findOrFail($id);

            if ($role->update($request->all())){
                session()->flash('success', 'Log mise à jours avec succès!');
                updateLog(Role::class,$id);
                return redirect('role');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Role::class,$id);
        return redirect('role');

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
        if (Role::findOrFail($id))   {
            $role = Role::findOrFail($id);
            $role->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Role::class,$id);
            return redirect('role');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Role::class,$id);
        return redirect('role');
    }

}
