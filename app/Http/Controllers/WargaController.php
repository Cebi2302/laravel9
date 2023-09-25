<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all();
        return view('warga.index', compact('warga'));
    }

    public function create()
    {
        return view('warga.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->except(['_token', 'submit']);
        Warga::create($requestData);
        return redirect('/warga');
    }

    public function edit($id)
    {
        $warga = Warga::find($id);
        return view('warga.edit', compact('warga'));
    }

    public function update(Request $request, $id)
    {
        $warga = Warga::find($id);
        $requestData = $request->except(['_token', 'submit']);
        $warga->update($requestData);
        return redirect('/warga');
    }

    public function destroy($id)
    {
        $warga = Warga::find($id);
        $warga->delete();
        return redirect('/warga');
    }
}
