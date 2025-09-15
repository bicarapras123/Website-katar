<?php

namespace App\Http\Controllers;

use App\Models\Layanan;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel layanans
        $layanans = Layanan::latest()->get();
        return view('dashboard', compact('layanans'));
    }
}
