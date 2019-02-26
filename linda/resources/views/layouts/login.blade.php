<!DOCTYPE html>
<html lang="en">
<head>
<!-- --------------------------------------------- -->
<!-- Realisatie: full-service internetbureau Praes -->
<!-- 050 - 8200 900  |  info@praes.nl  |  praes.nl -->
<!-- --------------------------------------------- -->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

@hasSection('title')
	<title>@yield('title') | CRM-applicatie</title>
@else
	<title>CRM-applicatie</title>
@endif

<link rel="stylesheet" href="/css/uikit.css" >
<link rel="stylesheet" href="/css/login.css">

<link rel="icon" href="/images/favicon.ico" type="image/x-icon"/>

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200,600' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">

</head>
<body>

	@yield('content')

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="/js/uikit.min.js"></script>

</body>
</html>



