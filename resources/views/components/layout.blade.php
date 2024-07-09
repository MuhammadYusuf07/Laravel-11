<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>halaman Home</title>
</head>

<body>
    <div class="min-h-full">
        <x-navbar></x-navbar>


        <x-header>{{ $title }}</x-header>




        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
               {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
