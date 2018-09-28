<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>
    <header class="app-bar">
        <span class="app-bar__title">Tag Ventures</span>
    </header>
    <div id="app">
        <!--<router-view></router-view>-->
        <main class="main">
            <div class="button-container">
                <button class="button">Inchecken</button>
                <button class="button">Voorraad scannen</button>
                <button class="button">Locaties aanmaken</button>
            </div>
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
