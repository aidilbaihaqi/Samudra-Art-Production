<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Audience;

class KeluargaPanitiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Keluarga Bang adi F1 - F8
        Audience::create([
            'nama' => 'Keluarga Bang Adi',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'F1',
            'no_tiket' => 'POKAMAYAMAY-F1'
        ]);
        Audience::create([
            'nama' => 'Keluarga Bang Adi',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'F2',
            'no_tiket' => 'POKAMAYAMAY-F2'
        ]);
        Audience::create([
            'nama' => 'Keluarga Bang Adi',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'F3',
            'no_tiket' => 'POKAMAYAMAY-F3'
        ]);
        Audience::create([
            'nama' => 'Keluarga Bang Adi',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'F4',
            'no_tiket' => 'POKAMAYAMAY-F4'
        ]);
        Audience::create([
            'nama' => 'Keluarga Bang Adi',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'F5',
            'no_tiket' => 'POKAMAYAMAY-F5'
        ]);
        Audience::create([
            'nama' => 'Keluarga Bang Adi',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'F6',
            'no_tiket' => 'POKAMAYAMAY-F6'
        ]);
        Audience::create([
            'nama' => 'Keluarga Bang Adi',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'F7',
            'no_tiket' => 'POKAMAYAMAY-F7'
        ]);
        Audience::create([
            'nama' => 'Keluarga Bang Adi',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'F8',
            'no_tiket' => 'POKAMAYAMAY-F8'
        ]);

        // Lele Rendy E1-E2
        Audience::create([
            'nama' => 'Booking Rendy',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'E1',
            'no_tiket' => 'POKAMAYAMAY-E1'
        ]);
        Audience::create([
            'nama' => 'Booking Rendy',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'E2',
            'no_tiket' => 'POKAMAYAMAY-E2'
        ]);

        // Bookingan Ari E3
        Audience::create([
            'nama' => 'Booking Ari',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'E3',
            'no_tiket' => 'POKAMAYAMAY-E3'
        ]);

        // Bookingan Bang Bembeng E4-E6
        Audience::create([
            'nama' => 'Booking Bembeng',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'E4',
            'no_tiket' => 'POKAMAYAMAY-E4'
        ]);
        Audience::create([
            'nama' => 'Booking Bembeng',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'E5',
            'no_tiket' => 'POKAMAYAMAY-E5'
        ]);
        Audience::create([
            'nama' => 'Booking Bembeng',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'E6',
            'no_tiket' => 'POKAMAYAMAY-E6'
        ]);

        // Bookingan Dony E7-E8
        Audience::create([
            'nama' => 'Booking Dony',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'E7',
            'no_tiket' => 'POKAMAYAMAY-E7'
        ]);
        Audience::create([
            'nama' => 'Booking Dony',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'E8',
            'no_tiket' => 'POKAMAYAMAY-E8'
        ]);

        // Bookingan Sirih Junjung G9-G11
        Audience::create([
            'nama' => 'Booking Sirih Junjung',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'G9',
            'no_tiket' => 'POKAMAYAMAY-G9'
        ]);
        Audience::create([
            'nama' => 'Booking Sirih Junjung',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'G10',
            'no_tiket' => 'POKAMAYAMAY-G10'
        ]);
        Audience::create([
            'nama' => 'Booking Sirih Junjung',
            'alamat_domisili' => 'xxxxxxxx',
            'no_whatsapp' => 'xxxxxxxxxxxx',
            'no_kursi' => 'G11',
            'no_tiket' => 'POKAMAYAMAY-G11'
        ]);
    }
}
