@extends('layouts.login')

@section('main')

	<form id="register-form"
		  class="uk-form-stacked"
		  action="#"
		  method="post">
		  @csrf

	    <fieldset class="uk-fieldset uk-width-1-6 uk-position-center">

	        <legend class="uk-legend uk-width-2-3 uk-text-center">Registreren</legend>

	        <div class="uk-margin">
	            <input class="uk-input uk-width-2-5 uk-text-center" type="text" name="first_name" placeholder="Voornaam">

	            <input class="uk-input uk-width-1-6 uk-text-center" type="text" name="middle_name" placeholder="t.v">

	            <input class="uk-input uk-width-2-5 uk-text-center" type="text" name="last_name" placeholder="Achternaam">
	        </div>

			<div>
				<input  class="uk-input ukwidth-4-5 uk-text-center" type="text" name="username" placeholder="Leerlingnummer ">
			</div>	        	

	        <div class="uk-margin">
	            <input class="uk-input uk-text-center" type="email" name="email" placeholder="E-mail">
	        </div>

	        <div class="uk-margin">
	            <input class="uk-input uk-text-center" type="password" name="password" placeholder="Wachtwoord">
	        </div>

	       	<div class="uk-margin">
	            <input class="uk-input uk-text-center" type="password" name="secure_password" placeholder="Wachtwoord herhalen">
	        </div>

	        <button type="submit" form="register-form" class="uk-button uk-button-primary uk-width-1-1">Registreer</button>

	    </fieldset>

	</form>

@endsection