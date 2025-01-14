<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>

        <title>Chain Link - where blockchain ethusiasts learn, share & build careers</title>
    </head>
    <body>
        <div id="app">
            <v-app app>
                <app-home/>
            </v-app>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
