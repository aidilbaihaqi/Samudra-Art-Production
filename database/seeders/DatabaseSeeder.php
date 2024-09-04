<?php

namespace Database\Seeders;

use App\Models\Audience;
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
            'password' => Hash::make('pok4may4may')
        ]);

        //  Sample Data
        Audience::create([
            'nama' => 'Sample Name',
            'alamat_domisili' => 'Sample Address',
            'no_whatsapp' => '081268335349',
            'no_kursi' => 'A1'
        ]);
    }
}
