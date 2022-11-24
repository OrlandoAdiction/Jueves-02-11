<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use DB;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function listar() {
        $clientes = Customer::get();
        return dd($clientes);
    }

    function index(){
         $listado = DB::table ("employees")->get();
        return view('empleados', compact ('listado'));

    }
}
