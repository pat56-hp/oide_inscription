@extends('layouts.base')
@section('content')
    <style>
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
    }

    .btn-excel:hover {
        background-color: #218838;
        color: white;
    }

    .btn-inscrire {
        background-color: #3c8dbc;
        color: white;
    }

    .btn-inscrire:hover {
        background-color: #367fa9;
        color: white;
    }

    .card {
        box-sizing: border-box;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 1.5rem;
    }

    .chart-container {
        position: relative;
        height: 40vh;
        width: 100%;
        max-width: 100%;
        margin-bottom: 1.5rem;
    }

    canvas {
        max-width: 100%;
        height: auto;
    }

    .table {
        margin-top: 20px;
    }

    h1 {
        color: #343a40;
        margin-bottom: 1.5rem;
    }

    .page-header-section {
        margin-bottom: 2rem;
    }

    .container-fluid {
        padding: 1.5rem;
    }

    .row {
        margin-bottom: 1.5rem;
    }

    .card-header {
        background-color: #1e58be;
        color: white;
        padding: 1rem;
        font-size: 1.25rem;
        text-align: center;
    }

    .card-body {
        padding: 2rem;
        text-align: center;
    }

    .card-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: #fff;
    }

    .card-text {
        font-size: 1.25rem;
        color: #fff;
    }

    .bg-primary {
        background-color: #ffce56;
    }

    .bg-success {
        background-color: #4bc0c0;
    }

    .bg-danger {
        background-color: #36a2eb;
    }

    .bg-warning {
        background-color: #ff6384;
    }

    </style>

    <div class="page-header-section" style="background-image:url({{asset('images/accueil/conference.jpg')}})" role="banner">
       <div class="tt-overlay"></div>
        <div class="container">
            <div class="page-header">
              <h2>DASHBOARD</h2>
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
    <div class="container1">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bars"></i> Menu
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item btn-inscrire" href="{{ route('inscription') }}">
                    <i class="fa fa-edit"></i> Inscrire une nouvelle personne
                </a>
                <a class="dropdown-item btn-inscrire" href="{{ route('inscrit.conference') }}">
                    <i class="fa fa-user"></i> Liste des inscrits
                </a>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row my-4">
            <div class="col-md-12">
            </div>
        </div>
        <div class="row">
            <!-- Dashboard Cards -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-white bg-primary">
                    <div class="card-header">Intervenants</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $intervenantsCount }}</h5>
                        <p class="card-text">intervenant(s)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-white bg-success">
                    <div class="card-header">Participants</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $participantsCount }}</h5>
                        <p class="card-text">participant(s)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-white bg-danger">
                    <div class="card-header">Homme</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $genreData['Homme'] ?? 0 }}</h5>
                        <p class="card-text">homme(s) inscrit(s).</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-white bg-warning">
                    <div class="card-header">Femme</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $genreData['Femme'] ?? 0 }}</h5>
                        <p class="card-text">femme(s) inscrite(s).</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Charts -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">Inscrits par Continent</div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="continentChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">Inscrits par Site Touristique</div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="siteTouristiqueChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Inscrits by Pays -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">Inscrits par Pays</div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="paysChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inscrits by Status -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">Inscrits par Statut</div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="statutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Data for charts
            var continentData = @json($getInscritsByContinent);
            var siteTouristiqueData = @json($getInscritsBySiteTouristique);
            var paysData = @json($getInscritsByCountry);
            var statutData = @json($getInscritsByStatus);

            // Chart for Continent
            var ctxContinent = document.getElementById('continentChart').getContext('2d');
            new Chart(ctxContinent, {
                type: 'pie',
                data: {
                    labels: Object.keys(continentData),
                    datasets: [{
                        data: Object.values(continentData),
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#E7E9ED']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                    }
                }
            });

            // Chart for Site Touristique
            var ctxSiteTouristique = document.getElementById('siteTouristiqueChart').getContext('2d');
            new Chart(ctxSiteTouristique, {
                type: 'bar',
                data: {
                    labels: Object.keys(siteTouristiqueData),
                    datasets: [{
                        label: 'Nombre de Choix',
                        data: Object.values(siteTouristiqueData),
                        backgroundColor: '#007bff'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true // Ensure y-axis starts at 0
                        }
                    }
                }
            });

            // Chart for Pays
            var ctxPays = document.getElementById('paysChart').getContext('2d');
            new Chart(ctxPays, {
                type: 'bar',
                data: {
                    labels: Object.keys(paysData),
                    datasets: [{
                        label: 'Nombre d\'Inscrits',
                        data: Object.values(paysData),
                        backgroundColor: '#28a745'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true // Ensure y-axis starts at 0
                        }
                    }
                }
            });

            // Chart for Statut
            var ctxStatut = document.getElementById('statutChart').getContext('2d');
            new Chart(ctxStatut, {
                type: 'doughnut',
                data: {
                    labels: Object.keys(statutData),
                    datasets: [{
                        data: Object.values(statutData),
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                    }
                }
            });
        });
    </script>
@endsection
