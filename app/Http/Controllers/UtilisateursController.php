<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class UtilisateursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateurs = Utilisateurs::all()
        return view('utilisateurs.index', compact('utilisateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('utilisateurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $contact = new Contact([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'job_title' => $request->get('job_title'),
            'city' => $request->get('city'),
            'country' => $request->get('country')
        ]);
        $contact->save();
        return redirect('/contacts')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateurs $utilisateurs)
    {
        $utilisateurs = Utilisateurs::find($id);
        return view('utilisateurs.show', compact('utilisateurs')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisateurs $utilisateurs)
    {
        $utilisateurs = Utilisateurs::find($id);
        return view('utilisateurs.edit', compact('utilisateurs')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisateurs $utilisateurs)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $utilisateur = Utilisateurs::find($id);
        $utilisateur->first_name =  $request->get('first_name');
        $utilisateur->last_name = $request->get('last_name');
        $utilisateur->email = $request->get('email');
        $utilisateur->job_title = $request->get('job_title');
        $utilisateur->city = $request->get('city');
        $utilisateur->country = $request->get('country');
        $utilisateur->save();

        return redirect('/utilisateurs')->with('success', 'Utilisateur mis à jour !');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateurs $utilisateurs)
    {
        $utilisateur = Utilisateurs::find($id);
        $utilisateur->delete();

        return redirect('/utilisateurs')->with('success', 'Utilisateur supprimé!');

    }

    public function count(Utilisateurs $utilisateurs)
    {
        $utilisateursCount = Utilisateurs->count()
        return view('utilisateurs.count', compact('utilisateursCount')); 
    }

}
