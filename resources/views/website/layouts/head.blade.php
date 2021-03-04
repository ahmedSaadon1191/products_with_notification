<!-- Title -->
<title>@yield("title")</title>
<!-- Stylesheets -->
<link href="{{asset('Site/css/bootstrap.css')}}" rel="stylesheet">
<!--- Style css -->
@if (App::getLocale() == 'en')
<link href="{{asset('Site/css/style_ltr.css')}}" rel="stylesheet">
@else
<link href="{{asset('Site/css/style_rtl.css')}}" rel="stylesheet">
@endif


<link href="{{asset('Site/css/responsive.css')}}" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="{{asset('Site/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{asset('Site/css/color-themes/default-theme.css')}}" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('Site/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('Site/images/favicon.png')}}" type="image/x-icon">

@yield('css')
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="Site/js/respond.js"></script><![endif]-->




































<!-- Title -->
<title>@yield("title")</title>
<!-- Favicon -->
<link rel="icon" href="{{URL::asset('assets/img/brand/favicon.png')}}" type="image/x-icon" />
<!-- Icons css -->
<link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet">
<!--  Custom Scroll bar-->
<link href="{{URL::asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />
<!--  Sidebar css -->
<link href="{{URL::asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
<!-- Sidemenu css -->
<link rel="stylesheet" href="{{URL::asset('assets/css-rtl/sidemenu.css')}}">
@yield('css')
<!--- Style css -->
<link href="{{URL::asset('assets/css-rtl/style.css')}}" rel="stylesheet">
<!--- Dark-mode css -->
<link href="{{URL::asset('assets/css-rtl/style-dark.css')}}" rel="stylesheet">
<!---Skinmodes css-->
<link href="{{URL::asset('assets/css-rtl/skin-modes.css')}}" rel="stylesheet">