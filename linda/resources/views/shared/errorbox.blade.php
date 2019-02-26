@if (count($errors) > 0)

<div class="tm-panel">  
	<h3><i uk-icon="icon: warning" class="uk-text-danger"></i> {{ ucfirst($subject) }} niet opgeslagen</h3>

	<p class="uk-text-bold">Er zijn fouten opgetreden tijdens het opslaan van de {{ $subject }}.</p>
	<p>Controleer de onderstaande fouten en probeer het opnieuw:</p>

	<ul class="uk-list uk-text-danger">
		@foreach ($errors->all() as $error)
		<li class="uk-margin-small-bottom">{{ $error }}</li>
		@endforeach
	</ul>
</div>		

@endif