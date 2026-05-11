<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin Utama
        \App\Models\User::firstOrCreate(
            ['email' => 'admin@amikom.ac.id'],
            [
                'name' => 'Admin Amikom',
                'password' => bcrypt('password'),
            ]
        );

        // 2. Kategori
        $cat1 = \App\Models\Category::firstOrCreate(
            ['slug' => 'seminar-it'],
            [
                'name' => 'Seminar IT',
            ]
        );

        $cat2 = \App\Models\Category::firstOrCreate(
            ['slug' => 'entertainment'],
            [
                'name' => 'Entertainment',
            ]
        );

        $cat3 = \App\Models\Category::firstOrCreate(
            ['slug' => 'workshop'],
            [
                'name' => 'Workshop',
            ]
        );

        // 3. Event

        \App\Models\Event::firstOrCreate(
            ['title' => 'UI/UX Masterclass'],
            [
                'category_id' => $cat1->id,
                'description' => 'Belajar desain UI/UX dari dasar hingga mahir.',
                'date' => '2026-05-01 10:00:00',
                'location' => 'Ruang A',
                'price' => 75000,
                'stock' => 100,
                'poster_path' => 'posters/event1.png',
            ]
        );

        \App\Models\Event::firstOrCreate(
            ['title' => 'E-Sport U-Champ'],
            [
                'category_id' => $cat2->id,
                'description' => 'Turnamen game antar mahasiswa.',
                'date' => '2026-05-03 13:00:00',
                'location' => 'Hall Utama',
                'price' => 50000,
                'stock' => 200,
                'poster_path' => 'posters/event2.png',
            ]
        );

        \App\Models\Event::firstOrCreate(
            ['title' => 'Workshop Laravel'],
            [
                'category_id' => $cat3->id,
                'description' => 'Pelatihan membuat website dengan Laravel.',
                'date' => '2026-05-05 09:00:00',
                'location' => 'Lab Komputer',
                'price' => 60000,
                'stock' => 50,
                'poster_path' => 'posters/event3.png',
            ]
        );

        \App\Models\Event::firstOrCreate(
            ['title' => 'AI Summit 2026'],
            [
                'category_id' => $cat1->id,
                'description' => 'Seminar tentang perkembangan AI.',
                'date' => '2026-05-07 13:00:00',
                'location' => 'Auditorium',
                'price' => 80000,
                'stock' => 120,
                'poster_path' => 'posters/event4.png',
            ]
        );

        \App\Models\Event::firstOrCreate(
            ['title' => 'Music Festival Night'],
            [
                'category_id' => $cat2->id,
                'description' => 'Festival musik dengan berbagai band.',
                'date' => '2026-05-10 19:00:00',
                'location' => 'Lapangan',
                'price' => 100000,
                'stock' => 300,
                'poster_path' => 'posters/event5.png',
            ]
        );

        \App\Models\Event::firstOrCreate(
            ['title' => 'Workshop Public Speaking'],
            [
                'category_id' => $cat3->id,
                'description' => 'Belajar berbicara di depan umum.',
                'date' => '2026-05-12 10:00:00',
                'location' => 'Ruang B',
                'price' => 55000,
                'stock' => 80,
                'poster_path' => 'posters/event6.png',
            ]
        );
    }
}