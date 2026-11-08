<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio_1001;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolio = Portofolio_1001::latest()->get();
        return view('admin.portofolio.index', compact('portofolio'));
    }

    public function create()
    {
        return view('admin.portofolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'profil_pribadi' => 'required|string',
            'kontak' => 'required|string|max:100',
            'alamat' => 'required|string',
            'keahlian' => 'required|string',
            'riwayat_pendidikan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('portofolio', 'public');
        }

        Portofolio_1001::create($data);

        return redirect()->route('portofolio.index')->with('success', 'Data Portofolio berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $portofolio = Portofolio_1001::findOrFail($id);
        return view('admin.portofolio.edit', compact('portofolio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'profil_pribadi' => 'required|string',
            'kontak' => 'required|string|max:100',
            'alamat' => 'required|string',
            'keahlian' => 'required|string',
            'riwayat_pendidikan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $portofolio = Portofolio_1001::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($portofolio->foto && Storage::disk('public')->exists($portofolio->foto)) {
                Storage::disk('public')->delete($portofolio->foto);
            }
            $data['foto'] = $request->file('foto')->store('portofolio', 'public');
        }

        $portofolio->update($data);

        return redirect()->route('portofolio.index')->with('success', 'Data Portofolio berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $portofolio = Portofolio_1001::findOrFail($id);
        $portofolio->delete();

        return redirect()->route('portofolio.index')->with('success', 'Data Portofolio berhasil dihapus!');
    }
    public function show($id)
    {
        $portofolio = Portofolio_1001::findOrFail($id);
        return view('admin.portofolio.show', compact('portofolio'));
    }
}
