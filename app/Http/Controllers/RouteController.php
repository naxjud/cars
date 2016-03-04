<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\CRoute;

class RouteController extends Controller
{
    //
    public function getRoute(){

        $routes = CRoute::paginate(10);

        return view('routes/index',compact('routes'));

    }

    public function findRoute(Request $request){

        $search = $request->input('croute');

        $routes = CRoute::where('Route','LIKE',"%$search%")->paginate(10);

        return view('routes/index',compact('routes','search'));

    }
}
