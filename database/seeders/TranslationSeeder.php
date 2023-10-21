<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Translation;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Translation::create([
            'name'=>'Azerbaycan',
            'locale'=>'az'
        ]);

        Translation::create([
            'name'=>'English',
            'locale'=>'en'
        ]);

        Translation::create([
            'name'=>'Russia',
            'locale'=>'ru'
        ]);
    }
}
