<div class="tm-navbar" uk-sticky style="background: linear-gradient(to left, #28a5f5, #1e87f0);">

    <div class="uk-width-1-1@m uk-visible@m">

        <nav class="uk-navbar uk-height-1-1" uk-navbar>

            <a class="uk-navbar-item uk-logo uk-margin-small-left" style="color: white;" href="/">
                <span class="uk-text-bold">IT</span>ogether
            </a>

            @if(isset($user->first_name))
            <span class="uk-navbar-right">
                <button class="uk-button uk-button-default" style="height: 100%; color: white; border: none;" type="button">@if($user->first_name) {{ $user->first_name }} @endif</button>
                <div uk-dropdown>
                    <ul class="uk-nav uk-dropdown-nav" style="color: white;">
                        <li class="uk-active"><a href="{{ route('logout') }}">Logout</a></li>
                        <li><a href="#">Dit ziet er goed uit</a></li>
                    </ul>
                </div>
            </span>
            @endif

        </nav>

    </div>

</div>
<hr class="uk-margin-remove">