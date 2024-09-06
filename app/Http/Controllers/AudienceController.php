<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AudienceController extends Controller
{

    public function index() {
        $data = Audience::all();

        return view('audience',[
            'data' => $data
        ]);
    }

    public function registrasi() {
        $nokursi = DB::table('audiences')->pluck('no_kursi');
        $sisakursi = 200 - DB::table('audiences')->count();
        return view('registrasi', [
            'nokursi' => $nokursi,
            'sisakursi' => $sisakursi
        ]);
    }

    public function store(Request $request) {
        // Kalo sudah bener modal kursi nya, ubah no_kursi menjadi unique di migration dan uncomment no_kursi
        $validated = $request->validate([
            'nama' => 'required|max:100',
            'alamat_domisili' => 'required',
            'no_whatsapp' => 'required',
            'no_kursi' => 'required'
        ], [
            'nama.required' => 'Nama perlu diisi!',
            'alamat_domisili.required' => 'Alamat perlu diisi!',
            'no_whatsapp.required' => 'No Whatsapp perlu diisi!',
            'no_kursi' => 'Kursi belum dipilih'
        ]);

        if($validated) {
            Audience::create([
                'nama' => $request->nama,
                'alamat_domisili' => $request->alamat_domisili,
                'no_whatsapp' => $request->no_whatsapp,
                'no_kursi' => $request->no_kursi,
                'no_tiket' => 'POKAMAYAMAY-'.$request->no_kursi
            ]);

            return redirect()->route('registrasi.index')->with('success', 'Tiket berhasil dipesan!');
        }else {
            return redirect()->route('registrasi.index')->with('error', 'Tiket gagal dipesan!');
        }
    }
}
