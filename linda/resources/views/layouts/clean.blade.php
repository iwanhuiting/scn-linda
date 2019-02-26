<!DOCTYPE html>
<html class="uk-height-viewport">
    @include('shared.cleanhead')

    <body id="app" class="">

        <main class="uk-container uk-margin-medium-top">

            @if(hasMessage())
                {!! getMessage() !!}
            @endif

            @yield('main')
            
        </main>
        
    </body>
</html>
