<?php

namespace App\Http\Controllers;

use App\Models\hasilsurvei;
use Illuminate\Http\Request;

class tanyaluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('survei',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namacs'             => 'required|max:255',
            'nohp'               => 'required',
            // 'NIK'                   => 'required', 'numeric', 'max:16',
            'ask1'               => 'required|max:255',
            'ask2'               => 'required',
            'ask3'               => 'required|max:255',
            'ask4'               => 'required|max:255',
            'ask5'               => 'required',
            'saran'              => 'required',
            
        ]);
        


        $namacs            = $request->namacs;
        $nohp              = $request->nohp;
        $ask1              = $request->ask1;
        $ask2              = $request->ask2;
        $ask3              = $request->ask3;
        $ask4              = $request->ask4;
        $ask5              = $request->ask5;
        $saran             = $request->saran;


        $data = new hasilsurvei();
        $data->namacs               = $namacs;
        $data->nohp                 = $nohp;
        $data->ask1                 = $ask1;
        $data->ask2                 = $ask2 ;
        $data->ask3                 = $ask3;
        $data->ask4                 = $ask4 ;
        $data->ask5                 = $ask5 ;
        $data->saran                = $saran ;
        $data->save();

        return redirect('/')->with('success', 'Survei Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(hasilsurvei $hasilsurvei)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hasilsurvei $hasilsurvei)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hasilsurvei $hasilsurvei)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hasilsurvei $hasilsurvei)
    {
        //
    }
}
