<!-- --------------------------------------------- -->
<!-- Realisatie: full-service internetbureau Praes -->
<!-- 050 - 8200 900  |  info@praes.nl  |  praes.nl -->
<!-- --------------------------------------------- -->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

@hasSection('stylesheets.header.before')
    @yield('stylesheets.header.before')
@endif

<link rel="stylesheet" href="/css/app.css">
<!-- <link rel="stylesheet" href="uikit-3/css/uikit.min.css" />  -->
 

@hasSection('stylesheets.header.after')
    @yield('stylesheets.header.after')
@endif

<script src="/js/jquery.min.js"></script>
<script src="/js/uikit.min.js"></script>
<script src="/js/uikit-icons.min.js"></script>



<!-- CSS datedropper -->
<link href="/plugins/datedropper3/datedropper.css" rel="stylesheet" type="text/css">
<link href="/plugins/datedropper3/datepicker-mystyle.css" rel="stylesheet" type="text/css">

<!-- CSS timedropper -->
<link rel="stylesheet" type="text/css" href="/plugins/timedropper-master/timedropper.css"> 



<link rel="icon" href="/images/favicon.ico" type="image/x-icon"/>

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200,600' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">


