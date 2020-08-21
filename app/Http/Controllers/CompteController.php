<?php

namespace App\Http\Controllers;

use App\Compte;
use App\Moral;
use App\Physique;
use App\Typecompte;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comptes = Compte::paginate(4);
        //$comptes = Compte::all();

        return view('comptes.index',compact('comptes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $morals = Moral::all();
       $physiques = Physique::all();
       $typecomptes = Typecompte::all();
       return view('comptes.create', ['typecomptes' => $typecomptes, 'morals' => $morals], ['physiques' => $physiques], ['morals' => $morals]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request) {

       /*$request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);*/

        Compte::create($request->all());

        return redirect()->route('comptes.index')->with('success','compte crée avec succès.');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Compte $compte)
    {
        return view('comptes.show',compact('compte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Compte $compte) {

        $morals = Moral::all();
        $physiques = Physique::all();
        return view('comptes.edit',compact('compte'), ['morals' => $morals], ['physiques' => $physiques]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Compte $compte) {

         /*$request->validate([
              'title' => 'required',
              'description' => 'required',
          ]);*/

          $compte->update($request->all());

          return redirect()->route('comptes.index')->with('success','compte modifié avec succès');
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Compte $compte) {

         $compte->delete();

         return redirect()->route('comptes.index')
                         ->with('success','Compte supprimer avec sucès');
     }
}