@extends('layouts.login')

@section('main')

<form>
    <fieldset class="uk-fieldset uk-width-1-6 uk-inline uk-position-center">

        <legend class="uk-legend">Legend</legend>

        <div class="uk-margin">
            <input class="uk-input" type="email" placeholder="Email">
        </div>  
        
        <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Password">
        </div>  

    </fieldset>
</form>


@endsection