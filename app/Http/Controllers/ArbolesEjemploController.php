<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArbolesEjemplo;

class ArbolesEjemploController extends Controller
{
    //
    public function index()
    {
        $data=ArbolesEjemplo::all();
        return response()->json($data);
    }
}
