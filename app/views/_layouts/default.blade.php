<!DOCTYPE html>
<html class="cufon-active cufon-ready"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @section('title')
        @show
    </title>

    <link rel="stylesheet" href="{{ asset('assets/files/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/files/theme-3.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/random.css') }}" type="text/css">

    <!-- js files -->
    <script type="text/javascript" src="{{ asset('assets/files/jquery_002.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/files/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/files/jquery_004.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/files/jquery_003.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/files/iscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/files/cufon-yui.js') }}"></script>
    <style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}}</style>
    <script type="text/javascript" src="{{ asset('assets/files/twitter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/files/libraries.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/files/Open_Sans_400.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/files/Terminal_Dosis_400-Terminal_Dosis_600.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/files/jquery.cycle.all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/files/custom.js') }}"></script>
    <!-- /js files -->
    <style>
    @section('styles')
    @show
    </style>
    <script>
        UPLOADCARE_PUBLIC_KEY = '784913f134547d53710b';
    </script>

</head>

<body>

<body>
    <!-- Head Line: Header, Countdown -->
    <div style="background-position: -237px 0px;" class="headline-wrapper">
        <div style="background-position: -118px 0px;" class="headline">
            <div class="headline-inner">
                <div class="fixw">
                    <div class="headline-left">
                        <!-- H1 Header -->
                        <h1 style="margin-left:-4px">
                            <cufontext style="color: #f00">2014</cufontext><br/>
                            <cufontext>HobbyLink</cufontext>
                        </h1>
                    </div>
                    <div class="headline-right">
                        <div class="headline-right-contaner">
                            <!-- Date and Place -->
                            <p class="dates-place">
                                <a href="/hobbylink/public/events/emag-hackathon">
                                    eMag Hackathon

                                    <br>
                                    <span>Swan</span></a></p>
									
									
                            <!-- Countdown -->
							
                            <div class="countdown">
                                <div class="hasCountdown" id="countdown">
                                    <span class="countdown_row countdown_show4">
                                        <span class="countdown_section">
                                            <span class="countdown_amount">18</span>
                                            <br>Days</span>
                                        <span class="countdown_section">
                                            <span class="countdown_amount">9</span><br>
                                            Hours</span>
                                        <span class="countdown_section">
                                            <span class="countdown_amount">36</span><br>Minutes
                                        </span>
                                        <span class="countdown_section">
                                            <span class="countdown_amount">49</span><br>Seconds</span></span>
								</div>
                                <div class="countdown-box">
                                    <div class="field">
                                        <div class="value" id="countdown-days">
                                            <div style="top: 54px;" class="next">

                                            </div>
                                            <div class="current">
                                               18
                                            </div>
                                            <div class="shade"></div>
                                        </div>
                                        <div class="name">days</div>
                                    </div>
                                    <div class="field dropshade">
                                        <div class="value" id="countdown-hours">
                                            <div style="top: 54px;" class="next"></div>
                                            <div style="top: 0px;" class="current">
                                                09
                                            </div>
                                            <div class="shade"></div>
                                        </div>
                                        <div class="name">hrs</div>
                                    </div><div class="field dropshade">
                                    <div class="value" id="countdown-minutes">
                                        <div style="top: 0px;" class="current">
                                            36
                                        </div>
                                        <div style="top: 54px;" class="next">
                                            37
                                        </div>
                                        <div class="shade"></div>
                                    </div>
                                    <div class="name">min</div>
                                    </div>
                                    <div class="field dropshade last">
                                        <div class="value" id="countdown-seconds">
                                            <div style="top: -7.29px;" class="current">
                                                49
                                            </div>
                                            <div class="next">
                                                50
                                            </div>
                                            <div class="shade"></div>
                                        </div>
                                        <div class="name">sec</div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <!-- /Countdown -->
                        </div>
                        <div class="clear">&nbsp;</div>
                    </div>
                    <div class="clear">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Head Line -->

    <!-- Content Line -->
    <div class="contentline">
        <div class="contentline-inner fixw">
            <div class="content">

                <div class="menu-pane">
                    <ul id="menu-primary-menu" class="primary-menu">

                        <li class="menu-item {{ (Route::is('home')) ? 'active' : null }}"><a href="{{ route('home') }}">Prima pagina</a></li>
                        <li class="menu-item {{ (Route::is('event.list') or Route::is('event')) ? 'active' : null }}"><a href="{{ route('event.list') }}">Evenimente</a></li>

                        @foreach( $menu as $menu_item )
                            @if( is_array($menu_item['link']) )
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> {{ $menu_item['title'] }} <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        @foreach( $menu_item['link'] as $subMenu )
                                            <li><a href=" {{ $subMenu['link'] }} "> {{ $subMenu['title'] }} </a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="menu-item {{ $menu_item['class'] }}"><a href="{{ $menu_item['link'] }}"> {{ $menu_item['title'] }} </a></li>
                            @endif
                        @endforeach
                    </ul>

					@if (Sentry::check())
					<div class="secondary-menu-container">
                    	<div class="secondary-menu-control"><a href="{{ URL::to('admin/users/logout') }}">Logout</a></div>
                    </div>
                    @else
					<div class="secondary-menu-container">
						<div class="secondary-menu-control"><a href="{{ URL::to('admin/users/login') }}">Login</a></div>
					</div>
					<a href="{{ URL::to('admin/users/register') }}" class="menu-special-button">Registration!</a>
					@endif

                    <div class="clear"></div>
                </div>

				@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
					<div class="admin-box-top">
						<strong>Admin</strong>
						<ul class="default-menu">
							<li {{ (Request::is('admin/users*') ? 'class="active"' : '') }}><a href="{{ URL::to('/admin/users') }}"><span class="glyphicon glyphicon-chevron-right"></span>Users</a></li>
							<li {{ (Request::is('admin/groups*') ? 'class="active"' : '') }}><a href="{{ URL::to('/admin/groups') }}"><span class="glyphicon glyphicon-chevron-right"></span>Groups</a></li>
							<li {{ (Request::is('admin/pages*') ? 'class="active"' : '') }}><a href="{{ URL::to('/admin/pages') }}"><span class="glyphicon glyphicon-chevron-right"></span>Pages</a></li>
						</ul>
					</div>
				{{-- @elseif (Sentry::check() && Sentry::getUser()->inGroup(Sentry::findGroupByName('Member'))) --}}
				@elseif (Sentry::check())
					<div class="admin-box-top">
						
						<ul class="default-menu">
							<li><strong>Contul tau:</strong></li>
							<li class="xnavbar-text"><em>{{ Sentry::getUser()->email }}</em></li>						
							<li {{ (Request::is('admin/userdetails*') ? 'class="active"' : '') }}>
								<a href="{{ route('admin.userdetails.edit',
								User::find(Sentry::getUser()->id)->details->id) }}"><span class="glyphicon glyphicon-chevron-right"></span>Profil</a>
							</li>
							<li><a href="{{ URL::to('/admin/events') }}"><span class="glyphicon glyphicon-chevron-right"></span>Evenimente</a></li>
							<li><a href="{{ URL::to('admin/users/logout') }}">Logout</a></li>
						</ul>
					</div>
				@endif

				@if (Sentry::check())
					
				@else

				@endif
                    <div class="clear"></div>

				<!-- Notifications -->
				@include('_partials/notifications')
				<!-- ./ notifications -->

				<!-- Content -->
				@yield('content')
				<!-- ./ content -->

				<div class="clear">&nbsp;</div>

           </div>
           <div class="clear">&nbsp;</div>
        </div>
    </div>
    <!-- /Content Line -->

    <!-- Footer Line -->
    <div class="footerline">
        <div class="footerline-inner">
            <div class="fixw">
                <div class="footer-copy">
                    <p>
                        Copyright © 2014 HobbyLink.com
                    </p>
                </div>
                <div class="clear">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- /Footer Line -->

</body>
</html>
