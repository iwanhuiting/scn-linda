<div class="tm-navbar" uk-sticky style="background: linear-gradient(to left, #28a5f5, #1e87f0);">

    <div class="uk-width-1-1@m uk-visible@m">

        <nav class="uk-navbar uk-height-1-1" uk-navbar>

            <a class="uk-navbar-item uk-logo uk-margin-small-left" style="color: white;" href="/">
                <span class="uk-text-bold">IT</span>ogether
            </a>

            @if(isset($currentuser->first_name))
            <span class="uk-navbar-right">
                <button class="uk-button uk-button-default" style="height: 100%; color: white; border: none;" type="button">@if($currentuser->first_name) {{ $currentuser->first_name }} @endif</button>
                <div uk-dropdown>
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-active">Algemene opties</li>
                        <li><a href="{{ route('logout') }}">Log-uit</a></li>
                        @if($currentuser->admin == 1)
                            <li class="uk-active">Admin paneel</li>
                            <li><a href="{{ route('userpanel') }} ">Gebruikers overzicht</a></li>
                        @endif
                    </ul>
                </div>
            </span>
            @endif

        </nav>

    </div>

</div>
<hr class="uk-margin-remove">