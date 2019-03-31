@extends('layouts.login')

@section('main')

	<form id="video-form"
		  class="uk-form-stacked"
		  action="#"
		  method="post"
		  enctype="multipart/form-data">
		  @csrf

	    <fieldset class="uk-fieldset uk-width-1-5 uk-position-center">

	        <legend class="uk-legend uk-text-center">Video toevoegen</legend>

	        <div class="uk-margin">
	            <input class="uk-input uk-text-center" type="text" name="title" placeholder="Titel van de video">
	        </div>

	        <div class="uk-margin">
	        	<textarea id="tinymce" name="description" placeholder="Hello World!"></textarea>
	        </div>

	        <div class="uk-margin">
		        <div class="js-upload uk-width-1-1" uk-form-custom>
				    <input type="file" name="thumbnail" id="file">
				    <button class="uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">Selecteer de thumbnail</button>
				</div>
			</div>

			<div class="uk-margin">
		        <div class="js-upload uk-width-1-1" uk-form-custom>
				    <input type="file" name="video" id="file">
				    <button class="uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">Selecteer de video</button>
				</div>
			</div>

	        <button type="submit" form="video-form" class="uk-button uk-button-primary uk-width-1-1">Toevoegen</button>

	    </fieldset>

	</form>

@endsection