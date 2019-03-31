@extends('layouts.app')

@section('main')

    <div class="uk-inline-clip" style="width: 100%; height: 300px; background-color: white;">
         <div class="uk-text-center uk-position-center">
              <h2 class="uk-margin-remove-bottom">Welkom bij
                   <span style="color: #666;"><b>IT</b>ogether</span>
                    
              </h2>
              <h3 class="uk-margin-remove-top" style="text-align: center;">Dit is een plek waar leraren en leerlingen samen handige informatie kunnen delen.<br> Hieronder zie je de video catagorieën bekijken.</h3>
         </div>
    </div>

    <div class="uk-width-1" style="background-color: #f8fafc; z-index: -1;">
        <div class="uk-container" >
            <h2 class="uk-text-center uk-margin-remove-bottom uk-margin-medium-top">Video Catagorieën</h3>
            <div class="uk-inline-clip" style="width: 100%;">
                <div class="uk-grid-match uk-grid-small" uk-grid>

                    @foreach($catagories as $catagorie)
                    
                        <div class="uk-width-1-3 uk-margin-medium-top uk-text-center">
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="images/{{ $catagorie->image }}" style="height: 220px; width:390px;" alt="">
                                <a href="{{ route('single.catagory', ['id' => $catagorie->id]) }}">
                                    <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                    <p class="uk-h4 uk-margin-remove">{{ $catagorie->title }}</p>
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