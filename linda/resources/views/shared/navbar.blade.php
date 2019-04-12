<div class="tm-navbar" uk-sticky style="background: linear-gradient(to left, #28a5f5, #1e87f0);">

    <div class="uk-width-1-1@m uk-visible@m">

        <nav class="uk-navbar uk-height-1-1" uk-navbar>

            <a class="uk-navbar-item uk-logo uk-margin-small-left" style="color: white;" href="/">
                <span class="uk-text-bold">IT</span>ogether
            </a>

            <span class="uk-navbar-right">

                @if(isset($attributes))
                    @if($attributes['mode'] == 'catagory.overview')
                        <a href="{{ route('addCatagory') }}" class="uk-button uk-button-default" style="color: white;">
                            Nieuwe catagorie toevoegen
                        </a>
                    @endif
                @endif    

                @if(isset($currentuser->first_name))
                    <button class="uk-button uk-button-default uk-text-capitalize" style="height: 100%; color: white; border: none; font-size: 18px;" type="button">@if($currentuser->first_name) {{ $currentuser->first_name }} @endif</button>
                    <div uk-dropdown>
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-active">Algemene opties</li>
                            <li><a href="{{ route('logout') }}">Log-uit</a></li>
                            @if($currentuser->admin == 1)
                                <li class="uk-active">Admin paneel</li>
                                <li><a href="{{ route('userpanel') }}">Gebruikers overzicht</a></li>
                                <li><a href="{{ route('overviewCatagory') }}">Categorieën</a></li>
                            @endif
                        </ul>
                    </div>
                @endif

            </span>

        </nav>

    </div>

</div>
<hr class="uk-margin-remove">