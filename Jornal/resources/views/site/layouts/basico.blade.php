<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Jornal Do Manfrim</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/jornal.css')}}">
        <link rel="stylesheet" href="{{asset('css/jornalmobile.css')}}">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="https://kit.fontawesome.com/f7b2e39453.js" crossorigin="anonymous"></script>

    </head>

    <body>
        @include('site.layouts._partials.topo')
        @yield('conteudo')
        @include('site.layouts._partials.footer')
    </body>
</html>