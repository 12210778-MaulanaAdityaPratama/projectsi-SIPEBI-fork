<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BeritaSeeder::class,
            LembagaSeeder::class,
            PendudukSeeder::class,
            SktmSeeder::class,
            SuratUsahaSeeder::class,
            AgendaSeeder::class,
            StrukturOrganisasiSeeder::class,
            GaleriSeeder::class,
            GeografisSeeder::class,
            SejarahSeeder::class,
            StrukturFotoSeeder::class,
            VisiMisiSeeder::class,
            TentangSeeder::class,
        ]);
    }
}
