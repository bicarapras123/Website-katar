<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Layanan::query();

        // Tambahan fitur search (nama / email)
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $layanans = $query->latest()->get();

        return view('layanan', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layanans');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'nomor_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'pesan' => 'nullable|string',
        ]);

        Layanan::create($request->all());

        return redirect()->route('layanan')
                         ->with('success', 'Data layanan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        return view('layanans.show', compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layanan $layanan)
    {
        return view('layanans.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'nomor_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'pesan' => 'nullable|string',
        ]);

        $layanan->update($request->all());

        return redirect()->route('layanans.index')
                         ->with('success', 'Data layanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanan $layanan)
    {
        $layanan->delete();

        return redirect()->route('layanans.index')
                         ->with('success', 'Data layanan berhasil dihapus.');
    }
}
