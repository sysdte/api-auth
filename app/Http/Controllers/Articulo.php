<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dteArticulo;

class Articulo extends Controller
{
    
    public function all(Request $request){

    	$rut = substr($request->user()->rut, 0, -2);
        \DB::connection($rut);

    	$articulo = new dteArticulo();
    	$articulos = $articulo->all();

		foreach ($articulos as $row) {
		    print_r($row);
		}

		return response()->json([
            'message' => 'Successfully created user!'
        ], 201);

    }
    

}
