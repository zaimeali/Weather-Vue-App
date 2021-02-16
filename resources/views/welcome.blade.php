<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
        
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    </head>
    <body class="bg-blue-200">
        <div id="app" class="flex justify-center pt-16">
            <app />
        </div>
        
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
