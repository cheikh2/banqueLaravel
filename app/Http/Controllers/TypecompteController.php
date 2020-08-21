<?php

namespace App\Http\Controllers;

use App\Typecompte;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typecomptes = Typecompte::all();
       return view('typecomptes.liste',compact('typecomptes'));
    }
}
