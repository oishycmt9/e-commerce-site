{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div id="app">--}}
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav mr-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ml-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <main class="py-4">--}}
{{--            @yield('content')--}}
{{--        </main>--}}
{{--    </div>--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="{{asset('/')}}/back-end/assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset('/')}}/back-end/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="{{asset('/')}}/back-end/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset('/')}}/back-end/assets/css/app.css">
    <link rel="shortcut icon" href="{{asset('/')}}/back-end/assets/images/favicon.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</head>
<body>
<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <img src="{{asset('/')}}/back-end/assets/images/logo.svg" alt="" srcset="">
            </div>
            <div class="sidebar-menu">
                <ul class="menu">


                    <li class='sidebar-title'>Main Menu</li>



                    <li class="sidebar-item active ">
                        <a href="{{route('home')}}" class='sidebar-link'>
                            <i data-feather="home" width="20"></i>
                            <span>Dashboard</span>
                        </a>

                    </li>




                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="triangle" width="20"></i>
                            <span>Category</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{route('category/create')}}">Add new Category</a>
                            </li>

                            <li>
                                <a href="{{route('category/show')}}">All Category list</a>
                            </li>

                        </ul>

                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="shopping-bag" width="20"></i>
                            <span>Brand</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{route('brand/create')}}">Add new Brand</a>
                            </li>

                            <li>
                                <a href="{{route('brand/show')}}">All Brand list</a>
                            </li>


                        </ul>

                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="shopping-cart" width="20"></i>
                            <span>Supplier</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{route('supplier/create')}}">Add new Supplier</a>
                            </li>

                            <li>
                                <a href="{{route('supplier/show')}}">All Supplier list</a>
                            </li>


                        </ul>

                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="briefcase" width="20"></i>
                            <span>Product</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{route('product/create')}}">Add new Product</a>
                            </li>

                            <li>
                                <a href="{{route('product/show')}}">All Product list</a>
                            </li>


                        </ul>

                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="briefcase" width="20"></i>
                            <span>Purchase</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{route('purchase/create')}}">Add new Purchase</a>
                            </li>

                            <li>
                                <a href="{{route('purchase/show')}}">All Purchase list</a>
                            </li>


                        </ul>

                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{route('category-one/create-one')}}" class='sidebar-link'>
                            <i data-feather="grid" width="20"></i>
                            <span>Test</span>
                        </a>

                    </li>


                    <li class='sidebar-title'>Forms &amp; Tables</li>

                    <li class='sidebar-title'>Extra UI</li>

                    <li class='sidebar-title'>Pages</li>


                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <div id="main">
        <nav class="navbar navbar-header navbar-expand navbar-light">
            <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
            <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                    <li class="dropdown nav-icon">
                        <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-lg-inline-block">
                                <i data-feather="bell"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                            <h6 class='py-2 px-4'>Notifications</h6>
                            <ul class="list-group rounded-none">
                                <li class="list-group-item border-0 align-items-start">
                                    <div class="avatar bg-success mr-3">
                                        <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                    </div>
                                    <div>
                                        <h6 class='text-bold'>New Order</h6>
                                        <p class='text-xs'>
                                            An order made by Ahmad Saugi for product Samsung Galaxy S69
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown nav-icon mr-2">
                        <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-lg-inline-block">
                                <i data-feather="mail"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                            <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                            <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="avatar mr-1">
                                <img src="{{asset('/')}}/back-end/assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                            </div>
                            <div class="d-none d-md-block d-lg-inline-block">{{Auth::user()->name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                            <a class="dropdown-item " href="#"><i data-feather="mail"></i> Messages</a>
                            <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i data-feather="log-out"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main-content container-fluid">
            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
            @yield('content')
        </div>
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-left">
                    <p>2020 &copy; Voler</p>
                </div>
                <div class="float-right">
                    <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{asset('/')}}/back-end/assets/js/feather-icons/feather.min.js"></script>
<script src="{{asset('/')}}/back-end/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="{{asset('/')}}/back-end/assets/js/app.js"></script>

<script src="{{asset('/')}}/back-end/assets/vendors/chartjs/Chart.min.js"></script>
<script src="{{asset('/')}}/back-end/assets/vendors/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('/')}}/back-end/assets/js/pages/dashboard.js"></script>

<script src="{{asset('/')}}/back-end/assets/js/main.js"></script>
<!-- ckeditor url link below start-->
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
            <!--end-->
</body>
</html>
