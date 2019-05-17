@extends('layouts.app')

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

						@if(isset($video['0']->description))

							<hr>
							
							<div> 

								{!! $video['0']->description !!}

							</div>

						@endif

						<hr>

						<form id="comment-form"
				          class="uk-form-stacked"
				          action="#"
				          method="post">
				          @csrf

						    <fieldset class="uk-fieldset uk-margin-medium-bottom">

						        <legend class="uk-legend uk-text-center">Vragen over de stof</legend>

						        <div class="uk-margin">
						            <textarea id="tinymce" class="uk-width-1" name="title" placeholder="Hello World!"></textarea>
						            <input type="hidden" name="response" value="0">
						            <input type="hidden" name="responseto" value="0">
						        </div>  

						        <button class="uk-button uk-button-primary uk-width-1">Plaatsen</button>

						    </fieldset>
						    
						</form>

						@if($comments)

							<div class="uk-margin-medium-bottom uk-text-small">

								@foreach($comments as $comment)

									<hr>

									<div class="uk-grid">

										<div style="width: 10%;">PF</div>

										<div style="width: 90%;">
											<a href="{{ route('channel.page' , ['id' => $comment->user_id]) }}" class="uk-link-text">
												{{ $comment->user->first_name }} {{ $comment->user->middle_name }} {{ $comment->user->last_name }} op {{ Carbon\Carbon::parse( $comment->created_at )->format('d/m/Y') }} 
											</a>
										</div>

										<div style="width: 10%;"></div>

										<div style="width: 90%;">{!! $comment->title !!}</div>

										<div style="width: 10%;"></div>

										<div style="width: 90%;">

											<button class="btn btn btn-primary" data-id="{{ $comment->id }}" onclick="showHide('replycomment-{{ $comment->id }}');">
											    <span> Beantwoorden </span>
											</button>

											<div id="replycomment-{{ $comment->id }}" style="display: none; margin-top: 20px;"> 
												<script>
													var tiny = <?php echo(json_encode($comment->id)); ?>;
													tinymce.init({ selector: `#tinymce-${tiny}`});
												</script>
												<textarea id="tinymce-{{ $comment->id }}" class="uk-width-1" name="title" placeholder="Hello World!"></textarea>
											</div>

											<script>

											    function showHide(id){
											        $("#"+id).toggle();
											    }

											</script>

										</div>

									</div>

								@endforeach

						    </div>
						    	
						@endif

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

	                        <div class="uk-text-left uk-width-1-2 ">
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