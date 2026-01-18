<?php

namespace App\Http\Controllers;

use App\Models\hasilsurvei;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    // public function index()
    {
        $keyword = $request->keyword;   
        $hasil1 = hasilsurvei::where('updated_at', 'LIKE', '%'.$keyword.'%')->get();
        // $hasil1 = hasilsurvei::get();
        $data = [
            $hasil1->where('ask1','Sangat Buruk')->count(),
            $hasil1->where('ask1','Kurang')->count(),
            $hasil1->where('ask1','Cukup')->count(),
            $hasil1->where('ask1','Baik')->count(),
            $hasil1->where('ask1','Sangat Baik')->count(),

        ];
        $data2 = [
            $hasil1->where('ask2','Sangat Buruk')->count(),
            $hasil1->where('ask2','Kurang')->count(),
            $hasil1->where('ask2','Cukup')->count(),
            $hasil1->where('ask2','Baik')->count(),
            $hasil1->where('ask2','Sangat Baik')->count(),

        ];
        $data3 = [
            $hasil1->where('ask3','Sangat Buruk')->count(),
            $hasil1->where('ask3','Kurang')->count(),
            $hasil1->where('ask3','Cukup')->count(),
            $hasil1->where('ask3','Baik')->count(),
            $hasil1->where('ask3','Sangat Baik')->count(),

        ];
        $data4 = [
            $hasil1->where('ask4','Sangat Buruk')->count(),
            $hasil1->where('ask4','Kurang')->count(),
            $hasil1->where('ask4','Cukup')->count(),
            $hasil1->where('ask4','Baik')->count(),
            $hasil1->where('ask4','Sangat Baik')->count(),

        ];
        $data5 = [
            $hasil1->where('ask5','Sangat Buruk')->count(),
            $hasil1->where('ask5','Kurang')->count(),
            $hasil1->where('ask5','Cukup')->count(),
            $hasil1->where('ask5','Baik')->count(),
            $hasil1->where('ask5','Sangat Baik')->count(),

        ];
        $label = [
            'Sangat Buruk',
            'Kurang',
            'Cukup',
            'Baik',
            'Sangat Baik',
        ];
        
        $surveis = hasilsurvei::count();
        return view('dashboard', compact('surveis', 'data', 'label','data2', 'data3', 'data4','data5'));
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
