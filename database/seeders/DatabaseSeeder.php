<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin Samudra',
            'email' => 'admin@samudraartproduction.com',
            'password' => Hash::make('maklem4klem4k')
        ]);

        // Keluarga Panitia
        $this->call(KeluargaPanitiaSeeder::class);

        // Keluarga Peserta
        $this->call(KeluargaPesertaSeeder::class);

        // Kawan - kawan lainnya
    }
}
