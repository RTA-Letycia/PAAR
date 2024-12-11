<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProcModel;

class ProController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $objUser;
    private $objProc;

    public function __construct() {
        $this->objUser= new User();
        $this->objProc= new ProcModel();
    }

    public function index()
    {
        return view('index');
    }
    public function map()
    {
        return view('map');
    }
    public function move()
    {
        return view ('move');
    }
    public function processIns()
    {
        return view('processIns');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //require parameter id
        $show=$this->objProc->find($id);
        return view('processo', compact('show'));
    }

    public function process()
    {
        //$processes=$this->objProc->all();
        //  dd('teste de depuração');
         //return view('processo', compact('processes'));
         return view('processo');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
