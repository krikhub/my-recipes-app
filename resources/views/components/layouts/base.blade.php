<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom Font Test</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body {{ $attributes->merge(['class' => 'flex flex-col min-h-screan m-0 overflow-x-hidden'])}}>
    <header>
        <x-partials.header>
        </x-partials.header>
    </header>

    <main>
        {{ $slot }}
    </main>
</body>
</html>
