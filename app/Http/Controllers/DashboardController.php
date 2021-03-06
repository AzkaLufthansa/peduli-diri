<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catatan;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.home.index', [
            'title' => 'Home'
        ]);
    }

    public function catatan()
    {
        return view('dashboard.catatanPerjalanan.index', [
            'title' => 'Catatan Perjalanan',
            'catatans' => Catatan::where('user_id', auth()->user()->id)->searching()->urutkan()->paginate(7)->withQueryString()
        ]);
    }

    public function buat()
    {
        return view('dashboard.isiData.index', [
            'title' => 'Isi Data'
        ]);
    }
}
