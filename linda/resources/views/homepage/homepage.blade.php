@extends('layouts.app')

@section('main')

<div class="uk-container uk-margin-medium-top uk-width-2-3	">

<!-- De slideshow -->
<div class="uk-position-relative uk-width-2-3 uk-visible-toggle uk-light uk-container" tabindex="-1" uk-slideshow="animation: pull">

    <ul class="uk-slideshow-items">
        <li>
            <img src="https://cdn0.froala.com/assets/editor/docs/server/meta-social/php-00441489844a0103eae71ba2fe15244c.png" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                <h3 class="uk-margin-remove">PHP</h3>
                <p class="uk-margin-remove">De backend van een website</p>
            </div>
        </li>
        <li>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1280px-Laravel.svg.png" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                <h3 class="uk-margin-remove">Laravel</h3>
                <p class="uk-margin-remove">PHP framwork wat de plus punten van meerdere frameworks combineert</p>
            </div>
        </li>
        <li>
            <img src="https://cdn.pixabay.com/photo/2015/04/23/17/41/javascript-736400_960_720.png" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom ">
                <h3 class="uk-margin-remove">JavaScript</h3>
                <p class="uk-margin-remove">Dit kan de frontend en de backend zijn</p>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>










</div>

@endsection