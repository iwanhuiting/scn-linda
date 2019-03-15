
@extends('layouts.app')

@section('main')

	<div class="uk-inline-clip" style="width: 100%; height: 300px; background-color: white;">
    	<div class="uk-text-center uk-position-center">
    		<h2 class="uk-margin-remove-bottom">Welcome to <span class="uk-text-bold" style="color: #666;">IT</span><span style="color: #666;">ogether</span></h2>
    		<h3 class="uk-margin-remove-top" style="text-align: center;">This is a space for students and tutors to exchange information and intelligence on one simple platform.<br> Log-in below to acces all the videos and files, don't have an account yet? <a href="signup">Sign up</a></h3>
    	</div>
    </div>

    <div class="uk-container">


		<div class="uk-grid-match uk-grid-small" uk-grid >
		    <div class="uk-width-1-3 uk-margin-medium-top uk-text-center">
		        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
		            <img src="images/Teacher.jpg" alt="">
		            <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
		                <p class="uk-h4 uk-margin-remove">Log-in as a tutor</p>
		            </div>
		        </div>
		    </div>

		    <div class="uk-width-1-3 uk-margin-medium-top" class="uk-text-center">
		        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
		            <img src="images/Student.jpg" alt="">
		            <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
		                <p class="uk-h4 uk-margin-remove">Log-in as a student</p>
		            </div>
		        </div>
		    </div>

		    <div class="uk-width-1-3 uk-margin-medium-top" class="uk-text-center">
		        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
		            <img src="images/Guest.jpg" alt="">
		            <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
		                <p class="uk-h4 uk-margin-remove">Log-in as a guest</p>
		            </div>
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