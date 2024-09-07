<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audience;

class DashboardController extends Controller
{
    public function index() {
        
        $belumHadir = Audience::where('status_kehadiran', 0)->count();
        $sudahHadir = Audience::where('status_kehadiran', 1)->count();
        $vip = 24;

        return view('dashboard', [
            'belumHadir' => $belumHadir,
            'sudahHadir' => $sudahHadir,
            'vip' => $vip
        ]);
    }
}
