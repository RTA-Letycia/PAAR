<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function redirectToHome(Request $request)
    {
        if($request->has('redirect_home')) {
            return redirect()->route('redirect.homePage');
        }
    }
}
