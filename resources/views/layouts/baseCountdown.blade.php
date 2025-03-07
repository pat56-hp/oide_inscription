<!DOCTYPE html>
<html lang="fr-FR" class="wf-roboto-n4-active wf-robotoslab-n1-active wf-robotoslab-n3-active wf-robotoslab-n4-active wf-active js csstransforms csstransforms3d csstransitions js_active  vc_desktop  vc_transform  vc_transform skrollr skrollr-desktop" style="height: auto;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="#">
    <link rel="pingback" href="#">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('images/logos/oide.png')}}" width="500px" type="image/x-icon">
    <title>Invitation - Pré-Conférence OIDE</title>
    <link rel="stylesheet" id="vc_tta_style-css" href="{{asset('countdown/style.css')}}" type="text/css" media="all">
    <style media="screen">
    /* Style pour le conteneur de traduction */
      #traduction_site_web {
          position: fixed;
          top: 50%;
          left: 0;
          transform: translateY(-50%);
          z-index: 1000;
          padding: 5px;
          border-radius: 3px;
          background-color: #fff;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          font-family: Arial, sans-serif;
          transition: box-shadow 0.3s ease;
          font-size: 12px;
          width: auto;
          text-align: center;
      }

      #traduction_site_web:hover #traduction_button {
          display: block;
      }

      #traduction_site_web:hover #dropdown_menu {
          display: block;
      }

      /* Style pour le bouton */
      #traduction_button {
          display: none;
          background-color: #007bff;
          color: white;
          border: none;
          padding: 5px 10px;
          cursor: pointer;
          border-radius: 3px;
          position: relative;
          font-size: 12px;
          transition: background-color 0.3s ease;
          display: flex;
          align-items: center;
          justify-content: center;
      }

      #dropdown_logo {
          margin-left: 5px;
          font-size: 10px;
      }

      #traduction_button:hover {
          background-color: #0056b3;
      }

      /* Style pour le menu déroulant */
      #dropdown_menu {
          display: none;
          position: absolute;
          top: 100%;
          left: 0;
          background-color: #fff;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          border-radius: 3px;
          z-index: 1001;
          width: 150px;
          padding: 5px;
          margin-top: 5px;
      }

      /* Style pour les éléments du menu déroulant */
      .dropdown_item {
          padding: 5px;
          cursor: pointer;
          border-bottom: 1px solid #f1f1f1;
          font-size: 12px;
      }

      .dropdown_item:last-child {
          border-bottom: none;
      }

      .dropdown_item:hover {
          background-color: #f1f1f1;
      }

      /* Masquer le logo Google et le texte "Fourni par Google" */
      .goog-logo-link,
      .goog-te-gadget span {
          display: none !important;
      }

      /* Masquer les styles inline pour le gadget Google Translate */
      .goog-te-gadget {
          color: transparent !important;
      }

      .goog-te-gadget .goog-te-combo {
          color: #000 !important;
          padding: 5px;
          border: 1px solid #ccc;
          border-radius: 3px;
          width: 100%;
          box-sizing: border-box;
      }
    </style>
</head>

<body id="home" class="page-template page-template-page-templates page-template-template-vc page-template-page-templatestemplate-vc-php page page-id-2539 wp-embed-responsive translatepress-fr_FR header-transparent has-header-topbar fullwidth-layout wpb-js-composer js-comp-ver-5.5.5 vc_responsive elementor-default" data-spy="scroll" data-target=".navbar" data-offset="100">
    <div id="traduction_site_web">
        <button id="traduction_button">Traduire<span id="dropdown_logo">▼</span></button>
        <div id="dropdown_menu">
            <div id="google_translate_element"></div>
        </div>
    </div>
    @yield('content')
    <script src="{{asset('countdown/app.js')}}" defer="defer" type="text/javascript"></script>
    <!-- Script pour Google Translate -->
    <script>
        function matraduction() {
            new google.translate.TranslateElement({ pageLanguage: 'fr' }, 'google_translate_element');
        }
    </script>
    <!-- Charger le script Google Translate -->
    <script src="//translate.google.com/translate_a/element.js?cb=matraduction"></script>
    <script>
        document.getElementById('traduction_button').addEventListener('click', function() {
            var menu = document.getElementById('dropdown_menu');
            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'block';
            } else {
                menu.style.display = 'none';
            }
        });
    </script>
</body>

</html>
