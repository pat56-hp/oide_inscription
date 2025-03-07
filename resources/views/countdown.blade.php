@extends('layouts.baseCountdown')
@section('content')

  <div id="wrapper">
        <img id="logo" src="{{asset('countdown/logo-oide.png')}}" alt="Logo de l'organisation">
        <a href="{{ route('inscription') }}"><button id="registerButton" >INSCRIVEZ-VOUS !</button></a>
      <div id="title">La Pré-Conférence commence dans <img id="gif" src="{{asset('countdown/load-32_256.gif')}}" alt=""> </div>
      <div id="minuteur">
        <div class="box">
          <div id="j"></div>
          <div class="unite">Jours</div>
        </div>
        <div class="box">
          <div id="h"></div>
          <div class="unite">Heures</div>
        </div>
        <div class="box">
          <div id="m"></div>
          <div class="unite">Minutes</div>
        </div>
        <div class="box">
          <div id="s"></div>
          <div class="unite">Secondes</div>
        </div>
      </div>
      <div class="sponsors">
      <h2>Nos Partenaires</h2>
      <div class="carousel-container">
          <div class="carousel-track">
              <div class="carousel-item">
                  <img src="{{asset('images/logos/ONU.png')}}" alt="Sponsor 1">
                  <p>ONU</p>
              </div>
              <div class="carousel-item">
                  <img src="{{asset('images/logos/BBA.png')}}" alt="Sponsor 2">
                  <p>BBA</p>
              </div>
              <div class="carousel-item">
                  <img src="{{asset('images/logos/AOS.png')}}" alt="Sponsor 3">
                  <p>AOS</p>
              </div>
              <div class="carousel-item">
                  <img src="{{asset('images/logos/MVPTB.png')}}" alt="Sponsor 4">
                  <p>MVPTB</p>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
