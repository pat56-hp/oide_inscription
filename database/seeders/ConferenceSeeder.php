<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'theme' => 'Le triple B, outil de diagnostic du progrès social et épicentre du développement durable des nations',
                'debut' => '2025-03-24 14:00:00',
                'fin' => '2025-03-24 16:00:00',
                'mode' => 'Conférence inaugurale',
                'moderateur' => null,
            ],
            [
                'theme' => 'Les nouveaux mécanismes financiers de l’OIDE',
                'debut' => '2025-03-25 09:00:00',
                'fin' => '2025-03-25 10:00:00',
                'mode' => 'Panel',
                'moderateur' => null,
            ],
            [
                'theme' => 'Le pacte mondial de solidarité: quels enjeux pour le développement durable des nations ?',
                'debut' => '2025-03-25 10:00:00',
                'fin' => '2025-03-25 11:00:00',
                'mode' => 'Panel',
                'moderateur' => null,
            ],
            [
                'theme' => 'L’OIDE : moteur du nouveau plan mondial de relance économique et du progrès social des nations.',
                'debut' => '2025-03-25 11:00:00',
                'fin' => '2025-03-25 12:00:00',
                'mode' => 'Panel',
                'moderateur' => null,
            ],
            [
                'theme' => 'L’OIDE dans la lutte contre la pauvreté pour le progrès social : Quel impact sur l’économie mondiale ?',
                'debut' => '2025-03-25 14:00:00',
                'fin' => '2025-03-25 15:00:00',
                'mode' => 'Panel',
                'moderateur' => null,
            ],
            [
                'theme' => 'L’OIDE et le nouveau plan de relance économique mondiale et de progrès social pour les Nations',
                'debut' => '2025-03-25 15:00:00',
                'fin' => '2025-03-25 16:00:00',
                'mode' => 'Panel',
                'moderateur' => null,
            ],
            [
                'theme' => 'L’O.I.D.E face aux défis de la transition économique mondiale et l’indépendance économique des nations',
                'debut' => '2025-03-26 09:00:00',
                'fin' => '2025-03-26 10:00:00',
                'mode' => 'Panel',
                'moderateur' => null,
            ],
            [
                'theme' => 'Développement durable, souveraineté des États et sécurisation des populations',
                'debut' => '2025-03-26 10:00:00',
                'fin' => '2025-03-26 11:00:00',
                'mode' => 'Panel',
                'moderateur' => null,
            ],
            [
                'theme' => 'Art, Culture et Education : contribution et moyens stratégiques de l’OIDE pour un développement économique',
                'debut' => '2025-03-26 11:00:00',
                'fin' => '2025-03-26 12:00:00',
                'mode' => 'Panel',
                'moderateur' => null,
            ],
            [
                'theme' => 'Changement de mentalité pour un meilleur avenir de l’humanité',
                'debut' => '2025-03-26 14:00:00',
                'fin' => '2025-03-26 15:00:00',
                'mode' => 'Panel',
                'moderateur' => null,
            ],
            [
                'theme' => 'Comment l’OIDE permettra à l’Afrique, potentielle première puissance agricole mondiale, de nourrir l’humanité ?',
                'debut' => '2025-03-26 15:00:00',
                'fin' => '2025-03-26 16:00:00',
                'mode' => 'Panel',
                'moderateur' => null,
            ],
            [
                'theme' => 'Éliminer les freins au développement des Nations',
                'debut' => '2025-03-27 09:00:00',
                'fin' => '2025-03-27 10:00:00',
                'mode' => 'Panel',
                'moderateur' => null,
            ],
        ];

        foreach ($datas as $data) {
            \App\Models\Conference::updateOrCreate(['theme' => $data['theme']], $data);
        }
    }
}
