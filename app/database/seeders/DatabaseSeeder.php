<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Layanan;
use App\Models\Pelanggan;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(10),
        ]);

        collect(
            [
                [
                    'nama_layanan' => 'Cuci Kering Setrika - 24 Jam',
                    'harga_layanan' => 6000,
                    'deskripsi' => '24 Jam '
                ],

                [
                    'nama_layanan' => 'Cuci Kering Setrika - 6 Jam',
                    'harga_layanan' => 7500,
                    'deskripsi' => '6 Jam '
                ],
                [
                    'nama_layanan' => 'Cuci Kering Setrika - 3 Jam',
                    'harga_layanan' => 10000,
                    'deskripsi' => '3 Jam '
                ],

                [
                    'nama_layanan' => 'Cuci Kering - 24 Jam ',
                    'harga_layanan' => 4000,
                    'deskripsi' => '26 Jam '
                ],
                [
                    'nama_layanan' => 'Cuci Kering - 6 Jam ',
                    'harga_layanan' => 5000,
                    'deskripsi' => '6 J am '
                ],
                [
                    'nama_layanan' => 'Cuci Kering - 3 Jam ',
                    'harga_layanan' => 7000,
                    'deskripsi' => '3 Jam '
                ],
                [
                    'nama_layanan' => 'Setrika - 24 Jam',
                    'harga_layanan' => 3000,
                    'deskripsi' => '24 Jam '
                ],
                [
                    'nama_layanan' => 'Setrika - 6 Jam',
                    'harga_layanan' => 4000,
                    'deskripsi' => '6 Jam '
                ],
                [
                    'nama_layanan' => 'Setrika - 3 Jam',
                    'harga_layanan' => 5000,
                    'deskripsi' => '3 Jam '
                ],
            ]
        )->each(function ($layanan) {
            DB::table('layanans')->insert($layanan);
        });


        // Pelanggan::create([
        //     'nama_pelanggan' => 'pelanggan 1',
        //     'layanan_id' => 1,
        //     'berat_cucian' => 2,
        //     'total_bayar'=
        //     'no_hp' => '089694273720',
        // ]);
    }
}
