<!DOCTYPE html>
<html lang="en">
<head>
	@include('shared.head')
</head>
<bodytext>

	<header>
		<div class="tm-block-navbar">
			@include('shared.navbar')			
		</div>

		@hasSection('toolbar')
		<div class="tm-block-toolbar">
			<div class="uk-container">
				<div class="uk-container uk-width-6-7@m">
					@yield('toolbar')
				</div>
			</div>
		</div>
		@endif
	</header>

	<main class="tm-block-main">
		@if(hasMessage())
			<div class="uk-container">
				<section class="uk-width-6-7@m uk-container">
					<div class="uk-grid">
						<div class="uk-width-1-1@m ">
							<div class="uk-margin-bottom">
								{!! getMessage() !!}
							</div>
						</div>
					</div>
				</section>
			</div>
		@endif

		<div class="uk-container">
			<section class="uk-width-6-7@m uk-container tm-main">
				@yield('content')
			</section>
		</div>
	</main>

	<div class="uk-grid">
		<div class="uk-width-6-7@m uk-container">
			<footer>
				@include('shared.footer')
			</footer>
		</div>
	</div>

	@include('shared.offcanvas')

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="/js/uikit.min.js"></script>

@hasSection('scripts.footer')
	@yield('scripts.footer')
@endif

</bodytext>
</html>
