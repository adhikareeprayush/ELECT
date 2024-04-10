<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <x-nav>
    </x-nav>

    {{ $slot }}



    <x-footer>
    </x-footer>

</body>

</html>
