<style>
       .container1 {
            display: flex;
            justify-content: flex-end; /* Aligne le contenu du container à droite */
            margin-bottom: 20px;
        }

        .dropdown-menu {
            min-width: 200px; /* Ajuste la largeur minimale du menu déroulant */
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

        .dropdown-item i {
            margin-right: 10px;
            font-size: 18px; /* Ajuste la taille des icônes si nécessaire */
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004080;
        }

    .form-section {
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .form-title {
      margin-bottom: 20px;
      font-weight: bold;
    }

    /* Style pour la section des lieux touristiques */
          #touristSection {
            background-color: #f8f9fa;
            border-radius: 10px;
          }
          /* Container for the site details */
          .site-detail-container {
              display: flex;
              flex-wrap: wrap; /* Allows wrapping for smaller screens */
              align-items: flex-start;
              margin-bottom: 20px;
          }

          /* Site details (name, description, price) */
          .site-details {
              flex: 1;
              padding-right: 20px;
              margin-bottom: 10px; /* Space between content and image */
          }

          /* Site price style */
          .site-price {
              font-weight: bold;
              color: #007bff;
          }

          /* Container for the site image */
          .site-image-container {
              flex-shrink: 0;
              width: 100%;
              max-width: 300px; /* Adjusted width for responsiveness */
              height: auto;
              max-height: 200px; /* Adjusted height for responsiveness */
              overflow: hidden;
              border-radius: 8px;
              display: flex;
              justify-content: center;
              align-items: center;
          }

          /* Style for the site image */
          .site-image {
              width: 100%;
              height: auto;
              object-fit: cover; /* Ensures the image covers the container while preserving aspect ratio */
              transition: transform 0.3s ease;
          }

          /* Zoom effect on hover */
          .site-image:hover {
              transform: scale(1.1); /* Adjusted zoom effect */
          }

          /* Responsive adjustments */
          @media (max-width: 768px) {
              .site-detail-container {
                  flex-direction: column;
                  align-items: center;
                  text-align: center;
              }

              .site-details {
                  padding-right: 0;
                  margin-bottom: 20px;
              }

              .site-image-container {
                  max-width: 100%; /* Make image container full width on smaller screens */
                  max-height: 250px; /* Adjust height for better fit on smaller screens */
              }

              .site-image {
                  transform: scale(1); /* Reset zoom effect on very small screens */
              }
          }

          @media (max-width: 576px) {
              .site-detail-container {
                  padding: 10px; /* Add some padding on very small screens */
              }

              .site-image-container {
                  max-height: 200px; /* Adjust height to fit smaller screens */
              }
          }


        .progress-container {
            width: 100%;
            margin: 20px 0;
        }

        .progressbar {
            list-style-type: none;
            display: flex;
            justify-content: space-between;
            padding: 0;
            counter-reset: step;
        }

        .progressbar li {
            text-align: center;
            width: 100%;
            position: relative;
            counter-increment: step;
            font-weight: normal; /* Default font weight */
            color: black; /* Default text color */
        }

        .progressbar li::before {
            content: counter(step);
            width: 30px;
            height: 30px;
            line-height: 30px;
            display: block;
            background: #ddd;
            border-radius: 50%;
            margin: 0 auto 10px auto;
        }

        .progressbar li.active::before {
            background: #007bff;
            color: white;
        }

        .progressbar li::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background: #ddd;
            top: 15px;
            left: -50%;
            z-index: -1;
        }

        .progressbar li.active::after {
            background: #007bff;
        }

        .progressbar li:first-child::after {
            content: none;
        }

        /* New styles for active state */
        .progressbar li.active {
            font-weight: bold; /* Make the text bold */
            color: #007bff; /* Change the text color to blue */
        }


  </style>
<div class="page-header-section" style="background-image:url({{asset('images/accueil/conference.jpg')}})" role="banner">
            <div class="tt-overlay"></div>

    <div class="container">
        <div class="page-header">
                                <h2>FICHE D'INSCRIPTION PR&Eacute;-CONF&Eacute;RENCE</h2>

                    <ul class="breadcrumb">
            <li>
                <a href="{{ route('countdown') }}">Accueil</a>
            </li>
            <li class="active">
                Formulaire
            </li>

        </ul>
      </div><!-- /.page-header -->
    </div> <!-- /.container -->
</div> <!-- .page-header-section -->

<style lang="scss">

// workaround
.intl-tel-input {
  display: table-cell;
}
.intl-tel-input .selected-flag {
  z-index: 4;
}
.intl-tel-input .country-list {
  z-index: 5;
}
.input-group .intl-tel-input .form-control {
  border-top-left-radius: 4px;
  border-top-right-radius: 0;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 0;
}

.container1 {
    display: flex;
    justify-content: center;
    margin-top: 20px; /* Ajustez la marge supérieure selon vos besoins */
}

.btn {
    /* Ajoutez ici vos styles personnalisés pour le bouton */
}

.voir {
  color: #3c8dbc;
}

.container1 {
  text-align: center;
  margin-bottom: 20px;
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

@auth
<div class="container1">
      <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-bars"></i> Menu
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item btn-inscrire" href="{{ route('inscrit.conference') }}">
                  <i class="fa fa-user"></i> Liste des inscrits
              </a>
              <a class="dropdown-item btn-inscrire" href="{{ route('dashboard') }}">
                  <i class="fa fa-dashboard"></i> Dashboard
              </a>
          </div>
      </div>
  </div>
@endauth


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
                    				<h3 class="card-title text-center mb-4">INSCRIVEZ-VOUS DÈS MAINTENANT POUR RECEVOIR VOTRE INVITATION</h3>
                            <div class="container mt-5">
                              <form role="form" action="{{ route('ajouter.inscrit') }}" method="post" enctype="multipart/form-data" id="inscription-form">
                                  @csrf
                                  <!-- Barre de progression -->
                                  <div class="progress-container">
                                      <ul class="progressbar">
                                          <li class="active" id="progress-1">Informations Personnelles</li>
                                          <li id="progress-2">Lieux Touristiques</li>
                                      </ul>
                                  </div>

                                  <!-- Section 1: Informations Personnelles -->
                                  <div class="form-section" id="section-1">
                                      <div class="row">

                                            <div class="col-md-6">
                                                <!-- Civilité -->
                                                <div class="form-group">
                                                    <label>Civilité</label>
                                                    <select class="form-control" name="civilite">
                                                        <option value="0" selected="true" disabled="true">Selectionnez...</option>
                                                        <option value="Monsieur">Monsieur</option>
                                                        <option value="Madame">Madame</option>
                                                        <option value="Mademoiselle">Mademoiselle</option>
                                                    </select>
                                                    <span class="text-danger error-text civilite_error"></span>
                                                </div>
                                                <!-- Nom -->
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom" style="text-transform: uppercase">
                                                    <span class="text-danger error-text nom_error"></span>
                                                </div>
                                                <!-- Prénoms -->
                                                <div class="form-group">
                                                    <label>Prénoms</label>
                                                    <input type="text" class="form-control" name="prenoms" placeholder="Entrez votre prénom" style="text-transform: uppercase">
                                                    <span class="text-danger error-text prenoms_error"></span>
                                                </div>
                                                <!-- Genre -->
                                                <div class="form-group">
                                                    <label>Genre</label>
                                                    <div class="radio">
                                                        <label><input type="radio" name="genre" value="Homme" checked> Homme</label>
                                                        <label style="margin-left:10px;"><input type="radio" name="genre" value="Femme"> Femme</label>
                                                    </div>
                                                </div>
                                                <!-- Adresse email -->
                                                <div class="form-group">
                                                    <label>Adresse email</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Entrez votre adresse email">
                                                    <span class="text-danger error-text email_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <!-- Pays de résidence -->
                                                <div class="form-group">
                                                  <label>Pays de résidence</label>
                                                  <select class="form-control" name="pays_residence">
                                                     <option value="0" selected="true" disabled="true">selectionnez votre pays de résidence</option>
                                                     <option value="Afghanistan">Afghanistan </option>
                                                     <option value="Afrique du Sud">Afrique du Sud </option>
                                                     <option value="Albanie">Albanie </option>
                                                     <option value="Algerie">Algerie </option>
                                                     <option value="Allemagne">Allemagne </option>
                                                     <option value="Andorre">Andorre </option>
                                                     <option value="Angola">Angola </option>
                                                     <option value="Antigua-et-Barbuda">Antigua-et-Barbuda </option>
                                                     <option value="Arabie Saoudite">Arabie Saoudite </option>
                                                     <option value="Argentine">Argentine </option>
                                                     <option value="Armenie">Armenie </option>
                                                     <option value="Australie">Australie </option>
                                                     <option value="Autriche">Autriche </option>
                                                     <option value="Azerbaidjan">Azerbaidjan </option>

                                                     <option value="Bahamas">Bahamas </option>
                                                     <option value="Bahrein">Bahrein </option>
                                                     <option value="Bangladesh">Bangladesh </option>
                                                     <option value="Barbade">Barbade </option>
                                                     <option value="Belgique">Belgique </option>
                                                     <option value="Belize">Belize </option>
                                                     <option value="Benin">Benin </option>
                                                     <option value="Bhoutan">Bhoutan </option>
                                                     <option value="Bielorussie">Bielorussie </option>
                                                     <option value="Bolivie">Bolivie </option>
                                                     <option value="Boznie Herzegovine">Boznie Herzegovine </option>
                                                     <option value="Botswana">Botswana </option>
                                                     <option value="Bresil">Bresil </option>
                                                     <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                     <option value="Bulgarie">Bulgarie </option>
                                                     <option value="Burkina Faso">Burkina Faso </option>
                                                     <option value="Burundi">Burundi </option>
                                                     <option value="Cap vert">Cap Vert </option>
                                                     <option value="Cambodge">Cambodge </option>
                                                     <option value="Cameroun">Cameroun </option>
                                                     <option value="Canada">Canada </option>
                                                     <option value="Chili">Chili </option>
                                                     <option value="Chine">Chine </option>
                                                     <option value="Chypre">Chypre </option>
                                                     <option value="Colombie">Colombie </option>
                                                     <option value="Comores">Comores </option>
                                                     <option value="Congo">Congo </option>
                                                     <option value="Costa Rica">Costa Rica </option>
                                                     <option value="Côte d'Ivoire">Côte d'Ivoire </option>
                                                     <option value="Croatie">Croatie </option>
                                                     <option value="Cuba">Cuba </option>

                                                     <option value="Danemark">Danemark </option>
                                                     <option value="Djibouti">Djibouti </option>
                                                     <option value="Dominique">Dominique </option>

                                                     <option value="Egypte">Egypte </option>
                                                     <option value="El Salvador">El Salvador </option>
                                                     <option value="Emirates Arabes Unis">Emirates Arabes Unis </option>
                                                     <option value="Equateur">Equateur </option>
                                                     <option value="Erythree">Erythree </option>
                                                     <option value="Espagne">Espagne </option>
                                                     <option value="Estonie">Estonie </option>
                                                     <option value="Etats-Unis d'Amerique">Etats-Unis d'Amerique </option>
                                                     <option value="Ethiopie">Ethiopie </option>
                                                     <option value="Ex République Yugoslave de Macedonie">Ex République Yugoslave de Macedonie </option>

                                                     <option value="Federation de Russie">Federation de Russie </option>
                                                     <option value="Fidji">Fidji </option>
                                                     <option value="Finlande">Finlande </option>
                                                     <option value="France">France </option>

                                                     <option value="Gabon">Gabon </option>
                                                     <option value="Gambie">Gambie </option>
                                                     <option value="Georgie">Georgie </option>
                                                     <option value="Ghana">Ghana </option>
                                                     <option value="Grece">Grece </option>
                                                     <option value="Grenade">Grenade </option>
                                                     <option value="Guatemala">Guatemala</option>
                                                     <option value="Guinee">Guinee </option>
                                                     <option value="Guinee-Bissau">Guinee-Bissau </option>
                                                     <option value="Guinee equatoriale">Guinee Equatoriale </option>
                                                     <option value="Guyane">Guyane </option>

                                                     <option value="Haiti">Haiti </option>
                                                     <option value="Honduras">Honduras </option>
                                                     <option value="Hongrie">Hongrie </option>

                                                     <option value="Îles Marshall">Îles Marshall </option>
                                                     <option value="Îles Salomon">Îles Salomon </option>
                                                     <option value="Inde">Inde </option>
                                                     <option value="Indonesie">Indonesie </option>
                                                     <option value="Iran">Iran </option>
                                                     <option value="Irak">Irak </option>
                                                     <option value="Irlande">Irlande </option>
                                                     <option value="Islande">Islande </option>
                                                     <option value="Israel">Israel </option>
                                                     <option value="Italie">italie </option>

                                                     <option value="Jamaique">Jamaique </option>
                                                     <option value="Japon">Japon </option>
                                                     <option value="Jordanie">Jordanie </option>

                                                     <option value="Kazakhstan">Kazakhstan </option>
                                                     <option value="Kenya">Kenya </option>
                                                     <option value="Kirghizstan">Kirghizistan </option>
                                                     <option value="Kiribati">Kiribati </option>
                                                     <option value="Koweit">Koweit </option>

                                                     <option value="Lesotho">Lesotho </option>
                                                     <option value="Lettonie">Lettonie </option>
                                                     <option value="Liban">Liban </option>
                                                     <option value="Liberia">Liberia </option>
                                                     <option value="Lybie">Lybie </option>
                                                     <option value="Liechtenstein">Liechtenstein </option>
                                                     <option value="Lituanie">Lituanie </option>
                                                     <option value="Luxembourg">Luxembourg </option>

                                                     <option value="Madagascar">Madagascar </option>
                                                     <option value="Malaisie">Malaisie </option>
                                                     <option value="Malawi">Malawi </option>
                                                     <option value="Maldives">Maldives </option>
                                                     <option value="Mali">Mali </option>
                                                     <option value="Malte">Malte </option>
                                                     <option value="Maroc">Maroc </option>
                                                     <option value="Maurice">Maurice </option>
                                                     <option value="Mauritanie">Mauritanie </option>
                                                     <option value="Mexique">Mexique </option>
                                                     <option value="Micronesie">Micronesie </option>
                                                     <option value="Monaco">Monaco </option>
                                                     <option value="Mongolie">Mongolie </option>
                                                     <option value="Montenegro">Montenegro </option>
                                                     <option value="Mozambique">Mozambique </option>
                                                     <option value="Myanmar(Birmanie)">Myanmar(Birmanie) </option>

                                                     <option value="Namibie">Namibie </option>
                                                     <option value="Nauru">Nauru </option>
                                                     <option value="Nepal">Nepal </option>
                                                     <option value="Nicaragua">Nicaragua </option>
                                                     <option value="Niger">Niger </option>
                                                     <option value="Nigeria">Nigeria </option>
                                                     <option value="Norvege">Norvege </option>
                                                     <option value="Nouvelle Zelande">Nouvelle Zelande </option>

                                                     <option value="Oman">Oman </option>
                                                     <option value="Ouganda">Ouganda </option>
                                                     <option value="Ouzbekistan">Ouzbekistan </option>

                                                     <option value="Pakistan">Pakistan </option>
                                                     <option value="Palaos">Palaos </option>
                                                     <option value="Panama">Panama </option>
                                                     <option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée </option>
                                                     <option value="Paraguay">Paraguay </option>
                                                     <option value="Pays-Bas">Pays-Bas </option>
                                                     <option value="Perou">Perou </option>
                                                     <option value="Philippines">Philippines </option>
                                                     <option value="Pologne">Pologne </option>
                                                     <option value="Portugal">Portugal </option>

                                                     <option value="Qatar">Qatar </option>

                                                     <option value="Republique Arabe Syrienne">Republique Arabe Syrienne </option>
                                                     <option value="Republique Centrafricaine">Republique Centrafricaine </option>
                                                     <option value="Republique de Coree">Republique de Coree </option>
                                                     <option value="Republique de Moldavie">Republique de Moldavie </option>
                                                     <option value="Republique Democratique du Congo">Republique Democratique du Congo </option>
                                                     <option value="Republique Democratique Populaire Lao">epublique Democratique Populaire Lao </option>
                                                     <option value="Republique Dominicaine">Republique Dominicaine </option>
                                                     <option value="Republique Populaire Democratique de Coree">Republique Populaire Democratique de Coree </option>
                                                     <option value="Republique Tcheque">Republique Tcheque </option>
                                                     <option value="Republique-Unie de Tanzanie">Republique-Unie de Tanzanie </option>
                                                     <option value="Roumanie">Roumanie </option>
                                                     <option value="Royaume-Uni de Grande-Bretagne et d'Irlande du Nord">Royaume-Uni de Grande-Bretagne et d'Irlande du Nord </option>
                                                     <option value="Rwanda">Rwanda </option>

                                                     <option value="Saint-Kitts-et-Névis">Saint-Kitts-et-Névis </option>
                                                     <option value="Saint Marin">Saint Marin </option>
                                                     <option value="Saint-Vincent-et-les Grenadines">Saint-Vincent-et-les Grenadines </option>
                                                     <option value="Sainte Lucie">Sainte-Lucie </option>
                                                     <option value="Samoa">Samoa </option>
                                                     <option value="Sao Tome-et-Principe">Sao Tome-et-Principe </option>
                                                     <option value="Senegal">Senegal </option>
                                                     <option value="Serbie">Serbie </option>
                                                     <option value="Seychelles">Seychelles </option>
                                                     <option value="Sierra Leone">Sierra Leone </option>
                                                     <option value="Singapour">Singapour </option>
                                                     <option value="Slovaquie">Slovaquie </option>
                                                     <option value="Slovenie">Slovenie</option>
                                                     <option value="Somalie">Somalie </option>
                                                     <option value="Soudan">Soudan </option>
                                                     <option value="Soudan du sud">Soudan du sud </option>
                                                     <option value="Sri Lanka">Sri Lanka </option>
                                                     <option value="Suede">Suede </option>
                                                     <option value="Suisse">Suisse </option>
                                                     <option value="Surinam">Surinam </option>
                                                     <option value="Swaziland">Swaziland </option>

                                                     <option value="Tadjikistan">Tadjikistan </option>
                                                     <option value="Tchad">Tchad </option>
                                                     <option value="Thailande">Thailande </option>
                                                     <option value="Timor-Leste">Timor-Leste </option>
                                                     <option value="Togo">Togo </option>
                                                     <option value="Tonga">Tonga </option>
                                                     <option value="Trinite-et-Tobago">Trinite-et-Tobago </option>
                                                     <option value="Tunisie">Tunisie </option>
                                                     <option value="Turkmenistan">Turmenistan </option>
                                                     <option value="Turquie">Turquie </option>
                                                     <option value="Tuvalu">Tuvalu </option>

                                                     <option value="Ukraine">Ukraine </option>
                                                     <option value="Uruguay">Uruguay </option>

                                                     <option value="Vanuatu">Vanuatu </option>
                                                     <option value="Vatican">Vatican </option>
                                                     <option value="Venezuela">Venezuela </option>
                                                     <option value="Viêt Nam">Viêt Nam </option>

                                                     <option value="Yemen">Yemen </option>

                                                     <option value="Zambie">Zambie </option>
                                                     <option value="Zimbabwe">Zimbabwe </option>
                                                  </select>
                                                  <span class="text-danger error-text pays_residence_error"></span>
                                                </div>
                                                <!-- Numéro de téléphone -->
                                                <div class="form-group">
                                                    <label>Numéro de téléphone</label>
                                                    <div class="input-group">
                                                        <input id="phone" type="tel" name="numero_tel" class="form-control w-100">
                                                        <div class="input-group-append">
                                                            <i class="fa fa-phone btn-contact"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger error-text numero_tel_error"></span>
                                                </div>
                                                <!-- Nationalité -->
                                                <div class="form-group">
                                                    <label>Nationalité</label>
                                                    <select class="form-control" name="nationalite">
                                                       <option value="0" selected="true" disabled="true">selectionnez votre nationalité</option>
                                                       <option value="Afghane">Afghane (Afghanistan)</option>
                                                       <option value="Albanaise">Albanaise (Albanie)</option>
                                                       <option value="Algérienne">Algérienne (Algérie)</option>
                                                       <option value="Allemande">Allemande (Allemagne)</option>
                                                       <option value="Americaine">Americaine (États-Unis d'Amérique)</option>
                                                       <option value="Andorrane">Andorrane (Andorre)</option>
                                                       <option value="Angolaise">Angolaise (Angola)</option>
                                                       <option value="Antiguaise-et-Barbudienne">Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
                                                       <option value="Argentine">Argentine (Argentine)</option>
                                                       <option value="Armenienne">Armenienne (Arménie)</option>
                                                       <option value="Australienne">Australienne (Australie)</option>
                                                       <option value="Autrichienne">Autrichienne (Autriche)</option>
                                                       <option value="Azerbaïdjanaise">Azerbaïdjanaise (Azerbaïdjan)</option>
                                                       <option value="Bahamienne">Bahamienne (Bahamas)</option>
                                                       <option value="Bahreinienne">Bahreinienne (Bahreïn)</option>
                                                       <option value="Bangladaise">Bangladaise (Bangladesh)</option>
                                                       <option value="Barbadienne">Barbadienne (Barbade)</option>
                                                       <option value="Belge">Belge (Belgique)</option>
                                                       <option value="Belizienne">Belizienne (Belize)</option>
                                                       <option value="Béninoise">Béninoise (Bénin)</option>
                                                       <option value="Bhoutanaise">Bhoutanaise (Bhoutan)</option>
                                                       <option value="Biélorusse">Biélorusse (Biélorussie)</option>
                                                       <option value="Birmans">Birmans (Myanmar)</option>
                                                       <option value="Bissau-Guinéenne">Bissau-Guinéenne (Guinée-Bissau)</option>
                                                       <option value="Bolivienne">Bolivienne (Bolivie)</option>
                                                       <option value="Bosnienne">Bosnienne (Bosnie-Herzégovine)</option>
                                                       <option value="Botswanaise">Botswanaise (Botswana)</option>
                                                       <option value="Brésilienne">Brésilienne (Brésil)</option>
                                                       <option value="Britannique">Britannique (Royaume-Uni)</option>
                                                       <option value="Brunéienne">Brunéienne (Brunéi Darussalam)</option>
                                                       <option value="Bulgare">Bulgare (Bulgarie)</option>
                                                       <option value="Burkinabée">Burkinabée (Burkina Faso)</option>
                                                       <option value="Burundaise">Burundaise (Burundi)</option>
                                                       <option value="Cap-verdienne">Cap-verdienne (Cap-Vert)</option>
                                                       <option value="Cambodgienne">Cambodgienne (Cambodge)</option>
                                                       <option value="Camerounaise">Camerounaise (Cameroun)</option>
                                                       <option value="Canadienne">Canadienne (Canada)</option>
                                                       <option value="Centrafricaine">Centrafricaine (République Centrafricaine)</option>
                                                       <option value="Chilienne">Chilienne (Chili)</option>
                                                       <option value="Chinoise">Chinoise (Chine)</option>
                                                       <option value="Chypriote">Chypriote (Chypre)</option>
                                                       <option value="Colombienne">Colombienne (Colombie)</option>
                                                       <option value="Comorienne">Comorienne (Comores)</option>
                                                       <option value="Congolaise">Congolaise (Congo)</option>
                                                       <option value="Congolaise">Congolaise (République Démocratique du Congo)</option>
                                                       <option value="Costaricaine">Costaricaine (Costa Rica)</option>
                                                       <option value="Croate">Croate (Croatie)</option>
                                                       <option value="Cubaine">Cubaine (Cuba)</option>
                                                       <option value="Danoise">Danoise (Danemark)</option>
                                                       <option value="Djiboutienne">Djiboutienne (Djibouti)</option>
                                                       <option value="Dominicaine">Dominicaine (République dominicaine)</option>
                                                       <option value="Dominiquaise">Dominiquaise (Dominique)</option>
                                                       <option value="Égyptienne">Égyptienne (Égypte)</option>
                                                       <option value="Émirienne">Émirienne (Émirats arabes unis)</option>
                                                       <option value="Équato-guineenne">Équato-guineenne (Guinée équatoriale)</option>
                                                       <option value="Équatorienne">Équatorienne (Équateur)</option>
                                                       <option value="Érythréenne">Érythréenne (Érythrée)</option>
                                                       <option value="Espagnole">Espagnole (Espagne)</option>
                                                       <option value="Estonienne">Estonienne (Estonie)</option>
                                                       <option value="Éthiopienne">Éthiopienne (Éthiopie)</option>
                                                       <option value="Fidjienne">Fidjienne (Fidji)</option>
                                                       <option value="Finlandaise">Finlandaise (Finlande)</option>
                                                       <option value="Française">Française (France)</option>
                                                       <option value="Gabonaise">Gabonaise (Gabon)</option>
                                                       <option value="Gambienne">Gambienne (Gambie)</option>
                                                       <option value="Georgienne">Georgienne (Géorgie)</option>
                                                       <option value="Ghanéenne">Ghanéenne (Ghana)</option>
                                                       <option value="Grenadienne">Grenadienne (Grenade)</option>
                                                       <option value="Guatémaltèque">Guatémaltèque (Guatemala)</option>
                                                       <option value="Guinéenne">Guinéenne (Guinée)</option>
                                                       <option value="Guyanienne">Guyanienne (Guyana)</option>
                                                       <option value="Haïtienne">Haïtienne (Haïti)</option>
                                                       <option value="Hellénique">Hellénique (Grèce)</option>
                                                       <option value="Hondurienne">Hondurienne (Honduras)</option>
                                                       <option value="Hongroise">Hongroise (Hongrie)</option>
                                                       <option value="Indienne">Indienne (Inde)</option>
                                                       <option value="Indonésienne">Indonésienne (Indonésie)</option>
                                                       <option value="Iranienne">Iranienne (Iran)</option>
                                                       <option value="Irakienne">Irakienne (Irak)</option>
                                                       <option value="Irlandaise">Irlandaise (Irlande)</option>
                                                       <option value="Islandaise">Islandaise (Islande)</option>
                                                       <option value="Israélienne">Israélienne (Israël)</option>
                                                       <option value="Italienne">Italienne (Italie)</option>
                                                       <option value="Ivoirienne">Ivoirienne (Côte d'Ivoire)</option>
                                                       <option value="Jamaïcaine">Jamaïcaine (Jamaïque)</option>
                                                       <option value="Japonaise">Japonaise (Japon)</option>
                                                       <option value="Jordanienne">Jordanienne (Jordanie)</option>
                                                       <option value="Kazakhstanaise">Kazakhstanaise (Kazakhstan)</option>
                                                       <option value="Kenyane">Kenyane (Kenya)</option>
                                                       <option value="Kirghize">Kirghize (Kirghizistan)</option>
                                                       <option value="Kiribatienne">Kiribatienne (Kiribati)</option>
                                                       <option value="Kittitienne et Névicienne">Kittitienne et Névicienne (Saint-Kitts-et-Névis)</option>
                                                       <option value="Koweïtienne">Koweïtienne (Koweït)</option>
                                                       <option value="Laotienne">Laotienne (République Démocratique Populaire Laos)</option>
                                                       <option value="Lesothane">Lesothane (Lesotho)</option>
                                                       <option value="Lettone">Lettone (Lettonie)</option>
                                                       <option value="Libanaise">Libanaise (Liban)</option>
                                                       <option value="Libérienne">Libérienne (Libéria)</option>
                                                       <option value="Libyenne">Libyenne (Libye)</option>
                                                       <option value="Liechtensteinoise">Liechtensteinoise (Liechtenstein)</option>
                                                       <option value="Lituanienne">Lituanienne (Lituanie)</option>
                                                       <option value="Luxembourgeoise">Luxembourgeoise (Luxembourg)</option>
                                                       <option value="Macédonienne">Macédonienne (Ex République Yugoslave de Macédonie)</option>
                                                       <option value="Malgache">Malgache (Madagascar)</option>
                                                       <option value="Malaisienne">Malaisienne (Malaisie)</option>
                                                       <option value="Malawienne">Malawienne (Malawi)</option>
                                                       <option value="Maldivienne">Maldivienne (Maldives)</option>
                                                       <option value="Maliennes">Maliennes (Mali)</option>
                                                       <option value="Maltaise">Maltaise (Malte)</option>
                                                       <option value="Marocaine">Marocaine (Maroc)</option>
                                                       <option value="Marshallaise">Marshallaise (Îles Marshall)</option>
                                                       <option value="Mauricienne">Mauricienne (Maurice)</option>
                                                       <option value="Mauritanienne">Mauritanienne (Mauritanie)</option>
                                                       <option value="Mexicaine">Mexicaine (Mexique)</option>
                                                       <option value="Micronésienne">Micronésienne (Micronésie)</option>
                                                       <option value="Moldave">Moldave (République de Moldovie)</option>
                                                       <option value="Monegasque">Monegasque (Monaco)</option>
                                                       <option value="Mongole">Mongole (Mongolie)</option>
                                                       <option value="Monténégrine">Monténégrine (Monténégro)</option>
                                                       <option value="Mozambicaine">Mozambicaine (Mozambique)</option>
                                                       <option value="Namibienne">Namibienne (Namibie)</option>
                                                       <option value="Nauruane">Nauruane (Nauru)</option>
                                                       <option value="Néerlandaise">Néerlandaise (Pays-Bas)</option>
                                                       <option value="Népalaise">Népalaise (Népal)</option>
                                                       <option value="Nicaraguayenne">Nicaraguayenne (Nicaragua)</option>
                                                       <option value="Nigérienne">Nigérienne (Niger)</option>
                                                       <option value="Nigériane">Nigériane (Nigéria)</option>
                                                       <option value="Nord-coréenne">Nord-coréenne (République de Corée)</option>
                                                       <option value="Norvégienne">Norvégienne (Norvège)</option>
                                                       <option value="Néo-Zélandaise">Néo-Zélandaise (Nouvelle-Zélande)</option>
                                                       <option value="Omanaise">Omanaise (Oman)</option>
                                                       <option value="Ougandaise">Ougandaise (Ouganda)</option>
                                                       <option value="Ouzbéke">Ouzbéke (Ouzbékistan)</option>
                                                       <option value="Pakistanaise">Pakistanaise (Pakistan)</option>
                                                       <option value="Palaosienne">Palaosienne (Palaos)</option>
                                                       <option value="Palestinienne">Palestinienne (Palestine)</option>
                                                       <option value="Panaméenne">Panaméenne (Panama)</option>
                                                       <option value="Papouane-Néo-Guinéenne">Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)</option>
                                                       <option value="Paraguayenne">Paraguayenne (Paraguay)</option>
                                                       <option value="Péruvienne">Péruvienne (Pérou)</option>
                                                       <option value="Philippine">Philippine (Philippines)</option>
                                                       <option value="Polonaise">Polonaise (Pologne)</option>
                                                       <option value="Portugaise">Portugaise (Portugal)</option>
                                                       <option value="Qatarienne">Qatarienne (Qatar)</option>
                                                       <option value="Roumaine">Roumaine (Roumanie)</option>
                                                       <option value="Russe">Russe (Fédération de Russie)</option>
                                                       <option value="Rwandaise">Rwandaise (Rwanda)</option>
                                                       <option value="Saint-Lucienne">Saint-Lucienne (Sainte-Lucie)</option>
                                                       <option value="Saint-Marinaise">Saint-Marinaise (Saint-Marin)</option>
                                                       <option value="Saint-Vincentaise et Grenadine">Saint-Vincentaise et Grenadine (Saint-Vincent-et-les Grenadines)</option>
                                                       <option value="Salomonaise">Salomonaise (Îles Salomon)</option>
                                                       <option value="Salvadorienne">Salvadorienne (El Salvador)</option>
                                                       <option value="Samoane">Samoane (Samoa)</option>
                                                       <option value="Santoméenne">Santoméenne (Sao Tomé-et-Principe)</option>
                                                       <option value="Saoudienne">Saoudienne (Arabie saoudite)</option>
                                                       <option value="Sénégalaise">Sénégalaise (Sénégal)</option>
                                                       <option value="Serbe">Serbe (Serbie)</option>
                                                       <option value="Seychelloise">Seychelloise (Seychelles)</option>
                                                       <option value="Sierra-Léonaise">Sierra-Léonaise (Sierra Leone)</option>
                                                       <option value="Singapourienne">Singapourienne (Singapour)</option>
                                                       <option value="Slovaque">Slovaque (Slovaquie)</option>
                                                       <option value="Slovène">Slovène (Slovénie)</option>
                                                       <option value="Somalienne">Somalienne (Somalie)</option>
                                                       <option value="Soudanaise">Soudanaise (Soudan)</option>
                                                       <option value="Sri-Lankaise">Sri-Lankaise (Sri Lanka)</option>
                                                       <option value="Sud-Africaine">Sud-Africaine (Afrique du Sud)</option>
                                                       <option value="Sud-Coréenne">Sud-Coréenne (République Populaire Démocratique de Corée)</option>
                                                       <option value="Sud-Soudanaise">Sud-Soudanaise (Soudan du Sud)</option>
                                                       <option value="Suédoise">Suédoise (Suède)</option>
                                                       <option value="Suisse">Suisse (Suisse)</option>
                                                       <option value="Surinamaise">Surinamaise (Suriname)</option>
                                                       <option value="Swazie">Swazie (Swaziland)</option>
                                                       <option value="Syrienne">Syrienne (République Arabe Syriene)</option>
                                                       <option value="Tadjike">Tadjike (Tadjikistan)</option>
                                                       <option value="Tchadienne">Tchadienne (Tchad)</option>
                                                       <option value="Tchèque">Tchèque (République Tchèque)</option>
                                                       <option value="Thaïlandaise">Thaïlandaise (Thaïlande)</option>
                                                       <option value="Timoraise">Timoraise (Timor-Leste)</option>
                                                       <option value="Togolaise">Togolaise (Togo)</option>
                                                       <option value="Tonguienne">Tonguienne (Tonga)</option>
                                                       <option value="Trinidadienne">Trinidadienne (Trinité-et-Tobago)</option>
                                                       <option value="Tunisienne">Tunisienne (Tunisie)</option>
                                                       <option value="Turkmène">Turkmène (Turkménistan)</option>
                                                       <option value="Turque">Turque (Turquie)</option>
                                                       <option value="Tuvaluane">Tuvaluane (Tuvalu)</option>
                                                       <option value="Ukrainienne">Ukrainienne (Ukraine)</option>
                                                       <option value="Uruguayenne">Uruguayenne (Uruguay)</option>
                                                       <option value="Vanuatuane">Vanuatuane (Vanuatu)</option>
                                                       <option value="Vénézuélienne">Vénézuélienne (Venezuela)</option>
                                                       <option value="Vietnamienne">Vietnamienne (Viêt Nam)</option>
                                                       <option value="Yéménite">Yéménite (Yémen)</option>
                                                       <option value="Zambienne">Zambienne (Zambie)</option>
                                                       <option value="Zimbabwéenne">Zimbabwéenne (Zimbabwe)</option>
                                                    </select>
                                                    <span class="text-danger error-text nationalite_error"></span>
                                                </div>
                                                <!-- Langue de communication -->
                                                <div class="form-group">
                                                  <label>Langue de communication</label>
                                                  <select class="form-control" name="langue_com">
                                                        <option value="0" selected="true" disabled="true">selectionnez votre langue de communication</option>
                                                        <option value="Anglais">Anglais </option>
                                                        <option value="Mandarin">Mandarin </option>
                                                        <option value="Hindi">Hindi </option>
                                                        <option value="Espagnol">Espagnol </option>
                                                        <option value="Arabe">Arabe </option>
                                                        <option value="Bengali">Bengali </option>
                                                        <option value="Français">Français </option>
                                                        <option value="Russe">Russe </option>
                                                        <option value="Portugais">Portugais </option>
                                                        <option value="Panjabi">Panjabi </option>
                                                        <option value="Japonais">Japonais </option>
                                                        <option value="Haoussa">Haoussa </option>
                                                        <option value="Javanais">Javanais </option>
                                                        <option value="Télougou">Télougou </option>
                                                        <option value="Chinois wu">Chinois wu </option>

                                                        <option value="Malais">Malais </option>
                                                        <option value="Coréen">Coréen </option>
                                                        <option value="Allemand">Allemand </option>
                                                        <option value="Chinois cantonais">Chinois cantonais </option>
                                                        <option value="Marathi">Marathi </option>
                                                        <option value="Turc">Turc </option>
                                                        <option value="Vietnamien">Vietnamien </option>
                                                        <option value="Tamoul">Tamoul </option>
                                                        <option value="Hébreux">Hébreux </option>
                                                        <option value="Italien">Italien </option>
                                                        <option value="Persan">Persan </option>
                                                        <option value="Thaï">Thaï </option>
                                                     </select>
                                                       <span class="text-danger error-text langue_com_error"></span>
                                                  </div>
                                                </div>
                                                <!-- Inscription en tant que -->
                                                <div class="form-group">
                                                    <label>Inscription en tant que</label>
                                                    <div class="radio">
                                                        <label><input type="radio" name="inscription_tant_que" value="Intervenant" checked> Intervenant</label>
                                                        <label style="margin-left:10px;"><input type="radio" name="inscription_tant_que" value="Participant"> Participant</label>
                                                    </div>
                                                </div>
                                            </div>
                                      <button type="button" class="btn btn-primary" id="nextButton">Suivant</button>
                                  </div>

                                  <!-- Section 2: Lieux Touristiques -->
                                  <div class="form-section " id="section-2" style="display:none;">
                                    <!-- Conference Block -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="conferences">Conférences</label>
                                                <select name="conferences[]" class="form-control select2" id="conferences" multiple>
                                                    <option value="0" disabled="true">Sélectionnez des conférences...</option>
                                                    @foreach ($conferences as $conference)
                                                        <option value="{{ $conference->id }}">{{ $conference->theme }}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Voulez-vous visiter un lieu touristique lors de votre séjour ?</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="visit_tourist_site" value="oui" onclick="showTouristSection()"> Oui
                                                    </label>
                                                    <label style="margin:10px">
                                                        <input type="radio" name="visit_tourist_site" value="non" onclick="hideTouristSection()" checked> Non
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="touristSection" style="display:none;">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Sélectionnez les lieux touristiques que vous souhaitez visiter :</label>
                                                            <select class="form-control select2" id="tourist_site" name="lieux_touristiques[]" multiple onchange="showSelectedSites()">
                                                                    <option value="0" disabled="true">Sélectionnez le(s) lieu(x) touristique(s)...</option>
                                                                    <option value="Visite du Parc National du Banco" data-img="{{asset('images/Tourisme/Banco.jpg')}}" data-name="Visite du Parc National du Banco" data-desc="Situé en plein cœur d’Abidjan, le Parc National du Banco est une forêt luxuriante urbaine. Le visiteur aura droit à une visite guidée de l’écomusée, du centre piscicole, de l’Arboretum et du Centre de formation des agents forestiers. Activités de loisirs : VTT, randonnée pédestre." data-price="TARIF : 20 000 Fcfa / personne">Visite du Parc National du Banco</option>
                                                                    <option value="Balade Lagunaire" data-img="{{asset('images/Tourisme/lagunaire.jpg')}}" data-name="Balade Lagunaire" data-desc="ABIDJAN est une ville de la Côte d’Ivoire, au bord de la lagune Ébrié. Elle appartient au District Autonome d’Abidjan, capitale économique de la Côte d’Ivoire. Le visiteur aura droit à une balade lagunaire avec vue sur le Plateau, Treichville, Cocody, le port, le village des pêcheurs et le cimetière des bateaux." data-price="TARIF : 80 000 Fcfa / personne">Balade Lagunaire</option>
                                                                    <option value="Grand-Bassam" data-img="{{asset('images/Tourisme/Bassam.jpg')}}" data-name="Grand-Bassam" data-desc="Découverte des vestiges de l’ancienne capitale de la Côte d’Ivoire dans le Quartier France, déclarée Patrimoine Mondial de l’UNESCO en juin 2012. Les visiteurs découvriront le musée du costume, l’histoire de Bassam, une visite aux artisans d’art de Bassam, un déjeuner dans un hôtel-restaurant en bordure de mer et enfin la détente sur la plage pour clôturer la visite." data-price="TARIF : 40.000 Fcfa / personne">Grand-Bassam</option>
                                                                    <option value="Yamoussoukro" data-img="{{asset('images/Tourisme/yamoussoukro.jpg')}}" data-name="Yamoussoukro" data-desc="Yamoussoukro, capitale de la Côte d’Ivoire et territoire du groupe baoulé dénommé les « Akouê », située dans le centre du pays. La visite inclut la découverte de la Fondation Félix Houphouët Boigny, du lac aux crocodiles, des grandes écoles et une visite guidée de la Basilique Notre Dame de la Paix." data-price="TARIF : 70.000F /  personne">Yamoussoukro</option>
                                                                    <option value="Domaine BINI Forêt" data-img="{{asset('images/Tourisme/BINI.png')}}" data-name="Domaine BINI Forêt" data-desc="Domaine Bini, site pittoresque parsemé de verdure et de merveilles à découvrir. L’arrivée se fait au son du tam-tam traditionnel, suivi d’une randonnée pédestre et d’un bain d’argile." data-price="TARIF : 40.000 Fcfa / personne">Domaine BINI Forêt</option>
                                                                    <option value="Long Séjour - Bouaké" data-img="{{asset('images/Tourisme/bouake.jpg')}}" data-name="Long Séjour - Bouaké" data-desc="Visite de Nzi River Lodge, un parc à but animal et végétal localisé au centre de la Côte d’Ivoire. Découverte des potières de Tanoa Sakassou regroupées en GVC et prestation de la danse Goly de Bandèkouassikro." data-price="NB : Le tarif sera défini par l’agence de voyage pour le participant">Long Séjour - Bouaké</option>
                                                                    <option value="Long Séjour - Korhogo" data-img="{{asset('images/Tourisme/KOROGHO.jpg')}}" data-name="Long Séjour - Korhogo" data-desc="Les tisserands et la prestation de la danse boloye de Waraniéné, les peintres sur toile de Fakaha, l’un des lieux d’inspiration du célèbre artiste Picasso. Visite du rocher sacré Chienlô, lieu de formulation et de réalisation de vœux." data-price="NB : Le tarif sera défini par l’agence de voyage pour le participant">Long Séjour - Korhogo</option>
                                                                    <option value="Long Séjour - Man" data-img="{{asset('images/Tourisme/MAN.jpg')}}" data-name="Long Séjour - Man" data-desc="Visite des chutes d’eau ou cascades naturelles de Man, lieu de divertissement pour les touristes épris de la nature et de ses merveilles.Les singes sacrés de Gbeupleu, interdits à la consommation et faisant l’objet d’une célébration culturelle pour les villageois dudit village.La danse Tématé de Dompleu, une danse de réjouissance pratiquée lors de la culture de riz." data-price="NB : Le tarif sera défini par l’agence de voyage pour le participant">Long Séjour - Man</option>
                                                            </select>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                                <div id="siteDetails" style="display:none;">
                                                    <div id="selectedSites"></div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      <input type="hidden" name="selected_sites_data" id="selected_sites_data">
                                      <button type="button" class="btn btn-secondary" id="prevButton">Précédent</button>
                                      <button type="submit" class="btn btn-success" id="submitButton1">INSCRIRE</button>
                                  </div>
                              </form>
                            </div>
                    	 </div>
        	          </div>
                 </div>
               </div>
             </div>
           </div><!-- .entry-content -->
        </article> <!-- #post-## -->
       </div> <!-- .posts-content -->
		 </div> <!-- .col-## -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</div> <!-- .content-wrapper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function(){
    $('.select2').select2()
})
//$('#touristSection').select2()

function showTouristSection() {
    document.getElementById('touristSection').style.display = 'block';
}

function hideTouristSection() {
    document.getElementById('touristSection').style.display = 'none';
    document.getElementById('siteDetails').style.display = 'none';
    document.getElementById('selectedSites').innerHTML = ''; // Clear selected sites
}

function showSelectedSites() {
    const selectElement = document.getElementById('tourist_site');
    const selectedSitesContainer = document.getElementById('selectedSites');
    selectedSitesContainer.innerHTML = ''; // Clear previous selections

    for (let option of selectElement.selectedOptions) {
        const siteName = option.text;
        const siteDescription = option.getAttribute('data-desc');
        const sitePrice = option.getAttribute('data-price');
        const siteImageSrc = option.getAttribute('data-img'); // Get image source

        const siteDetailsHtml = `
        <div class="site-detail-container">
            <div class="site-details">
                <strong>${siteName}</strong><br>
                <p>${siteDescription}</p>
                <p class="site-price">${sitePrice}</p>
            </div>
            <div class="site-image-container">
                <img src="${siteImageSrc}" alt="Image du site" class="site-image">
            </div>
        </div>
        <hr noshade>
        `;

        selectedSitesContainer.innerHTML += siteDetailsHtml;
    }

    document.getElementById('siteDetails').style.display = selectElement.selectedOptions.length > 0 ? 'block' : 'none';
}

document.getElementById('nextButton').addEventListener('click', function() {
    document.getElementById('section-1').style.display = 'none';
    document.getElementById('section-2').style.display = 'block';

    // Met à jour la barre de progression
    document.getElementById('progress-1').classList.remove('active');
    document.getElementById('progress-2').classList.add('active');
});

document.getElementById('prevButton').addEventListener('click', function() {
    document.getElementById('section-2').style.display = 'none';
    document.getElementById('section-1').style.display = 'block';

    // Met à jour la barre de progression
    document.getElementById('progress-2').classList.remove('active');
    document.getElementById('progress-1').classList.add('active');
});

document.getElementById('submitButton1').addEventListener('click', function(event) {
    const selectElement = document.getElementById('tourist_site');
    let selectedSitesData = [];

    for (let option of selectElement.selectedOptions) {
        if (option.value !== '0') {
            const imgURL = option.getAttribute('data-img');
            const imgName = imgURL.substring(imgURL.lastIndexOf('/') + 1);

            selectedSitesData.push({
                name: option.getAttribute('data-name'),
                img: imgName, // Use the extracted filename
                desc: option.getAttribute('data-desc'),
                price: option.getAttribute('data-price')
            });
        }
    }

    document.getElementById('selected_sites_data').value = JSON.stringify(selectedSitesData);
});

</script>
