@extends('layouts.login')

@section('main')

	<form id="catagory-form"
		  class="uk-form-stacked"
		  action="#"
		  method="post">
		  @csrf

	    <fieldset class="uk-fieldset uk-width-1-6 uk-position-center">

	        <legend class="uk-legend uk-width-2-3 uk-text-center">Catagorie toevoegen</legend>

	        <div class="uk-margin">
	            <input class="uk-input uk-text-center" type="text" name="email" placeholder="E-mail">
	        </div>

	        <div class="uk-margin">
	            <input class="uk-input uk-text-center" type="text" name="password" placeholder="Wachtwoord">
	        </div>

	       	<div class="uk-margin">
	            <input class="uk-input uk-text-center" type="password" name="secure_password" placeholder="Wachtwoord herhalen">
	        </div>

	        <button type="submit" form="register-form" class="uk-button uk-button-primary uk-width-1-1">Registreer</button>

	    </fieldset>

	</form>

@endsection