@extends('layouts.login')

@section('main')

	<div class="uk-margin-medium-top">

		<div class="uk-container uk-container-large">

			<div class="uk-grid">

				<div class="uk-width-3-5">
					<video controls uk-video style="width: 100%;">
					    <source src="{{asset('videos/' . $video['0']->video )}}" type="video/mp4">
					</video>

					<div class="uk-text-medium" style="font-size: 20px; margin-top: 25px;">
						<div class="uk-grid">

							<div class="uk-width-3-5">
								{{ $video['0']->title }} <br>
								<span style="color: #666;"> {{ $video['0']->views }} weergaven </span>
							</div>

							<div class="uk-width-2-5">
								<a href="{{ route('channel.page' , ['id' => $videocreator['0']->id]) }}" class="uk-link-text">
									{{ $videocreator['0']->first_name }} {{ $videocreator['0']->middle_name }} {{ $videocreator['0']->last_name }}
								</a>
							</div>

						</div>

							<hr>
							
						{!! $video['0']->description !!}

					</div>

				</div>

				<div class="uk-width-2-5">

					<h3 class="uk-text-center">Video's van dezelfde catagorie</h3>
				         
				    <div class="uk-grid">      

						@foreach($reccomendedvideos as $reccomendedvideo)

	                        <div class="uk-width-1-2 uk-text-center">
	                        	<div class="uk-margin">
		                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
		                            	<a href="{{ route('video', ['id' => $reccomendedvideo->id]) }}">
		                                	<img src="{{asset('images/' . $reccomendedvideo->thumbnail )}}" style="height: 150px; width:267px;" alt="">
		                                </a>
		                            </div>
		                            <hr class="uk-margin-small-left" style="width: 267px;">
		                        </div>
	                        </div>

	                        <div class="uk-text-left uk-width-1-2">
                            	{{ $reccomendedvideo->title }}<br>
                            	{{ $reccomendedvideo->views }} weergaven
                            </div>

	                    @endforeach

	                </div>    
						
				</div>

			</div>

		</div>

	</div>


@endsection