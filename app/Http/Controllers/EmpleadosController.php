<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    function index(){
        $listado = DB::table ("employees")->get();
       return view('Empleados', compact ('listado'));
   }

}
