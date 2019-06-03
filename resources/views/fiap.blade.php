<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = {csrfToken: '{{csrf_token()}}'}</script>
        <title>FIAP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{elixir('css/app.css')}}">
    </head>
    <body>
        <div class="bg-gray" id="app">
            <header-component></header-component>
            <mba-component></mba-component>
            <concept-component></concept-component>
            <carousel-component></carousel-component>
            <news-component></news-component>
            <form-component></form-component>
            <footer-component></footer-component>
        </div>

        <!-- Javascript -->
        <script type="text/javascript" src="{{elixir('js/app.js')}}"></script>
    </body>
</html>
