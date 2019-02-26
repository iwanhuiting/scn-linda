<div id="offcanvas" class="" uk-offcanvas>
	<div class="uk-offcanvas-bar uk-offcanvas-bar-show">
    <a class="uk-navbar-item uk-logo" href="{{ route('dashboard') }}">
        <span class="uk-text-bold"> Praes</span> CRM
    </a>
		<ul class="uk-nav uk-nav-default uk-margin-large-top uk-nav-parent-icon" uk-nav="">
	        <li>
	            <a href="{{ route('dashboard') }}">
	                <i uk-icon="icon:home"></i>
	                Dashboard
	            </a>
	        </li>

	        <li>
	            <a href="{{ route('clients') }}">
	                Klanten
	            </a>
	        </li>

	        <li>
	            <a href="{{ route('events') }}">
	                Gebeurtenissen
	            </a>
	        </li>

	        <li>
	            <a href="{{ route('actions') }}">
	                Acties
	            </a>
	        </li>

			<li class="uk-parent">
	            <a href="#">
	                <i uk-icon="icon:cog"></i>
	                Instellingen
	            </a>	    
	                   
                <ul class="uk-subnav" role="menu">
                    <li>
                        <a href="{{ route('users') }}">Alle gebruikers </a>              
                    </li>
                </ul>	  
        	</li>

			<li class="uk-parent">
	            <a href="#">
	                <i uk-icon="icon:sign-out"></i>
	                {{ Auth::user()->name }}
	            </a>
                <ul class="uk-subnav" role="menu">
                    <li>
                        <a href="{{ route('logout') }}">Uitloggen </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>           
                    </li>
                </ul>
        	</li>      	
		</ul>
	</div>
</div>