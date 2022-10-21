<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Validasi;
use Illuminate\Http\Request;

class ValidasiController extends Controller
{
  public function index()
  {
    $validasi = Validasi::all();
    return view('Admin.Menu.disetujui', compact('validasi'));
  }

  public function setuju($id)
  {
    $validasi = Validasi::find($id);
    $validasi->status = 1;
    $validasi->save();
    return redirect('/disetujui');
  }
  public function revisi($id)
  {
    $validasi = Validasi::find($id);
    $validasi->status = 2;
    $validasi->save();
    return redirect('/disetujui');
  }

  public function tolak($id)
  {
    $validasi = Validasi::find($id);
    $validasi->status = 3;
    $validasi->save();
    return redirect('/disetujui');
  }

  // public function storeedit(Request $request)
  // {
  //   Validasi::create($request->except(['_token','submit']));
  //   return redirect('/disetujui');
  // }
  // public function edit()
  // {
  //   return view('Admin.Menu.edit');
  // }
  
}
