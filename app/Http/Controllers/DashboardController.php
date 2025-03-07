<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscrit;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
  public function index()
  {
    $inscrits = Inscrit::all();

    // Get site touristique names from a model or predefined array
    $siteTouristiqueNames = [
        'Visite du Parc National du Banco' => 'Visite du Parc National du Banco',
        'Balade Lagunaire' => 'Balade Lagunaire',
        'Grand-Bassam' => 'Grand-Bassam',
        'Yamoussoukro' => 'Yamoussoukro',
        'Domaine BINI Forêt' => 'Domaine BINI Forêt',
        'Long Séjour - Bouaké' => 'Long Séjour - Bouaké',
        'Long Séjour - Korhogo' => 'Long Séjour - Korhogo',
        'Long Séjour - Man' => 'Long Séjour - Man'
    ];

    $data = [
        'getInscritsByContinent' => $this->getInscritsByContinent(),
        'getInscritsByCountry' => $this->getInscritsByCountry(),
        'getInscritsBySiteTouristique' => $this->getInscritsBySiteTouristique($siteTouristiqueNames),
        'getInscritsByStatus' => $this->getInscritsByStatus(),
        'intervenantsCount' => $this->countInscritsByType('Intervenant'),
        'participantsCount' => $this->countInscritsByType('Participant'),
        'genreData' => $this->getInscritsByGenre(),
        'inscritsByDate' => $this->getInscritsByDate($inscrits),
    ];
    return view('dashboard.index', $data);
  }

    private function getInscritsByCountry()
    {
        // Compte les inscriptions pour chaque pays
        return Inscrit::select(DB::raw('COUNT(*) as count'), 'pays_residence')
            ->groupBy('pays_residence')
            ->get()
            ->mapWithKeys(function ($item) {
                return [$item->pays_residence => ($item->count ?? 0)];
            });
    }

    private function getInscritsByContinent()
    {
        // Obtenir les inscriptions par pays
        $inscritsByCountry = $this->getInscritsByCountry();

        // Convertir les pays en continents et faire le cumul des inscriptions pour chaque continent
        $inscritsByContinent = $inscritsByCountry->mapToGroups(function ($count, $country) {
            $continent = $this->getContinent($country) ?? 'Inconnu'; // Valeur par défaut
            return [$continent => $count];
        })->map(function ($counts) {
            return $counts->sum();
        });

        return $inscritsByContinent;
    }

    private function getInscritsBySiteTouristique($siteTouristiqueNames)
    {
        $sites = array_keys($siteTouristiqueNames);
        $counts = [];

        foreach ($sites as $site) {
            $counts[$siteTouristiqueNames[$site]] = Inscrit::whereHas('sitesTouristiques', function ($query) use ($site) {
                $query->where('name', $site);
            })->count();
        }

        return $counts;
    }

    private function getInscritsByStatus()
    {
        return Inscrit::select(DB::raw('COUNT(*) as count'), 'etat')
            ->groupBy('etat')
            ->get()
            ->mapWithKeys(function ($item) {
                return [$item->etat => ($item->count ?? 0)];
            });
    }

    private function countInscritsByType($type)
    {
        return Inscrit::where('inscription_tant_que', $type)->count();
    }

    private function getInscritsByGenre()
    {
        return [
            'Homme' => Inscrit::where('genre', 'Homme')->count(),
            'Femme' => Inscrit::where('genre', 'Femme')->count()
        ];
    }

    private function getInscritsByDate($inscrits)
    {
        return $inscrits->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('M d, Y');
        })->map->count();
    }

    private function getContinent($country)
    {
        $countryToContinent = [

              "Afghanistan" => "Asie",
              "Afrique du Sud" => "Afrique",
              "Albanie" => "Europe",
              "Algerie" => "Afrique",
              "Allemagne" => "Europe",
              "Andorre" => "Europe",
              "Angola" => "Afrique",
              "Antigua-et-Barbuda" => "Amérique",
              "Arabie Saoudite" => "Asie",
              "Argentine" => "Amérique",
              "Armenie" => "Europe",
              "Australie" => "Océanie",
              "Autriche" => "Europe",
              "Azerbaidjan" => "Europe",
              "Bahamas" => "Amérique",
              "Bahrein" => "Asie",
              "Bangladesh" => "Asie",
              "Barbade" => "Amérique",
              "Belgique" => "Europe",
              "Belize" => "Amérique",
              "Benin" => "Afrique",
              "Bhoutan" => "Asie",
              "Bielorussie" => "Europe",
              "Bolivie" => "Amérique",
              "Boznie Herzegovine" => "Europe",
              "Botswana" => "Afrique",
              "Bresil" => "Amérique",
              "Brunei Darussalam" => "Asie",
              "Bulgarie" => "Europe",
              "Burkina Faso" => "Afrique",
              "Burundi" => "Afrique",
              "Cap Vert" => "Afrique",
              "Cambodge" => "Asie",
              "Cameroun" => "Afrique",
              "Canada" => "Amérique",
              "Chili" => "Amérique",
              "Chine" => "Asie",
              "Chypre" => "Europe",
              "Colombie" => "Amérique",
              "Comores" => "Afrique",
              "Congo" => "Afrique",
              "Costa Rica" => "Amérique",
              "Côte d'Ivoire" => "Afrique",
              "Croatie" => "Europe",
              "Cuba" => "Amérique",
              "Danemark" => "Europe",
              "Djibouti" => "Afrique",
              "Dominique" => "Amérique",
              "Egypte" => "Afrique",
              "El Salvador" => "Amérique",
              "Emirates Arabes Unis" => "Asie",
              "Equateur" => "Amérique",
              "Erythree" => "Afrique",
              "Espagne" => "Europe",
              "Estonie" => "Europe",
              "Etats-Unis d'Amerique" => "Amérique",
              "Ethiopie" => "Afrique",
              "Ex République Yugoslave de Macedonie" => "Europe",
              "Federation de Russie" => "Europe",
              "Fidji" => "Océanie",
              "Finlande" => "Europe",
              "France" => "Europe",
              "Gabon" => "Afrique",
              "Gambie" => "Afrique",
              "Georgie" => "Europe",
              "Ghana" => "Afrique",
              "Grece" => "Europe",
              "Grenade" => "Amérique",
              "Guatemala" => "Amérique",
              "Guinee" => "Afrique",
              "Guinee-Bissau" => "Afrique",
              "Guinee Equatoriale" => "Afrique",
              "Guyane" => "Amérique",
              "Haiti" => "Amérique",
              "Honduras" => "Amérique",
              "Hongrie" => "Europe",
              "Îles Marshall" => "Océanie",
              "Îles Salomon" => "Océanie",
              "Inde" => "Asie",
              "Indonesie" => "Asie",
              "Iran" => "Asie",
              "Irak" => "Asie",
              "Irlande" => "Europe",
              "Islande" => "Europe",
              "Israel" => "Asie",
              "Italie" => "Europe",
              "Jamaique" => "Amérique",
              "Japon" => "Asie",
              "Jordanie" => "Asie",
              "Kazakhstan" => "Asie",
              "Kenya" => "Afrique",
              "Kirghizistan" => "Asie",
              "Kiribati" => "Océanie",
              "Koweit" => "Asie",
              "Lesotho" => "Afrique",
              "Lettonie" => "Europe",
              "Liban" => "Asie",
              "Liberia" => "Afrique",
              "Lybie" => "Afrique",
              "Liechtenstein" => "Europe",
              "Lituanie" => "Europe",
              "Luxembourg" => "Europe",
              "Madagascar" => "Afrique",
              "Malaisie" => "Asie",
              "Malawi" => "Afrique",
              "Maldives" => "Asie",
              "Mali" => "Afrique",
              "Malte" => "Europe",
              "Maroc" => "Afrique",
              "Maurice" => "Afrique",
              "Mauritanie" => "Afrique",
              "Mexique" => "Amérique",
              "Micronesie" => "Océanie",
              "Monaco" => "Europe",
              "Mongolie" => "Asie",
              "Montenegro" => "Europe",
              "Mozambique" => "Afrique",
              "Myanmar(Birmanie)" => "Asie",
              "Namibie" => "Afrique",
              "Nauru" => "Océanie",
              "Nepal" => "Asie",
              "Nicaragua" => "Amérique",
              "Niger" => "Afrique",
              "Nigeria" => "Afrique",
              "Norvege" => "Europe",
              "Nouvelle Zelande" => "Océanie",
              "Oman" => "Asie",
              "Ouganda" => "Afrique",
              "Ouzbekistan" => "Asie",
              "Pakistan" => "Asie",
              "Palaos" => "Océanie",
              "Panama" => "Amérique",
              "Papouasie-Nouvelle-Guinée" => "Océanie",
              "Paraguay" => "Amérique",
              "Pays-Bas" => "Europe",
              "Perou" => "Amérique",
              "Philippines" => "Asie",
              "Pologne" => "Europe",
              "Portugal" => "Europe",
              "Qatar" => "Asie",
              "Republique Arabe Syrienne" => "Asie",
              "Republique Centrafricaine" => "Afrique",
              "Republique de Coree" => "Asie",
              "Republique de Moldavie" => "Europe",
              "Republique Democratique du Congo" => "Afrique",
              "Republique Democratique Populaire Lao" => "Asie",
              "Republique Dominicaine" => "Amérique",
              "Republique Populaire Democratique de Coree" => "Asie",
              "Republique Tcheque" => "Europe",
              "Republique-Unie de Tanzanie" => "Afrique",
              "Roumanie" => "Europe",
              "Royaume-Uni de Grande-Bretagne et d'Irlande du Nord" => "Europe",
              "Rwanda" => "Afrique",
              "Saint-Kitts-et-Névis" => "Amérique",
              "Saint Marin" => "Europe",
              "Saint-Vincent-et-les Grenadines" => "Amérique",
              "Sainte-Lucie" => "Amérique",
              "Samoa" => "Océanie",
              "Sao Tome-et-Principe" => "Afrique",
              "Senegal" => "Afrique",
              "Serbie" => "Europe",
              "Seychelles" => "Afrique",
              "Sierra Leone" => "Afrique",
              "Singapour" => "Asie",
              "Slovaquie" => "Europe",
              "Slovenie" => "Europe",
              "Somalie" => "Afrique",
              "Soudan" => "Afrique",
              "Soudan du sud" => "Afrique",
              "Sri Lanka" => "Asie",
              "Suede" => "Europe",
              "Suisse" => "Europe",
              "Surinam" => "Amérique",
              "Swaziland" => "Afrique",
              "Tadjikistan" => "Asie",
              "Tchad" => "Afrique",
              "Thailande" => "Asie",
              "Timor-Leste" => "Asie",
              "Togo" => "Afrique",
              "Tonga" => "Océanie",
              "Trinite-et-Tobago" => "Amérique",
              "Tunisie" => "Afrique",
              "Turkmenistan" => "Asie",
              "Turquie" => "Europe",
              "Tuvalu" => "Océanie",
              "Ukraine" => "Europe",
              "Uruguay" => "Amérique",
              "Vanuatu" => "Océanie",
              "Venezuela" => "Amérique",
              "Viet Nam" => "Asie",
              "Yemen" => "Asie",
              "Zambie" => "Afrique",
              "Zimbabwe" => "Afrique"
        ];

        return $countryToContinent[$country] ?? 'Inconnu';
    }
}
