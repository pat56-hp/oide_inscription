<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InscriptionRequest;
use App\Models\Conference;
use App\Models\Inscrit;
use App\Models\InscritSiteTouristique;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

/**
 * @OA\Info(
 *      title="API d'Inscription",
 *      version="1.0.0",
 *      description="Documentation de l'API d'inscription et de gestion des conférences"
 * )
 *
 * @OA\Tag(
 *     name="Inscriptions",
 *     description="Endpoints pour la gestion des inscriptions"
 * )
 */
class InscriptionController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/v1/inscription",
     *     tags={"Inscriptions"},
     *     summary="Inscription d'un utilisateur",
     *     description="Permet à un utilisateur de s'inscrire à une ou plusieurs conférences.",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"civilite","nom","prenoms","email","nationalite","pays_residence","langue_com","numero_tel","conferences"},
     *             @OA\Property(property="civilite", type="string", example="M."),
     *             @OA\Property(property="nom", type="string", example="DOE"),
     *             @OA\Property(property="prenoms", type="string", example="John"),
     *             @OA\Property(property="genre", type="string", example="Homme"),
     *             @OA\Property(property="email", type="string", format="email", example="johndoe@example.com"),
     *             @OA\Property(property="nationalite", type="string", example="Ivoirienne"),
     *             @OA\Property(property="pays_residence", type="string", example="Côte d'Ivoire"),
     *             @OA\Property(property="langue_com", type="string", example="Français"),
     *             @OA\Property(property="numero_tel", type="string", example="+2250707070707"),
     *             @OA\Property(property="lieu_touristique", type="string", example="oui"),
     *             @OA\Property(property="visit_tourist_site", type="string", example="oui"),
     *             @OA\Property(property="selected_sites_data", type="array", @OA\Items(
     *                 @OA\Property(property="name", type="string", example="Basilique Notre-Dame de la Paix"),
     *                 @OA\Property(property="img", type="string", example="https://example.com/image.jpg"),
     *                 @OA\Property(property="desc", type="string", example="Un monument historique"),
     *                 @OA\Property(property="price", type="number", example=2000)
     *             )),
     *             @OA\Property(property="conferences", type="array", @OA\Items(type="integer", example=1))
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Inscription réussie",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Inscription réussie"),
     *             @OA\Property(property="data", type="object")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erreur lors de l'inscription",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Une erreur est survenue lors de l'inscription"),
     *             @OA\Property(property="error", type="string", example="Détails de l'erreur")
     *         )
     *     )
     * )
     */
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

    /**
     * @OA\Get(
     *     path="/api/v1/conferences",
     *     tags={"Inscriptions"},
     *     summary="Récupérer la liste des conférences",
     *     description="Retourne toutes les conférences disponibles.",
     *     @OA\Response(
     *         response=200,
     *         description="Liste des conférences",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Liste des conférences"),
     *             @OA\Property(property="data", type="array", @OA\Items(
     *                 @OA\Property(property="id", type="integer", example=1),
     *                 @OA\Property(property="theme", type="string", example="Laravel & Clean Architecture"),
     *                 @OA\Property(property="debut", type="string", example="2025-04-01 10:00:00"),
     *                 @OA\Property(property="fin", type="string", example="2025-04-01 12:00:00"),
     *                 @OA\Property(property="mode", type="string", example="En ligne"),
     *                 @OA\Property(property="moderateur", type="string", example="John Doe")
     *             ))
     *         )
     *     )
     * )
     */
    public function getConferences(){
        $conferences = Conference::orderBy('theme')->get();
        return response()->json([
            'message' => "Liste des conferences",
            'data' => $conferences
        ], JsonResponse::HTTP_OK);
    }
}
