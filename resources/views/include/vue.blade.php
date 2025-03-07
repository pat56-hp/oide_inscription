@extends('layouts.base')
@section('content')
<style media="screen">
  .voir {
    color: #3c8dbc;
  }

  .container1 {
            text-align: right; /* Aligne le contenu du container à droite */
            margin-bottom: 20px;
        }

        .dropdown-menu {
            min-width: 300px; /* Ajuste la largeur minimale du menu déroulant */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 0;
            background-color: #fff; /* Assure que l'arrière-plan est blanc pour la lisibilité */
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            border-bottom: 1px solid #e9ecef;
            transition: background-color 0.3s ease;
            color: #007bff;
            text-decoration: none;
        }

        .dropdown-item:last-child {
            border-bottom: none;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        .dropdown-item i, .dropdown-item img {
            margin-right: 10px;
            font-size: 18px; /* Ajuste la taille des icônes si nécessaire */
        }

        .dropdown-item img {
            width: 21px; /* Ajuste la taille de l'image si nécessaire */
            height: auto;
        }

        .dropdown-item a {
            color: inherit; /* Utilise la couleur du parent pour le lien */
            text-decoration: none;
            font-weight: 500; /* Ajuste le poids de la police pour un texte plus lisible */
            display: flex; /* Assure que le texte s'aligne bien avec les icônes */
            align-items: center; /* Centre le texte verticalement avec l'icône */
            width: 100%;
        }

        .dropdown-item a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004080;
        }

  .btn-excel {
    background-color: #28a745;
    color: white;
    margin-right: 10px; /* Marge à droite pour séparer les boutons */
  }

  .btn-excel:hover {
    background-color: #218838;
    color: white;
  }

  .btn-excel a {
    color: white;
    text-decoration: none;
  }

  .btn-excel .excel-logo {
    vertical-align: middle;
    margin-right: 5px;
  }

  .btn-inscrire {
    background-color: #3c8dbc;
    color: white;
  }

  .btn-inscrire:hover {
    background-color: #367fa9;
    color: white;
  }

  .btn-inscrire a {
    color: white;
    text-decoration: none;
  }

  .table-container {
    margin-top: 1px; /* Ajustez cette valeur selon votre préférence */
    margin-bottom: 1px; /* Ajustez cette valeur selon votre préférence */
  }
</style>

<div class="page-header-section" style="background-image:url({{asset('images/accueil/conference.jpg')}})" role="banner">
   <div class="tt-overlay"></div>
    <div class="container">
        <div class="page-header">
          <h2>LES INSCRITS - Pré-Conférence OIDE</h2>
         <ul class="breadcrumb">
            <li>
                <a href="{{ route('countdown') }}">Accueil</a>
            </li>
            <li class="active">
                Liste
            </li>
        </ul>
      </div><!-- /.page-header -->
    </div> <!-- /.container -->
</div> <!-- .page-header-section -->

<div class="table-container">
  <div class="container1">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bars"></i> Menu
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item btn-excel" href="{{ route('inscrits.export') }}" id="exportButton">
                    <img src="{{ asset('images/excel-logo.png') }}" class="excel-logo" alt="Excel Logo">
                    Télécharger le fichier en Excel
                </a>
                <a class="dropdown-item btn-inscrire" href="{{ route('inscription') }}">
                    <i class="fa fa-edit"></i> Inscrire une nouvelle personne
                </a>
                <a class="dropdown-item btn-inscrire" href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </div>
        </div>
    </div>

  <div class="page-wrapper content-wrapper page-no-sidebar">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div id="main" class="posts-content" role="main">
              <article id="post-6219" class="page-content post-6219 page type-page status-publish hentry">
    	             <div class="entry-content">
    		            <div class="uwp-login-class bsui sdel-dc2db578" >
                      <div class="uwp_page">
                         <div class="row">
    	                      <div class="card mx-auto container-fluid p-0 border-0" >
                      					<div class="card-body">
                      				        <h3 class="card-title text-center mb-4">LISTE DES INSCRITS POUR LA PRE-CONFERENCE</h3>
                                        <div class="nav-tabs-custom">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="inscrit">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="card-body">
                                                                <table class="table table-striped table-hover table-bordered nowrap" style="width:100%" id="inscrit-table">
                                                                  <thead>
                                                                      <tr>
                                                                          <th>#</th>
                                                                          <th>CIVILITE</th>
                                                                          <th>NOM</th>
                                                                          <th>PRENOMS</th>
                                                                          <th>GENRE</th>
                                                                          <th>ADRESSE EMAIL</th>
                                                                          <th>NUMERO DE TEL</th>
                                                                          <th>PAYS DE RESIDENCE</th>
                                                                          <th>INSCRIT EN TANT QUE</th>
                                                                          <th>LANGUE DE COM</th>
                                                                          <th>NATIONALITE</th>
                                                                          <th>DATE D'INSCRIPTION</th>
                                                                          <th>VISITE TOURISTIQUE</th>
                                                                          <th>ETAT</th>
                                                                    </tr>
                                                                  </thead>
                                                                  <tbody></tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                   </div>
                                                </div>
                                  <!-- /.tab-pane -->
                                            </div>
                                <!-- /.tab-content -->
                                       </div>
                              <!-- /.nav-tabs-custom -->
                      			   </div>
    	                     </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- .entry-content -->
             </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
