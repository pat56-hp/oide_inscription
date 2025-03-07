<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/logos/oide.png')}}" width="500px" type="image/x-icon">
    <title>Informations de l'inscrit</title>
    <link rel="stylesheet" href="{{asset('scan/style.css')}}">
    <!-- FontAwesome CDN for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="business-card">
        <div class="card-header">
            <img src="{{asset('images/logos/logo-oide1.png')}}" alt="Logo" class="logo">
        </div>
        <div class="card-body">
          @if($inscrit->civilite == "MONSIEUR")
            <h1 class="name">M./Mr {{ $inscrit->nom }} {{ $inscrit->prenoms }}</h1>
          @elseif($inscrit->civilite == "MADAME")
            <h1 class="name">Mme/Mrs {{ $inscrit->nom }} {{ $inscrit->prenoms }}</h1>
          @else
            <h1 class="name">Mlle/Ms {{ $inscrit->nom }} {{ $inscrit->prenoms }}</h1>
          @endif
            <p class="title">{{ $inscrit->inscription_tant_que }}</p>
            <div class="contact-info">
                <p><i class="fas fa-phone"></i> {{ $inscrit->numero_tel }}</p>
                <p><i class="fas fa-envelope"></i> {{ $inscrit->email }}</p>
            </div>
            <div class="">
              <img src="{{asset('images/valide.png')}}" style="max-width:150px"alt="">
            </div>
        </div>
        <div class="card-footer">
            <p style="color:White">OIDE | © 2024 Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
