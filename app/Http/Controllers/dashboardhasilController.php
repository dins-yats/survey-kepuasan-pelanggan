<?php

namespace App\Http\Controllers;

use App\Models\hasilsurvei;
use App\Models\pertanyaannya;
use Illuminate\Http\Request;

class dashboardhasilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $keyword = $request->keyword;
        return view('dashboard.hasil.index', [
            'posts' =>hasilsurvei::
            where('namacs', 'LIKE', '%'.$keyword.'%')
            ->orWhere('nohp', 'LIKE', '%'.$keyword.'%')
            ->orWhere('ask1', 'LIKE', '%'.$keyword.'%')
            ->orWhere('ask2', 'LIKE', '%'.$keyword.'%')
            ->orWhere('ask3', 'LIKE', '%'.$keyword.'%')
            ->orWhere('ask4', 'LIKE', '%'.$keyword.'%')
            ->orWhere('updated_at', 'LIKE', '%'.$keyword.'%')
            ->paginate(20)->withQueryString()
        ]);
    }


    public function exportsurvei()
    {
        
        return view('dashboard.hasil.exportdata',[
            'posts' => hasilsurvei::all()
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
    public function show($id)
    {
        $pertanyaannya = pertanyaannya::all();
        $hasilsurvei = hasilsurvei::find($id);
        return view('dashboard.hasil.show', [
            'hasilsurvei' => $hasilsurvei,
            'pertanyaannya' => $pertanyaannya,
        ]); 
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
    public function destroy(hasilsurvei $hasilsurvei, $id)
    {
        hasilsurvei::destroy($id);
        // User::destroy($user->id); 
        return redirect('/dashboard/hasil')->with('success', 'Survei Telah Dihapus');
    }
}
