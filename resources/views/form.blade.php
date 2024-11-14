<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>

<body class="bg-gray-100">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="container mx-auto px-4 mt-10">
        <div class="flex justify-center">
            <div class="max-w-8xl w-full rounded overflow-hidden shadow-lg bg-white">
                <div class="px-2 pt-4 pb-2">
                    <a href="{{ url()->previous() }}"
                        class="bg-green-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                        Back
                    </a>
                </div>
                <div class="flex justify-center mt-4">
                    <img class="max-w-xs h-auto shadow-lg rounded-lg" src="{{ asset($product['image']) }}"
                        alt="{{ $product['name'] }}">
                </div>

                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $product['name'] }}</div>
                    <p class="text-gray-700 text-base mb-2 uppercase">
                        Kota : {{ $city }}
                    </p>
                    <p class="text-gray-700 text-base mb-2">
                        Harga : {{ $product['price'] }}
                    </p>
                </div>

                <div class="px-6 py-4">
                    <h2 class="font-bold text-lg mb-4">Masukkan Data Diri Anda</h2>

                    <div id="alert-box"
                        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                        style="display: none;">
                        <span class="block sm:inline">Your form has been submitted successfully!</span>
                    </div>

                    <form id="submit-form" action="{{ route('save-data') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="Produk" value="{{ $product['name'] }}" required>
                        <input type="hidden" id="kota" name="Kota" value="{{ $city }}" required>
                        <input type="hidden" name="Harga" value="{{ $product['price'] }}" required>
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                            <input type="text" id="name" name="Nama" class="form-input mt-1 block w-full"
                                placeholder="name" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email" id="email" name="Email" class="form-input mt-1 block w-full"
                                placeholder="email" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                            <textarea id="message" name="Message" rows="4" class="form-textarea mt-1 block w-full" placeholder="message"></textarea>
                        </div>

                        <button id="submit-button" type="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/form.js" defer></script>

</body>

</html>
