<?php

namespace App\Http\Controllers;

use App\Moral;
use App\Physique;
use Illuminate\Http\Request;

class PhysiqueController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
         $x = $request->query;
         foreach($x as $i){
            $nomEmp = $i;
         }
        // $x.parse_str();
         //dd($nomEmp);
        
        //$queryValue = $request->query->get('nomEmpl');
        $data = Moral::select("nomEmpl")
                ->where("nomEmpl","LIKE","%{$nomEmp}%")
                ->get();
   
        return response()->json($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $physiques = Physique::paginate(5);
        //$physiques = Physique::all();

        return view('physiques.index', compact('physiques'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $morals = Moral::all();
        return view('physiques.create', ['morals' => $morals]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*$request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);*/

        Physique::create($request->all());

        return redirect()->route('physiques.index')->with('success', 'client crée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Physique $physique)
    {
        return view('physiques.show', compact('physique'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Physique $physique)
    {

        return view('physiques.edit', compact('physique'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Physique $physique)
    {

        /*$request->validate([
              'title' => 'required',
              'description' => 'required',
          ]);*/

        $physique->update($request->all());

        return redirect()->route('physiques.index')->with('success', 'client modifié avec succès');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Physique $physique)
    {

        $physique->delete();

        return redirect()->route('physiques.index')
            ->with('success', 'Client supprimer avec sucès');
    }
}
