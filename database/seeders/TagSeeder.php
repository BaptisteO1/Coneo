<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Theme;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Logement' => ['location', 'achat', 'colocation', 'contrat de location', 'droits du locataire', 'recherche de logement'],
            'Emploi' => ['recherche d\'emploi', 'CV', 'entretiens', 'plateformes en ligne', 'lettre de motivation', 'réseautage professionnel'],
            'Gestion Financière' => ['budget', 'épargne', 'crédit', 'planification financière', 'économies', 'dépenses'],
            'Assurances' => ['santé', 'habitation', 'automobile', 'responsabilité civile', 'comparaison d\'offres', 'déductions fiscales liées aux assurances'],
            'Impôts' => ['déclarations d\'impôts', 'taxes', 'déductions fiscales', 'crédits d\'impôts', 'optimisation fiscale', 'procédure de réclamation'],
            'Vie Quotidienne' => ['cuisine', 'entretien domestique', 'santé mentale', 'gestion du temps', 'organisation personnelle', 'exercice physique'],
            'Relations interpersonnelles' => ['communication', 'résolution de conflits', 'réseautage', 'écoute active', 'gestion des émotions', 'compromis'],
            'Bien-être' => ['exercice physique', 'nutrition', 'gestion du stress', 'méditation', 'relaxation', 'équilibre travail-vie personnelle'],
            'Scolarité' => ['méthodes de travail', 'préparation aux examens', 'gestion du temps scolaire', 'organisation des devoirs', 'orientation scolaire', 'techniques de révision'],
            'Aides' => ['bourses d\'études', 'aides au logement', 'aides sociales', 'subventions', 'services d\'orientation', 'aides à l\'emploi'],
        ];

        foreach ($tags as $themeName => $themeTags) {
            $theme = Theme::where('name', $themeName)->first();

            if ($theme) {
                foreach ($themeTags as $tagName) {
                    Tag::create([
                        'name' => $tagName,
                        'slug' => Str::slug($tagName),
                        'theme_id' => $theme->id,
                    ]);
                }
            }
        }
    }
}
