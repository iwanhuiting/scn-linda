@extends('layouts.login')

@section('main')

    <form method="POST" action="{{ route('login') }}" class="uk-form-stacked"
>
        @csrf

        <fieldset class="uk-fieldset uk-width-1-2 uk-position-center">

            <legend class="uk-legend uk-text-center uk-width-medium">Inloggen</legend>

            <div class="uk-margin">
                <input id="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} uk-input uk-width-medium" name="username" value="{{ old('username') }}" required autofocus placeholder="Studenten nummer">

                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>

            <div class="uk-margin">

                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} uk-input uk-width-medium" name="password" placeholder="wachtwoord" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <button type="submit" class="uk-button uk-button-primary uk-width-1">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <div style="text-align: center;" class="uk-margin">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            @endif

        </fieldset>

    </form>
@endsection
