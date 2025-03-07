<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitation à la Pré-Conférence OIDE</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .details li img {
          height: auto;
          margin-right: 10px;
      }

        .details li p strong {
            font-size: 18px; /* Augmenter la taille du nom du site touristique */
            color: #1e73be; /* Couleur du nom */
        }
        .container {
            max-width: 2480px;
            max-height: 3508px;
            margin: 10px auto;
            background-color: #ffffff;
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
        .details li img {
            max-width: 100px;
            height: auto;
            margin-right: 10px;
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
          width: 100%;
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
              width: 100%;
              background-color: #1e73be;
              color: #fff;
              text-align: center;
              padding: 15px;
              font-size: 14px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <img src="{{ $logo }}" alt="Logo OIDE">
    </div>
    <div class="content">
      <h2 style="font-style:italic; color:#000000; margin-top:5px">
          LISTE DES LIEUX TOURISTIQUES CHOISIS PAR</h2>
      <h2><span style="color:#337ab7">@if($civilite == "MONSIEUR")
            M. {{ $nom }} {{ $prenoms }}
          @elseif($civilite == "MADAME")
            Mme {{ $nom }} {{ $prenoms }}
          @else
            Mlle {{ $nom }} {{ $prenoms }}
          @endif</span></h2>

        <div class="details">
            <ul>
              @foreach($selectedSites as $site)
                <li>
                    <p><strong style="font-size: 18px; color: #1e73be;">{{ $site->name }}</strong></p>
                    <img src="{{ public_path('images/Tourisme/' . $site->image) }}" alt="{{ $site->name }}">
                    <p>{{ $site->description }}</p>
                    <p><strong>{{ $site->price }}</strong></p>
                </li>
              @endforeach
            </ul>
        </div>
    </div>
    <div class="footer">
        <p>OIDE | © 2024 Tous droits réservés.</p>
    </div>
</div>

</body>
</html>
