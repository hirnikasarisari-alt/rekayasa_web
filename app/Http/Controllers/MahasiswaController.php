<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{

   public function index(\Illuminate\Http\Request $request)
  {
    $keyword = $request->keyword;

    $mahasiswa = Mahasiswa::when($keyword, function ($query) use ($keyword) {
        $query->where('nim', 'like', "%$keyword%")
              ->orWhere('alamat', 'like', "%$keyword%");
    })->get();

    return view('Layouts.mahasiswa.index', compact('mahasiswa', 'keyword'));
   }

    
     public function create()
    {
    return view('layouts.mahasiswa.create');
    }


    
    public function store(\Illuminate\Http\Request $request)
    {
    $validated = $request->validate([
        'nim' => 'required|unique:mahasiswas,nim',
        'nama' => 'required|string|max:255',
        'jk' => 'required|in:L,P',
        'prodi' => 'required|string|max:255',
        'no_telp' => 'required|string|max:20',
        'alamat' => 'required|string|max:255',
    ]);

    Mahasiswa::create($validated);

    return redirect()
        ->route('mahasiswa.index')
        ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }


  public function deleteData($nim)
  {
    $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();

    $mahasiswa->delete();

    return redirect()
        ->route('mahasiswa.index')
        ->with('success', 'Data mahasiswa berhasil dihapus.');
  }

   public function updateData(\Illuminate\Http\Request $request, $nim)
  {
    $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();

    $validated = $request->validate([
        'nim' => 'required|unique:mahasiswas,nim,' . $mahasiswa->nim . ',nim',
        'nama' => 'required|string|max:255',
        'jk' => 'required|in:L,P',
        'prodi' => 'required|string|max:255',
        'no_telp' => 'required|string|max:20',
        'alamat' => 'required|string|max:255',
    ]);

    $mahasiswa->update($validated);

    return redirect()
        ->route('mahasiswa.index')
        ->with('success', 'Data mahasiswa berhasil diperbarui.');
  }

    public function editData($nim)
  {
    $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();

    return view('Layouts.mahasiswa.edit', compact('mahasiswa'));
  }

    
}
