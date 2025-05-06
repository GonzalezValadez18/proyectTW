<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia | FarmaPro</title>
    @vite(['./resources/css/app.css', './resources/js/app.js'])
</head>

<x-header />
<body>
    <main class="container mx-auto mt-16 px-4 ">
        <x-presentation />
        {{-- <x-carrousel /> --}}
    </main>
    
</body>


<x-footer />

</body>
</html>
