<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AudienceController extends Controller
{
    public function index() {
        return view('registrasi');
    }

    public function store(Request $request) {
        // Kalo sudah bener modal kursi nya, ubah no_kursi menjadi unique di migration dan uncomment no_kursi
        $validated = $request->validate([
            'nama' => 'required|max:100',
            'alamat_domisili' => 'required',
            'no_whatsapp' => 'required',
            // 'no_kursi' => 'required'
        ]);

        if($validated) {
            Audience::create([
                'nama' => $request->nama,
                'alamat_domisili' => $request->alamat_domisili,
                'no_whatsapp' => $request->no_whatsapp,
                'no_kursi' => 'A99',
                'no_tiket' => 'POKAMAYAMAY-'.'A99'
            ]);

            return redirect()->route('registrasi.index')->with('success', 'Tiket berhasil dipesan!');
        }else {
            return redirect()->route('registrasi.index')->with('error', 'Tiket gagal dipesan!');
        }
    }
}
