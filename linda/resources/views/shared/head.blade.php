<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

@hasSection('title')
	<title>@yield('title') | CRM-applicatie</title>
@else
	<title>IToghether</title>
@endif

@hasSection('stylesheets.header.before')
    @yield('stylesheets.header.before')
@endif

<link rel="stylesheet" href="/css/app.css">
<!-- <link rel="stylesheet" href="uikit-3/css/uikit.min.css" />  -->
<link rel="stylesheet" href="/css/uikit.min.css" />

@hasSection('stylesheets.header.after')
    @yield('stylesheets.header.after')
@endif

<script src="/js/jquery.min.js"></script>
<script src="/js/uikit.min.js"></script>
<script src="/js/uikit-icons.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.19/sorting/datetime-moment.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=j6zcg5uz1ac5mvwl7q9kombpx59kd5o1ta1k99jipnvdgu1o"></script>
<script>
	tinymce.init({ selector: '#tinymce'});
	tinymce.init({ selector: '#tinymce2'});
	tinymce.init({ selector: '#tinymce3'});
	tinymce.init({ selector: '#tinymce4'});
	tinymce.init({ selector: '#tinymce5'});
</script>


<!-- CSS datedropper -->
<link href="/plugins/datedropper3/datedropper.css" rel="stylesheet" type="text/css">
<link href="/plugins/datedropper3/datepicker-mystyle.css" rel="stylesheet" type="text/css">

<!-- CSS timedropper -->
<link rel="stylesheet" type="text/css" href="/plugins/timedropper-master/timedropper.css"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="icon" href="/images/favicon.ico" type="image/x-icon"/>

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200,600' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">