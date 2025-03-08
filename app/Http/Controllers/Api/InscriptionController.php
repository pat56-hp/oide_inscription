<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InscriptionRequest;
use App\Models\Conference;
use App\Models\Inscrit;
use App\Models\InscritSiteTouristique;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller
{
    public function inscription(InscriptionRequest $request)
    {
        try {
            DB::beginTransaction();

            $inscrit = Inscrit::create([
                'civilite' => strtoupper($request->civilite),
                'nom' => strtoupper($request->nom),
                'prenoms' => strtoupper($request->prenoms),
                'genre' => $request->genre,
                'email' => $request->email,
                'nationalite' => $request->nationalite,
                'pays_residence' => $request->pays_residence,
                'inscription_tant_que' => "Participant",
                'langue_com' => $request->langue_com,
                'numero_tel' => $request->numero_tel,
                'lieu_touristique' => $request->lieu_touristique === 'oui' ? 'OUI' : 'NON',
                'etat' => 'non validé',
            ]);
    
            // Enregistrement des lieux touristiques si sélectionnés
            if ($inscrit && $request->visit_tourist_site === 'oui' && !empty($request->selected_sites_data)) {
                $selectedSitesData = json_decode($request->input('selected_sites_data'), true);
    
                if (is_array($selectedSitesData)) {
                    foreach ($selectedSitesData as $siteData) {
                        InscritSiteTouristique::create([
                            'inscrit_id' => $inscrit->id,
                            'name' => $siteData['name'],
                            'image' => $siteData['img'],
                            'description' => $siteData['desc'],
                            'price' => $siteData['price'],
                        ]);
                    }
                }
            }

            //Sauvegarde des conferences selectionnées
            $inscrit->conferences()->attach($request->conferences);

            DB::commit();
            return response()->json([
                'message' => 'Inscription reussie',
                'data' => $inscrit->load('sitesTouristiques')
            ], JsonResponse::HTTP_OK);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
               'message' => 'Une erreur est survenue lors de l\'inscription',
                'error' => $th->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getConferences(){
        $conferences = Conference::orderBy('theme')->get();
        return response()->json([
            'message' => "Liste des conferences",
            'data' => $conferences
        ], JsonResponse::HTTP_OK);
    }
}
