@extends('layouts.auth')

@section('title')
OIDE-IOED | Connexion
@endsection

@section('content')

<div class="login-box-body">
  <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>

  <form action="{{ route('login') }}" method="post">
    @csrf
    <div class="form-group has-feedback">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Votre Adresse Email">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

      @error('email')
          <span class="text-danger" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" style="float : right">
            Mot de passe oublié ?
        </a><br>
    @endif

      <div class="form-group has-feedback">
      <span>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Votre Mot de passe">
        <div class="password-icon">
          <i data-feather="eye"></i>
          <i data-feather="eye-off"></i>
       </div>
        @error('password')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </span>
      </div>


    <div class="row">
      <div class="col-xs-8">
        <div class="checkbox icheck">
          <label>
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir
          </label>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Connexion</button>
      </div>
      <!-- /.col -->
    </div>
  </form>
  <!-- /.social-auth-links -->
  <div class="social-auth-links text-center">
      <p>-------</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"></a>
    </div>


</div>

@endsection
