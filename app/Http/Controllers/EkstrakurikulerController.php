<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::all();

        return view('ekstrakurikuler', compact('ekstrakurikulers'));
    }

    public function show($id)
    {
        $eskul = Ekstrakurikuler::findOrFail($id);

        return view('ekstrakurikuler-detail', compact('eskul'));
    }

    public function create()
    {
        return view('ekstrakurikuler_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_eskul' => 'required|string|max:255',
            'deskripsi'  => 'nullable|string',
            'pembina'    => 'nullable|string|max:255',
            'gambar'     => 'nullable|string|max:255',
        ]);

        Ekstrakurikuler::create($request->only([
            'nama_eskul', 'deskripsi', 'pembina', 'gambar',
        ]));

        return redirect()->route('ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        return view('ekstrakurikuler_edit', compact('ekstrakurikuler'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_eskul' => 'required|string|max:255',
            'deskripsi'  => 'nullable|string',
            'pembina'    => 'nullable|string|max:255',
            'gambar'     => 'nullable|string|max:255',
        ]);

        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        $ekstrakurikuler->update($request->only([
            'nama_eskul', 'deskripsi', 'pembina', 'gambar',
        ]));

        return redirect()->route('ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);
        $ekstrakurikuler->delete();

        return redirect()->route('ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil dihapus.');
    }
}