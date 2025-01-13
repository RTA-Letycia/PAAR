<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProcModel;

class HomeController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function showHomePage()
    {
        return view('index');
    }
    public function redirectToIndex(){
        return redirect('/');
    }
    public function redirectToProcessPage(){
        return redirect()->route(process.show);
    }
    public function redirectToMapPage(){
        return view('map');
    }
    public function redirectToMove(){
        return view('move');
    }
}
