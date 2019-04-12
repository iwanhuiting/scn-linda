
@extends('layouts.app')

@section('main')

	<div class="uk-inline-clip" style="width: 100%; height: 300px; background-color: white;">
    	<div class="uk-text-center uk-position-center">
    		<h2 class="uk-margin-remove-bottom">Welcome to <span class="uk-text-bold" style="color: #666;">IT</span><span style="color: #666;">ogether</span></h2>
    		<h3 class="uk-margin-remove-top" style="text-align: center;">
    		Dit is een plek waar leerlingen en leraren informatie over bepaalde programmeervakken delen. hierbeneden kan je inloggen
    		</h3>
    	</div>
    </div>

    <div class="uk-container">

		    <div class="uk-width-1-2 uk-margin-medium-top" class="uk-text-center">
		        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
		        	<a href="{{ route('login') }}">
			            <img src="images/Student.jpg" alt="">
			            <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
			                <p class="uk-h4 uk-margin-remove">Log-in</p>
			            </div>
		        	</a>
		        </div>
		    </div>
		</div>


		<div class="uk-width-1-3">
			
		</div>

		<div class="uk-width-1-3">
			
		</div>

		<div class="uk-width-1-3">
			
		</div>


	</div>

@endsection