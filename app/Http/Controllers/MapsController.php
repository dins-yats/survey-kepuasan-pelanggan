<?php

namespace App\Http\Controllers;

use App\Models\maps;
use App\Http\Requests\StoremapsRequest;
use App\Http\Requests\UpdatemapsRequest;

class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $maps = maps::all();
        return view('survei',[
            'maps' => $maps,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $maps = maps::all();
        return view('survei',[
            'maps' => $maps,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremapsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(maps $maps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(maps $maps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemapsRequest $request, maps $maps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(maps $maps)
    {
        //
    }
}
