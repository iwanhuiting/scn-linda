@extends('layouts.app')

@section('main')

    <div class="uk-inline-clip" style="width: 100%; height: 300px; background-color: white;">
         <div class="uk-text-center uk-position-center">
              <h2 class="uk-margin-remove-bottom">Welkom bij de catagorie <span style="color: #1e87f0;">{{ $catagory->title }}</span>
              </h2>

              <h3 class="uk-margin-remove-top" style="text-align: center;">Hieronder zie je alle video's die onder deze catagorie vallen.</h3>

         </div>
    </div>

    <div class="uk-width-1" style="background-color: #f8fafc; z-index: -1;">
        <div class="uk-container" >
            <div class="uk-inline-clip" style="width: 100%;">
                <div class="uk-grid-match uk-grid-small" uk-grid>

                    @foreach($videos as $video)

                        <div class="uk-width-1-3 uk-margin-medium-top uk-text-center">
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="images/{{ $video->thumbnail }}" style="height: 220px; width:390px;" alt="">
                                <a href="{{ route('video', ['id' => $video->id]) }}">
                                    <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                    <p class="uk-h4 uk-margin-remove">{{ $video->title }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>

@endsection