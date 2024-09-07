<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use PDF;

class AudienceController extends Controller
{

    public function index() {
        $data = Audience::all();

        return view('audience',[
            'data' => $data
        ]);
    }

    public function updateStatus($id, Request $request) {
        $kehadiran = Audience::find($id);
        if($kehadiran) {
            $kehadiran->status_kehadiran = $request->status_kehadiran;
            $kehadiran->save();

            return redirect()->back()->with('status', 'Data terupdate!');
        }else {
            return redirect()->back()->with('error', 'Ada kesalahan!');
        }
    }

    public function registrasi(Request $request) {
        $nokursi = DB::table('audiences')->pluck('no_kursi');
        $sisakursi = 200 - DB::table('audiences')->count();
        $audience = $request->audience;
        return view('registrasi', [
            'nokursi' => $nokursi,
            'sisakursi' => $sisakursi,
            'audience' => $audience
        ]);
    }

    public function store(Request $request) {
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
            $audience = Audience::create([
                'nama' => $request->nama,
                'alamat_domisili' => $request->alamat_domisili,
                'no_whatsapp' => $request->no_whatsapp,
                'no_kursi' => $request->no_kursi,
                'no_tiket' => 'POKAMAYAMAY-'.$request->no_kursi
            ]);

            return redirect()->route('registrasi.index', ['audience' => $audience])->with('success', 'Tiket berhasil dipesan!');
        }else {
            return redirect()->route('registrasi.index')->with('error', 'Tiket gagal dipesan!');
        }
    }

    public function downloadInvoice($id) {
        $audience = Audience::findOrFail($id);
        $pdf = PDF::loadView('invoice', compact('audience'));
        
        return $pdf->download('invoice.pdf');
    }
}
