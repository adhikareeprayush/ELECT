<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    @vite('resources/css/app.css')
</head>

<body>

    <x-admin-sidebar>
        {{ $slot }}
    </x-admin-sidebar>

</body>

</html>
