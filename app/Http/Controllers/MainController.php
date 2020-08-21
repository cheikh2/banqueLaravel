<?php

namespace App\Http\Controllers;

use App\Physique;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        $search = $request->get('term');
        $search = "M";
        $result = Physique::where('prenom', 'LIKE',  $search. '%')->get();

        return response()->json($result);

    }


}
