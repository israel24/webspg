<!DOCTYPE html>
<html>
<link href="{{ asset('/img/wf.ico') }}" type="image/x-icon" rel="shortcut icon" />
<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset('/css/skins/skin-purple-light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/skins/skin-blue-light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/skins/skin-green-light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/skins/skin-red-light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/skins/skin-black-light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/skins/skin-yellow-light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/skins/skin-purple.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/skins/skin-blue.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/skins/skin-green.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/skins/skin-red.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/skins/skin-black.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/skins/skin-yellow.css') }}" rel="stylesheet" type="text/css" />
   

    <!-- iCheck -->
    <link href="{{ asset('/plugins/iCheck/square/purple-light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/ms/css/multiselect.css') }}" media="screen" rel="stylesheet" type="text/css">

@include('partials.contentheaderlogos')
@include('partials.htmlheader')

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="{{ $variable2 }}   sidebar-collapse">
		<div class="wrapper">
				 @include('partials.mainheaderv')

                

						 <div class="content-wrapper">
									<section class="content">

									@yield('main-content')

									</section>
						</div>
				
				@include('partials.footer')
		</div>
@include('auth.scripts')
</body>
</html>