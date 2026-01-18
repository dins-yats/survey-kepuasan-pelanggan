<?php

namespace App\Http\Controllers;

use App\Models\pertanyaannya;
use Illuminate\Http\Request;
use App\Http\Requests\StorepertanyaannyaRequest;
use App\Http\Requests\UpdatepertanyaannyaRequest;

class PertanyaannyaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
  
         $keyword = $request->keyword;
        return view('dashboard.tanya.index', [
    
            'tanya' =>pertanyaannya::
            where('pertanyaan', 'LIKE', '%'.$keyword.'%')
            ->paginate(20)->withQueryString()
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
    public function store(StorepertanyaannyaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pertanyaannya $pertanyaannya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pertanyaannya $pertanyaannya, $id)
    {
        $pertanyaannya = pertanyaannya::find($id);
        return view('dashboard.tanya.edit', ['pertanyaannya' => $pertanyaannya]); 
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdatepertanyaannyaRequest $request, pertanyaannya $pertanyaannya, $id)
    public function update(Request $request, $id)
    {       

        $pertanyaannya = pertanyaannya::find($id);
        $request->validate([
            'pertanyaan'             => 'required|max:255',
            
            
        ]);
        
        
        $pertanyaannya =pertanyaannya::find($pertanyaannya->id);
        $pertanyaannya->pertanyaan               = $request->pertanyaan;
       
        $pertanyaannya->save();
       

        return redirect('/dashboard/tanya')->with('success', 'Pertanyaan Berhasil Di ubah');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pertanyaannya $pertanyaannya)
    {
        //
    }
}
