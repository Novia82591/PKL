<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Uploadfile;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function home()
    {
        return view('Admin.Menu.home');
    }

    #Data Dosen
    public function datadosen()
    {
        $dosen = Dosen::all();
        return view('Admin.Menu.data-dosen',compact(['dosen']));
    }
    public function tambahdosen()
    {
        return view('Admin.Menu.tambah-data-dosen');
    }
    public function storedosen(Request $request)
    {
        Dosen::create($request->except(['_token','submit']));
        return redirect('/data-dosen');
    }
    public function editdosen($id)
    {
        $dosen = Dosen::find($id);
        return view('Admin.Menu.edit-data-dosen', compact(['dosen']));
    }
    public function updatedosen($id, Request $request)
    {
        $dosen = Dosen::find($id);
        $dosen->update($request->except(['_token','submit']));

        return redirect('/data-dosen');
    }

    public function deletedosen($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('/data-dosen');
    }

    #Menu Pembimbing
    public function pembimbing()
    {
      
    }

    public function koor()
    {
        return view('Admin.Menu.koordinator');
    }
    public function index()
    {
        $file = Uploadfile::latest()->get();
        return view('Admin.Menu.pendaftaran-ta',compact('file'));
    }
    
}
