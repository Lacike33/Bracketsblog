<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Template blog">
    <meta name="author" content="Ladislav Valient">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Blog'))</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/clean-blog.css') }}" rel="stylesheet">

</head>
<body>
    {{--Navigacia--}}
    @include('partials.navigation')

    {{--Page Header--}}
    {{--@include('partials.header')--}}
    {{--Obsah stranky--}}
    @yield('content', 'Zatial nie je pripraveny obsah ...')

    {{--Footer--}}
    @include('partials.footer')

    {{--Scripts--}}
    @include('partials.scripts')
</body>
</html>
