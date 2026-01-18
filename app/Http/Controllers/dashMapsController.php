<?php

namespace App\Http\Controllers;

use App\Models\maps;
use Illuminate\Http\Request;

class dashMapsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maps = maps::all();
        return view('dashboard.alamat.index',[
            'maps' => $maps,
        ]);
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
    public function edit(maps $maps, $id)
    
    {
        $maps = maps::find($id);
        return view('dashboard.alamat.edit', ['maps' => $maps]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, maps $maps, $id)
    {
        $maps = maps::find($id);
        $request->validate([
            'map'             => 'required',
            
            
        ]);
        
        
        $maps =maps::find($maps->id);
        $maps->map               = $request->map;
       
        $maps->save();
       

        return redirect('/dashboard/alamat')->with('success', 'Map Berhasil Di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(maps $maps)
    {
        //
    }
}
