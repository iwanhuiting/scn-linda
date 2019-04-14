@extends('layouts.login')

@section('main')

	<form id="playlist-form"
		  class="uk-form-stacked"
		  action="#"
		  method="post"
		  enctype="multipart/form-data">
		  @csrf

	    <fieldset class="uk-fieldset uk-width-1-5 uk-position-center">

	        <legend class="uk-legend uk-text-center">Afspellijst aanmaken</legend>

	        <div class="uk-margin">
	            <input class="uk-input uk-text-center" type="text" name="title" placeholder="Titel van de afspellijst">
	        </div>

	        <div class="uk-margin">
	        	<textarea id="tinymce"></textarea>
	        </div>

	        <button type="submit" form="video-form" class="uk-button uk-button-primary uk-width-1-1">Toevoegen</button>

	    </fieldset>

	</form>

@endsection