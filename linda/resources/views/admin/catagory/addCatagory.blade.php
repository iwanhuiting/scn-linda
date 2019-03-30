@extends('layouts.login')

@section('main')

	<form id="catagory-form"
		  class="uk-form-stacked"
		  action="#"
		  method="post"
		  enctype="multipart/form-data">
		  @csrf

	    <fieldset class="uk-fieldset uk-width-1-5 uk-position-center">

	        <legend class="uk-legend uk-text-center">Catagorie toevoegen</legend>

	        <div class="uk-margin">
	            <input class="uk-input uk-text-center" type="text" name="title" placeholder="Titel van de catagorie">
	        </div>

	        <div class="uk-margin">
		        <div class="js-upload uk-width-1-1" uk-form-custom>
				    <input type="file" name="file" id="file">
				    <button class="uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">Selecteer een foto</button>
				</div>
			</div>

	        <button type="submit" form="catagory-form" class="uk-button uk-button-primary uk-width-1-1">Toevoegen</button>

	    </fieldset>

	</form>

@endsection