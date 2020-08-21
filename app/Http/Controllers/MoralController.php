<?php
namespace App\Http\Controllers;

use App\Moral;
use Illuminate\Http\Request;

class MoralController extends Controller
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
        $morals = Moral::paginate(2);
        //$morals = Moral::all();
        return view('morals.index',compact('morals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('morals.create');
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

        Moral::create($request->all());

        return redirect()->route('morals.index')->with('success','client crée avec succès.');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Moral $moral)
    {
        return view('morals.show',compact('moral'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Moral $moral) {

        return view('morals.edit',compact('moral'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Moral $moral) {

         /*$request->validate([
              'title' => 'required',
              'description' => 'required',
          ]);*/

          $moral->update($request->all());

          return redirect()->route('morals.index')->with('success','client modifié avec succès');
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Moral $moral) {

         $moral->delete();

         return redirect()->route('morals.index')
                         ->with('success','Client supprimer avec sucès');
     }

     public function single(){
         return view('morals.create');
     }
}