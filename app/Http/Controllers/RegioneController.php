<?php

namespace App\Http\Controllers;

use App\Models\Regione;
use Illuminate\Http\Request;

class RegioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('regioni');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo '<pre>';
        print_r($request->first_name);
        echo '</pre>';
        echo '<pre>';
        print_r($request->email);
        echo '</pre>';
    }

    /**
     * Display the specified resource.
     */
    public function show(Regione $regione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Regione $regione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Regione $regione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Regione $regione)
    {
        //
    }
}
