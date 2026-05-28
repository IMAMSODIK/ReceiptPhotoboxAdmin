<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "Dashboard"
        ];

        try {
            return view('dashboard.index', $data);
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
        }
    }
}
