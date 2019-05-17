<!DOCTYPE html>
<html class="uk-height-viewport">

    @include('shared.head')

    <body id="app" class="">

        <header uk-sticky>
            @include('shared.navbar')

            @hasSection('toolbar')
                <div class="tm-toolbar">
                    <div class="uk-container">
                        @yield('toolbar')
                    </div>
                </div>
            @endif
        </header>

        @hasSection('header')
            <section class="tm-header">
                @yield('header')
            </section>
        @endif

        <main>

            @yield('main')
            
        </main>

        @hasSection('modals')
            @yield('modals')
        @endif

        @hasSection('scripts.footer')
            @yield('scripts.footer')
        @endif

    </body>
</html>