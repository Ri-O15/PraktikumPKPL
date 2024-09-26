<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <title>Document</title>
</head>

<body>

    <div class="bg-white">
        <div x-data="{ isFilter: false }">
                <x-sort></x-sort>
            <main class="mx-auto max-w-8xl px-8 sm:px-6 lg:px-2 sm:pt-32 lg:pt-44">
                <section aria-labelledby="products-heading">
                    {{-- <h2 id="products-heading" class="sr-only">Products</h2> --}}

                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">

                        <x-filter-desktop></x-filter-desktop>

                        <div class="lg:col-span-3">
                            <div class="bg-white">
                                <div class="ml-6 max-w-8xl px-4 py-2 sm:px-6 sm:py-2 lg:max-w-7xl lg:px-1">
                                    <x-city-name>{{ $title }}</x-city-name>
                                    {{ $slot }}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <x-footer></x-footer>
        </div>
    </div>

    <script src="/js/script.js"></script>
</body>

</html>
