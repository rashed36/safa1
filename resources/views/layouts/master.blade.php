<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title') - {{ config('app.name') }}</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/main.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome/4.7.0/css/font-awesome.min.css') }}"/>
        <link id="base-style" href="{{asset('Admins/css/style.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('Admins/img/favicon.ico')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('backend/perfect-scrollbar/perfect-scrollbar.css')}}">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    </head>
    <body class="app sidebar-mini rtl">
     {{--  Start header Sectionb --}}
        <header class="app-header">
    <a class="app-header__logo" href="#">{{ config('app.name') }}</a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown">
            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
        </li>
    </ul>
</header>
{{-- End Header Section --}}
       {{--  start sideber Section --}}
       <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="app-menu">
        <li>
            {{-- <a class="app-menu__item {{ Route::currentRouteName() == '/dashboard' ? 'active' : '' }}" href="{{ route('/dashboard') }}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a> --}}
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-product-hunt"></i>
                <span class="app-menu__label">Product</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item {{ Route::currentRouteName() == 'admin.all_Pdescription_organic' ? 'active' : '' }}"
                        href="{{ route('admin.all_Pdescription_organic') }}">
                        <i class="icon fa fa-circle-o"> Organic Cotton Grey Fabric</i>
                    </a>
                </li>
                <li>
                    <a class="treeview-item {{ Route::currentRouteName() == 'admin.all_PDescribe_paperCons' ? 'active' : '' }}"
                        href="{{ route('admin.all_PDescribe_paperCons') }}">
                        <i class="icon fa fa-circle-o"> Paper Cones</i>
                    </a>
                </li>
                <li>
                    <a class="treeview-item {{ Route::currentRouteName() == 'admin.img_briquette_all' ? 'active' : '' }}"
                        href="{{ route('admin.img_briquette_all') }}">
                        <i class="icon fa fa-circle-o"> Briquette</i>
                    </a>
                </li>
                <li>
                    <a class="treeview-item {{ Route::currentRouteName() == 'admin.all_petImage' ? 'active' : '' }}"
                        href="{{ route('admin.all_petImage') }}">
                        <i class="icon fa fa-circle-o"> Pet Flakes</i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.all_reason' ? 'active' : '' }}" href="{{ route('admin.all_reason') }}">
                <i class="app-menu__icon fa fa-registered"></i>
                <span class="app-menu__label">Top Reason</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.all_social_link' ? 'active' : '' }}" href="{{ route('admin.all_social_link') }}">
                <i class="app-menu__icon fa fa-link"></i>
                <span class="app-menu__label">Social-link</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.all_slider' ? 'active' : '' }}"
                href="{{ route('admin.all_slider') }}">
                <i class="app-menu__icon fa fa-slideshare"></i>
                <span class="app-menu__label">Slider</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.all_counter' ? 'active' : '' }}" href="{{ route('admin.all_counter') }}">
                <i class="app-menu__icon fa fa-connectdevelop"></i>
                <span class="app-menu__label">Counter</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.all_about' ? 'active' : '' }}" href="{{ route('admin.all_about') }}">
                <i class="app-menu__icon fa fa-share"></i>
                <span class="app-menu__label">About us</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.all_contact' ? 'active' : '' }}" href="{{ route('admin.all_contact') }}">
                <i class="app-menu__icon fa fa-address-card"></i>
                <span class="app-menu__label">Contact</span>
            </a>
        </li>
        
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.all_logo' ? 'active' : '' }}" href="{{ route('admin.all_logo') }}">
                <i class="app-menu__icon fa fa-reddit"></i>
                <span class="app-menu__label">Site-Logo </span>
            </a>
        </li>
    </ul>
</aside>
        {{-- end sideber Section --}}
        <main class="app-content" id="app">
            @yield('content')
        </main>
        <script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('backend/js/popper.min.js') }}"></script>
        <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('backend/js/main.js') }}"></script>
        <script src="{{ asset('backend/js/plugins/pace.min.js') }}"></script>
        @stack('scripts')
    </body>
</html>