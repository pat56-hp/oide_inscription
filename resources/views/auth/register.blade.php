@extends('layouts.auth')

@section('title')
OIDE-IOED | Connexion
@endsection

@section('content')

<div class="register-box-body">
  <p class="login-box-msg">Enregistrement d'un nouvel Admin</p>

  <form action="{{route('register')}}" method="post">
    @csrf

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
      @endif
      @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            {{ $message }}
        </div>
      @endif
    <div class="form-group has-feedback">
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Pseudo">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>

      @error('name')
          <span class="text-danger" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="form-group has-feedback">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Adresse Email">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

      @error('email')
          <span class="text-danger" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="form-group has-feedback">
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de passe">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      @error('password')
          <span class="text-danger" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="form-group has-feedback">
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer Mot de passe">
      <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
    </div>

    <div class="row">
      <div class="col-xs-8">
        <div class="checkbox icheck">
          <label>
            <input type="checkbox"> Je suis d'accord avec les <a href="#">Termes et Conditions</a>
          </label>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Inscrire</button>
      </div>
      <!-- /.col -->
    </div>
  </form>

  <div class="social-auth-links text-center">
    <p>----</p>
    <a href="#" class="btn btn-block btn-social btn-google btn-flat"></a>
  </div>

  <a href="{{route('login')}}" class="text-center">Déjà un compte</a>
</div>

@endsection
