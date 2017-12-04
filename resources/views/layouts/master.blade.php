<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>@yield('site-title') | {{ config('app.name', 'Sweetliving') }}</title>

     <link href="{{ asset('css/sl.css') }}" rel="stylesheet">
     @yield('site-styles')
</head>
<body>
     @yield('site-content')

     <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
     <script src="{{ asset('js/brandslider.js') }}"></script>
     <script src="{{ asset('js/functions.js') }}"></script>
     @yield('site-scripts')
</body>
</html>
