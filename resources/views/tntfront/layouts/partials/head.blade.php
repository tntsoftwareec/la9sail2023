</head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TntSoftware') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{asset('tntfront/assets/css/vendor.min.css')}}" rel="stylesheet" />
    <link href="{{asset('tntfront/assets/css/app.min.css')}}" rel="stylesheet" />
    <link href="{{asset('tntfront/assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('tntfront/assets/plugins/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('tntfront/assets/plugins/flag-icon-css/css/flag-icons.min.css')}}" rel="stylesheet" />
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @stack('css')
</head>