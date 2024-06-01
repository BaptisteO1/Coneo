<?php

namespace Database\Seeders;

use \App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $themes = collect(['Logement', 'Emploi', 'Gestion Financière', 'Assurances', 'Impôts', 'Vie Quotidienne', 'Relations interpersonnelles', 'Bien-être', 'Scolarité',  'Aides']);

        
        $themes->each(function ($theme) {
            Theme::factory()->create([
                'name' => $theme,
                'slug' => Str::slug($theme),
            ]);
        });

    }
}
