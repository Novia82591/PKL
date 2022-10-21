<?php

namespace App\Http\Controllers;

use App\Models\Pembimbing;
use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    public function index()
    {
        $pembimbing = Pembimbing::all();
        return view('Admin.Menu.pembimbing', compact(['pembimbing']));
    }
    public function create()
    {
        return view('Admin.Menu.tambah-pembimbing');
    }
    public function store(Request $request)
    {
        Pembimbing::create($request->except(['_token', 'submit']));
        return redirect('/pembimbing');
    }
    public function edit($id)
    {
        $pembimbing = Pembimbing::find($id); 
        return view('Admin.Menu.edit-pembimbing', compact(['pembimbing']));
    }
    public function update($id, Request $request)
    {
        $pembimbing = Pembimbing::find($id);
        $pembimbing->update($request->except(['_token','submit']));
    }
    public function destroy($id)
    {
        $pembimbing = Pembimbing::find($id);
        $pembimbing->delete();
        return redirect('/pembimbing');
    }

    public function editKeterangan()
    {
        
        return view('Admin.Menu.edit');
    }

    public function dospem()
    {
        $pembimbing = Pembimbing::all();
        return view('Mahasiswa.Menu.print-dospem', compact('pembimbing'));
    }
}
