<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSedekahRequest;
use App\Models\Sedekah;
use Illuminate\Http\Request;

class SedekahController extends Controller
{
    public function index()
    {
        $sedekah = Sedekah::all();
        return view('admin.sedekah.index', compact('sedekah'));
    }
    public function create()
    {
        $id = Sedekah::generateId();
        return view('admin.sedekah.create', compact('id', 'blok'));
    }

    public function store(CreateSedekahRequest $request)
    {
        $data = $request->all();
        $data['id_sedekah'] = Sedekah::generateId();
        Sedekah::create($data);
        return redirect()->route('admin.sedekah.index')->with('success', 'Sedekah created successfully.');
    }
    public function show(Sedekah $sedekah)
    {
        return view('admin.sedekah.show', compact('sedekah'));
    }
    public function edit(Sedekah $sedekah)
    {
        return view('admin.sedekah.edit', compact('sedekah', 'blok'));
    }

    public function update(Request $request, Sedekah $sedekah)
    {
        $sedekah->update($request->all());
        return redirect()->route('admin.sedekah.index')->with('success', 'Sedekah updated successfully.');
    }

    public function destroy(Sedekah $sedekah)
    {
        $sedekah->delete();
        return redirect()->route('admin.sedekah.index')->with('success', 'Sedekah deleted successfully.');
    }

    public function confirm(Sedekah $sedekah)
    {
        $sedekah->update(['status' => 'terbayar']);

        return redirect()->route('admin.sedekah.index')->with('success', 'Sedekah updated successfully.');
    }
}
