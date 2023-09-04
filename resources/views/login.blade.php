<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    
<!-- <div class="container mt-2" style="background-color:#D2D7DB">
    <h1 class="text-center h1 font-weight-bold">Sistema C&#225;lculo Horas Extras</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="assets/img/latinMobile.png" alt="logo">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('ingresar') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('Usuario') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">{{ __('Recordarme') }}</label>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Iniciar Sesión') }}
                            </button>

                            <div class="text-center mt-3">
                                ¿Aún no tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
    <div id="app">
        <login-component></login-component>
    </div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>