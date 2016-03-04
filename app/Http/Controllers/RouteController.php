<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\CRoute;

class RouteController extends Controller
{
    //
    public function getRoute(){

        $routes = CRoute::all();

        return view('routes/index',compact('routes'));

    }

    public function findRoute(Request $request){

        $search = $request->input('croute');

        $routes = CRoute::where('Route', 'LIKE','%$search%')->get();

        dd($routes);

        return view('routes/index',compact('routes','search'));

    }
}
