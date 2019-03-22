@extends('layouts.login')

@section('main')

<form id="login-form"
          class="uk-form-stacked"
          action="#"
          method="post">
          @csrf

    <fieldset class="uk-fieldset uk-width-2-6 uk-inline uk-position-center">

        <legend class="uk-legend uk-text-center">Inloggen</legend>

        <div class="uk-margin">
            <input class="uk-input" type="email" placeholder="E-mail">
        </div>  
        
        <div class="uk-margin">
            <input class="uk-input" type="password" placeholder="Password">
        </div>  

        <button class="uk-button uk-button-primary uk-width-1">login</button>

    </fieldset>
</form>


@endsection