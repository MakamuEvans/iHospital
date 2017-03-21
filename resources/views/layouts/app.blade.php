<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{url('images/logo.png')}}" type="image/x-icon">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <div class="bg-dark dk" id="wrap">
            @include('_partials.header')
            @include('_partials.sidebar')
        <div id="content">
            <div class="outer">
                <div class="inner bg-light lter">
                    <div class="row" style="padding-top: 15px;">
                        @if (session('status'))
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Success!</strong> <br>
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Warning!</strong> <br>
                                {{ session('error') }}
                            </div>
                        @endif
                        @yield('content')
                    </div>
                </div>
                <!-- /.inner -->
            </div>
            <!-- /.outer -->
        </div>
            <!-- /#content -->
        </div>
        <!-- /#wrap -->
        @include('_partials.footer')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
