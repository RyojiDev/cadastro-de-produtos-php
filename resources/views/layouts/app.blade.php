<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title> Cadastro de Produtos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    body{
        pagging: 20px;
    }
    .navbar {
        margin-bottom:
    }
    </style>
    <title>Document</title>
    <meta name="csrf token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container">
    @component('componente_navbar', [ "current" => "$current"])
    @endcomponent
        <main role="main">
        @hasSection('body')
            @yield('body')
            @endif
        </main>
    </div>


    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>