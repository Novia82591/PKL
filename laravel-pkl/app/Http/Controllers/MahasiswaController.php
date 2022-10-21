<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Mahasiswa;
use App\Models\Pembimbing;
use App\Models\Validasi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        //dd($mahasiswa);
        return view('Admin.Menu.data-mahasiswa', compact(['mahasiswa']));
    }

    public function create()
    {
        return view('Admin.Menu.tambah-data-mahasiswa');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        Mahasiswa::create($request->except(['_token','submit']));
        return redirect('/data-mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('Admin.Menu.edit-data-mahasiswa', compact(['mahasiswa']));
    }

    public function update($id, Request $request)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->except(['_token','submit']));
        return redirect('/data-mahasiswa');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/data-mahasiswa');
    }

    //Pendaftaran TA
    public function pendaftaranta()
    {
        // $datapendaftaran = Validasi::where('validasi', "0")->get();
        // $mahasiswa = Mahasiswa::all();
        return view('Admin.Menu.pendaftaran-ta');
    }

    //Validasi

    // public function downloadpersyaratan($id)
    // {
    //     $datapendaftaran = Validasi::find($id);
    //     $datapendaftaran->loadview('persyaratan',['persyaratan'=>$id]);
    //     return $datapendaftaran->download($id);

    // }

    #Menu Mahasiswa

    public function ajukanpendaftaran()
    {
        return view('Mahasiswa.Menu.ajukan-pendaftaran');
    }
    public function jadwalseminar()
    {
        $jadwal = Jadwal::all();
        return view('Mahasiswa.Menu.jadwal-seminar-mahasiswa', compact('jadwal'));
    }
    public function pembimbing()
    {
        $pembimbing = Pembimbing::all();
        return view('Mahasiswa.Menu.pembimbing-penguji',compact(['pembimbing']));
    }

#pendaftaran
    public function pendaftaran()
    {
        $validasi = Validasi::all();
        return view('Mahasiswa.Menu.pendaftaran', compact(['validasi']));
        return redirect('pendaftaran');
    }

    public function simpanpendaftaran()
    {
       return view('Mahasiswa.Menu.ajukan-pendaftaran');
    }
    public function store2(Request $request)
    {
         $data1 =  $request->except(['_token','submit']);
        
        if($file = $request->hasFile('persyaratan')){
            
            $file = $request->file('persyaratan');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path(). '/berkas';
            $file->move($destinationPath,$fileName);
            $data1['persyaratan'] =  $file->getClientOriginalName();  
        }
        if($file = $request->hasFile('makalah')){
            
            $file = $request->file('makalah');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path(). '/berkas';
            $file->move($destinationPath,$fileName);
            $data1['makalah'] =  $file->getClientOriginalName();  
        }
        // if($file = $request->hasFile('keterangan')){
            
        //     $file = $request->file('keterangan');
        //     $fileName = $file->getClientOriginalName();
        //     $destinationPath = public_path(). '/berkas';
        //     $file->move($destinationPath,$fileName);
        //     $data1['keterangan'] =  $file->getClientOriginalName();  
        // }
        
        // $data1['keterangan']="XXXX";
        
        Validasi::create($data1);
        // return $data1;
       return redirect('pendaftaran');
    }

    public function print()
    {
        $jadwal = Jadwal::all();
       return view('Mahasiswa.Menu.printjadwal', compact('jadwal'));
    }
    public function home()
    {
       return view('Mahasiswa.Menu.home-mahasiswa');
    }

    


}
