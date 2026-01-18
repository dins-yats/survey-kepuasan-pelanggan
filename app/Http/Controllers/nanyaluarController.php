<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaannya;
use App\Models\hasilsurvei;


class nanyaluarController extends Controller
{   


    public function index()
    {

       
    
        return view('jawab', [
           
        ]); 
        
   
    }
    
    public function create()
    {
        $pertanyaannya = pertanyaannya::all();
        return view('jawab',[
            'pertanyaannya' => $pertanyaannya,
        ]);
    }

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
        
        
        $hasilsurvei = new hasilsurvei;
        $hasilsurvei->namacs               = $request->namacs;
        $hasilsurvei->nohp                 = $request->nohp;
        $hasilsurvei->ask1                 = $request->ask1;
        $hasilsurvei->ask2                 = $request->ask2 ;
        $hasilsurvei->ask3                 = $request->ask3;
        $hasilsurvei->ask4                 = $request->ask4 ;
        $hasilsurvei->ask5                 = $request->ask5 ;
        $hasilsurvei->saran                = $request->saran ;
        $hasilsurvei->save();
        
        // $request->validate([
        //     'namacs'             => 'required|max:255',
        //     'nohp'               => 'required',
        //     // 'NIK'                   => 'required', 'numeric', 'max:16',
        //     'ask1'               => 'required|max:255',
        //     'ask2'               => 'required',
        //     'ask3'               => 'required|max:255',
        //     'ask4'               => 'required|max:255',
        //     'ask5'               => 'required',
        //     'saran'              => 'required',
            
        // ]);
        
        
        // $namacs            = $request->namacs;
        // $nohp              = $request->nohp;
        // $ask1              = $request->ask1;
        // $ask2              = $request->ask2;
        // $ask3              = $request->ask3;
        // $ask4              = $request->ask4;
        // $ask5              = $request->ask5;
        // $saran             = $request->saran;


        // $data = new hasilsurvei();
        // $data->namacs               = $namacs;
        // $data->nohp                 = $nohp;
        // $data->ask1                 = $ask1;
        // $data->ask2                 = $ask2 ;
        // $data->ask3                 = $ask3;
        // $data->ask4                 = $ask4 ;
        // $data->ask5                 = $ask5 ;
        // $data->saran                = $saran ;
        // $data->save();

        // return redirect()->route('/')->with(['success' => 'Data Berhasil Disimpan!']);
        // return redirect(route('/jawab'));
        return redirect('/jawab')->with('success', 'Survei Telah Ditambahkan');
        // return redirect('/jawab')->with('success', 'survei Telah ditambahkan');
    }

}
