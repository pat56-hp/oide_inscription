<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitation à la Pré-Conférence OIDE</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 2480px;
            max-height: 3508px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
        }
        .header {
            background-color: #f4f4f4;
            color: #1e73be;
            text-align: center;
            padding: 20px;
        }
        .header img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            text-align: center;
            padding: 20px;
        }
        .content p {
            margin: 10px 0;
            font-size: 16px;
            color: #333;
            line-height: 1.6;
        }
        .content .details {
            margin: 20px 0;
        }
        .details ul {
            list-style: none;
            padding: 0;
        }
        .details li {
            background: #e9f2fb;
            margin: 10px 0;
            padding: 10px;
            border-left: 5px solid #1e73be;
            border-radius: 5px;
        }
        .details li p {
            margin: 0;
            font-size: 14px;
        }
        .content a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #1e73be;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .content a:hover {
            background-color: #155a8a;
        }
        .footer {
            background-color: #1e73be;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #fff;
        }
        @media print {
            body {
                background-color: #ffffff;
            }
            .container {
                box-shadow: none;
                border: none;
            }
            .footer {
                background-color: #1e73be;
                color: #fff;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <img src="{{ $logo }}" alt="Logo OIDE">
        <h1>{{ $title }}</h1>
        <h2 style="font-style:italic; color:#000000; margin-top:5px"> IOED PRE-CONFERENCE INVITATION </h2>
    </div>
    <div class="content">

      @if($civilite == "MONSIEUR")
        <p>M. {{ $nom }} {{ $prenoms }},</p>
      @elseif($civilite == "MADAME")
        <p>Mme {{ $nom }} {{ $prenoms }},</p>
      @else
        <p>Mlle {{ $nom }} {{ $prenoms }},</p>
      @endif

        <p>Nous avons l’honneur de vous convier à la pré-conférence de l’OIDE qui sera prononcée par Son Excellence Monsieur Louis KOFFI Laouré, Président Exécutif Mondial, Chef de mission de l’OIDE le…………………à ………………heures à l’hôtel Sofitel Ivoire Abidjan Côte d’Ivoire sur le thème : Redémarrage de l’économie mondiale, un événement international dédié aux urgences constatées sur le développement durable, la mobilisation des capitaux et l’amélioration du cadre de vie des populations.</p>

        @if($civilite == "MONSIEUR")
          <p style="font-style:italic; color:#1e73be">Mr. {{ $nom }} {{ $prenoms }},</p>
        @elseif($civilite == "MADAME")
          <p style="font-style:italic; color:#1e73be">Mrs {{ $nom }} {{ $prenoms }},</p>
        @else
          <p style="font-style:italic; color:#1e73be">Ms {{ $nom }} {{ $prenoms }},</p>
        @endif
          <p style="font-style:italic; color:#1e73be">We have the honor to invite you to the IOED pre-conference which will be delivered by His Excellency Mr. Louis KOFFI Laoure, World Executive President, Head of Mission of IOED on…………………at …… …………hours at the Sofitel Ivoire Abidjan Côte d'Ivoire hotel on the topic: Restarting the global economy, an international event dedicated to the emergencies noted on sustainable development, capital mobilization and improvement of the framework of life of the populations.</p>

        <h2>{{ $inscrit_en_tant_que }}</h2>
        <div class="">
            <img src="data:image/png;base64, {{ $qrcode }}" alt="QR Code">
        </div>
    </div>
    <div class="footer">
        <p>OIDE | © 2024 Tous droits réservés.</p>
    </div>
</div>

</body>
</html>
