<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Validator;
use App\Models\Inscrit;
use App\Models\InscritSiteTouristique;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use PDF;
use Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Log;

class SettingController extends Controller
{

  public function index(){
     $inscrits = Inscrit::all();
     return view('include.vue',compact('inscrits'));
  }

  //-------------------------INSCRIT----------------------------------------------------------------
      //AJOUTER NOUVEL INSCRIT

  public function ajoutInscrit(Request $request){
      $validator = \Validator::make($request->all(), [
          'civilite' => 'required',
          'nom' => 'required|string',
          'prenoms' => 'required|string',
          'email' => 'required|email',
          'nationalite' => 'required',
          'pays_residence' => 'required',
          'langue_com' => 'required',
          'numero_tel' => 'required|max:20',
      ], [
          'civilite.required' => 'Entrer votre civilité svp',
          'nom.required' => 'Entrer votre nom svp',
          'nom.string' => 'Entrer des chaîne de caractère svp',
          'prenoms.required' => 'Entrer votre prénom svp',
          'prenoms.string' => 'Entrer des chaîne de caractère svp',
          'nationalite.required' => 'Entrer votre nationalité svp',
          'pays_residence.required' => 'Entrer votre pays de résidence svp',
          'langue_com.required' => 'Entrer votre langue de communication svp',
          'email.email' => 'Entrez un format email correct',
          'email.required' => 'Entrez votre email svp',
          'numero_tel.required' => 'Entrez votre numero de telephone svp',
          'numero_tel.max' => 'Entrez un maximum de 20 caractères',
      ]);

      if (!$validator->passes()) {
          return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
      } else {
          $inscrit = new Inscrit();
          $inscrit->civilite = mb_strtoupper($request->civilite);
          $inscrit->nom = mb_strtoupper($request->nom);
          $inscrit->prenoms = mb_strtoupper($request->prenoms);
          $inscrit->genre = $request->genre;
          $inscrit->email = $request->email;
          $inscrit->nationalite = $request->nationalite;
          $inscrit->pays_residence = $request->pays_residence;
          $inscrit->inscription_tant_que = $request->inscription_tant_que;
          $inscrit->langue_com = $request->langue_com;
          $inscrit->numero_tel = $request->numero_tel;
          $inscrit->lieu_touristique = $request->visit_tourist_site === 'oui' ? 'OUI' : 'NON';
          $inscrit->etat = 'non validé';
          $query = $inscrit->save();

          // Enregistrement des lieux touristiques si sélectionnés
        if ($query && $request->visit_tourist_site === 'oui' && !empty($request->input('selected_sites_data'))) {

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
        // Réponse JSON en cas de succès
          return response()->json(['status' => 1, 'msg' => 'Votre inscription a été effectuée avec succès.']);
      }
  }
  //GET INSCRIT LIST
          public function getInscritList(){
              $inscrits = Inscrit::all();
              //dd($inscrits);

              return DataTables::of($inscrits)
                    ->addIndexColumn()
                    ->addColumn('actions', function($row){
                    if ($row->lieu_touristique == 'OUI') {
                      if ($row->etat == 'validé') {
                        return '<div class="btn-group" >
                                   <button class="btn btn-sm btn-success" disabled = true style="background:green"><i class="fa fa-check" id="cursorblock"></i></button>
                                </div>
                                <div class="btn-group" >
                                   <button class="btn btn-sm btn-info" data-id="'.$row['id'].'" id="lieu_touristik">Lieu Touristique</button>
                                </div>';
                      }else {
                        return '<div class="btn-group" >
                                    <button class="btn btn-sm btn-primary" data-id="'.$row['id'].'" id="editInscritBtn">Valider</button>
                                </div>
                                <div class="btn-group" >
                                    <button class="btn btn-sm btn-info" data-id="'.$row['id'].'" id="lieu_touristik">Lieu Touristique</button>
                                </div>';
                      }

                    }
                    else {
                      if ($row->etat == 'validé') {
                        return '<div class="btn-group" >
                                   <button class="btn btn-sm btn-success" disabled = true style="background:green"><i class="fa fa-check" id="cursorblock"></i></button>
                                </div>';
                      }else {
                        return '<div class="btn-group" >
                                    <button class="btn btn-sm btn-primary" data-id="'.$row['id'].'" id="editInscritBtn">Valider</button>
                                </div>';
                      }

                    }
                   })
                   ->rawColumns(['actions','checkbox'])
                   ->make(true);
          }


  //GET Inscrit Row //

  //GET Inscrit details
     public function getInscritId(Request $request){
        $inscrit_id = $request->inscrit_id;
        $inscritDetails = Inscrit::findOrFail($inscrit_id);
        return response()->json(['inscrits'=>$inscritDetails]);
     }

  //GET Lieu Touristiques details
    public function getLieuTouristik(Request $request){
        $inscrit_id = $request->inscrit_id;
        $inscritDetails = Inscrit::with('sitesTouristiques')->findOrFail($inscrit_id);
        return response()->json(['inscrits'=>$inscritDetails]);
    }

     //Envoie Email
     public function envoiMail(Request $request) {
         $inscrit_id = $request->cid;
         $inscritDetails = Inscrit::with('sitesTouristiques')->findOrFail($inscrit_id);

         $data["email"] = $inscritDetails->email;
         $data["title"] = "INVITATION PRE-CONFERENCE OIDE";
         $data["body"] = "SALUT";

         $data["civilite"] = $inscritDetails->civilite;
         $data["nom"] = $inscritDetails->nom;
         $data["prenoms"] = $inscritDetails->prenoms;
         $data["inscrit_en_tant_que"] = $inscritDetails->inscription_tant_que;

         // Récupérer les lieux touristiques choisis par l'inscrit
         $selectedSites = $inscritDetails->sitesTouristiques;
         $data["selectedSites"] = $selectedSites;

         // Générer le contenu du QR code
         $qrCodePath = public_path('images/logos/ioed.png');
         $qrCodeContent = 'http://invitation-oide.000.pe/inscrit/' .$inscrit_id .'/'. $data["nom"] .' '.$data["prenoms"];

         // Générer le QR code avec une image fusionnée, réduisant la taille de l'image fusionnée et en utilisant un QR code plus grand
         $qrCode = QrCode::format('png')
             ->size(100) // Utilisez une taille plus grande pour améliorer la scannabilité
             ->color(51, 122, 183)
             ->merge($qrCodePath, 0.20, true) // Réduisez la taille de l'image fusionnée
             ->generate($qrCodeContent);

         // Convertir le code QR en chaîne de caractères base64
         $qrCodeBase64 = base64_encode($qrCode);
         $data["qrcode"] = $qrCodeBase64;

         $data["logo"] = public_path('images/logos/logo-oide1.png');

         $pdf = PDF::loadView('pdf.invitation', $data);

         if ($inscritDetails->lieu_touristique == 'OUI') {
           $pdf1 = PDF::loadView('pdf.lieu_touristique', $data);
           // Envoyer l'email avec le PDF et le code QR en pièces jointes
           Mail::send('emails.mail', $data, function ($message) use ($data, $pdf, $pdf1) {
               $message->to($data["email"], $data["email"])
                   ->subject($data["title"])
                   ->attachData($pdf->output(), "invitation-oide.pdf")
                   ->attachData($pdf1->output(), "lieu_touristique.pdf");
           });
         }else {
           Mail::send('emails.mail', $data, function ($message) use ($data, $pdf) {
               $message->to($data["email"], $data["email"])
                   ->subject($data["title"])
                   ->attachData($pdf->output(), "invitation-oide.pdf");
           });
         }


         $inscrit = Inscrit::find($inscrit_id);
         $inscrit->etat = "validé";
         $update = $inscrit->save();

         return response()->json(['status' => 1, 'msg' => 'Email bien envoyé.']);
        }

        public function show($id)
         {
              $inscrit = Inscrit::find($id);

              // Si l'inscrit n'existe pas, renvoyer une erreur 404
              if (!$inscrit) {
                  abort(404, 'Inscrit non trouvé');
              }

              return view('scan.qrcode', compact('inscrit'));
         }
}
