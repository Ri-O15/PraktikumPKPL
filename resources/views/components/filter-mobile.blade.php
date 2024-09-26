<div class="grid grid-cols-2 gap-x-8 gap-y-10 lg:grid-cols-4">
    <!-- Filters -->
    <form class="block lg:block w-full px-4 lg:px-6">
        <h3 class="sr-only">Categories</h3>
        <ul role="list" x-data="{ activeItem: window.location.pathname }"
            class="py-1 space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
            <li>
                <a href="/malang" :class="activeItem === '/malang' ?
                    'block px-2 py-3 text-sm font-medium text-gray-900 bg-gray-100' :
                    'block px-2 py-3 text-sm text-gray-500'"
                    @click="activeItem = 0" role="menuitem" tabindex="-1"
                    id="menu-item-0">MALANG</a>
            </li>
            <li>
                <a href="/surabaya" :class="activeItem === '/surabaya' ?
                    'block px-2 py-3 text-sm font-medium text-gray-900 bg-gray-100' :
                    'block px-2 py-3 text-sm text-gray-500'"
                    @click="activeItem = 1" role="menuitem" tabindex="-1"
                    id="menu-item-1">SURABAYA</a>
            </li>
            <li>
                <a href="/yogyakarta" :class="activeItem === '/yogyakarta' ?
                    'block px-2 py-3 text-sm font-medium text-gray-900 bg-gray-100' :
                    'block px-2 py-3 text-sm text-gray-500'"
                    @click="activeItem = 2" role="menuitem" tabindex="-1"
                    id="menu-item-2">YOGYAKARTA</a>
            </li>
            <li>
                <a href="/solo" :class="activeItem === '/solo' ?
                    'block px-2 py-3 text-sm font-medium text-gray-900 bg-gray-100' :
                    'block px-2 py-3 text-sm text-gray-500'"
                    @click="activeItem = 3" role="menuitem" tabindex="-1"
                    id="menu-item-3">SOLO</a>
            </li>
            <li>
                <a href="/semarang" :class="activeItem === '/semarang' ?
                    'block px-2 py-3 text-sm font-medium text-gray-900 bg-gray-100' :
                    'block px-2 py-3 text-sm text-gray-500'"
                    @click="activeItem = 4" role="menuitem" tabindex="-1"
                    id="menu-item-4">SEMARANG</a>
            </li>
        </ul>
    
        <div x-data="{ isExpand: true }" class="border-b border-gray-200 py-6">
            <h3 class="-my-3 flow-root">
                <button type="button" @click="isExpand = !isExpand"
                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                    aria-controls="filter-section-0" aria-expanded="false">
                    <span class="font-medium text-gray-900">PAKET</span>
                    <span class="ml-6 flex items-center">
                        <svg x-show="!isExpand" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path
                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                        <svg x-show="isExpand" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </h3>
            <div x-show="isExpand" class="pt-6" id="filter-section-0">
                <div class="space-y-4 grid grid-cols-1 gap-4">
                    <div class="flex items-center">
                        <input id="filter-paket-0" name="paket[]" value="family" type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="filter-paket-0" class="ml-3 text-sm text-gray-600">FAMILY</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-paket-1" name="paket[]" value="personal"
                            type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="filter-paket-1" class="ml-3 text-sm text-gray-600">PERSONAL MEALBOX</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-paket-2" name="paket[]" value="healthy"
                            type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="filter-paket-2" class="ml-3 text-sm text-gray-600">HEALTHY DIET</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-paket-3" name="paket[]" value="advance"
                            type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="filter-paket-3" class="ml-3 text-sm text-gray-600">ADVANCE DIET</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-paket-4" name="paket[]" value="event" type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="filter-paket-4" class="ml-3 text-sm text-gray-600">EVENT CATERING</label>
                    </div>
                </div>
            </div>
        </div>
    
        <div x-data="{ isExpand: true }" class="border-b border-gray-200 py-6">
            <h3 class="-my-3 flow-root">
                <button type="button" @click="isExpand= !isExpand"
                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                    aria-controls="filter-section-1" aria-expanded="false">
                    <span class="font-medium text-gray-900">KARBO</span>
                    <span class="ml-6 flex items-center">
                        <svg x-show="!isExpand" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path
                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                        <svg x-show="isExpand" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </h3>
            <div x-show="isExpand" class="pt-6" id="filter-section-1">
                <div class="space-y-4 grid grid-cols-2 gap-4">
                    <div class="flex items-center">
                        <input id="filter-karbo-0" name="karbo[]" value="tanpaNasi"
                            type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="filter-karbo-0" class="ml-3 text-sm text-gray-600">TANPA NASI</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-karbo-1" name="karbo[]" value="nasiPutih"
                            type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="filter-karbo-1" class="ml-3 text-sm text-gray-600">NASI PUTIH</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-karbo-2" name="karbo[]" value="nasiMerah"
                            type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="filter-karbo-2" class="ml-3 text-sm text-gray-600">NASI MERAH</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-karbo-3" name="karbo[]" value="variatif"
                            type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="filter-karbo-3" class="ml-3 text-sm text-gray-600">VARIATIF</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
    

    <!-- Product grid -->
    <div class="lg:col-span-3">
        <!-- Your content -->
        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-2 lg:max-w-7xl lg:px-12">
                <div id="product-container"
                    class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

                    <div class="product" data-paket="family personal healthy advance event" data-karbo="variatif">
                        <div class="group relative">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                                <img src="img/AssetSenjani/11.Snack.jpg"
                                    alt="Front of men's Basic Tee in black."
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true"
                                                class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                        </div>
                    </div>

                    <div class="product" data-paket="family personal healthy advance event" data-karbo="tanpaNasi">
                        <div class="group relative">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                                <img src="img/AssetSenjani/1.Tanpa.jpg"
                                    alt="Front of men's Basic Tee in black."
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true"
                                                class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                        </div>
                    </div>

                    <div class="product" data-paket=" personal healthy advance event" data-karbo="nasiMerah">
                        <div class="group relative">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                                <img src="img/AssetSenjani/3.Merah.jpg"
                                    alt="Front of men's Basic Tee in black."
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true"
                                                class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                        </div>
                    </div>

                    <div class="product" data-paket="family personal healthy advance event" data-karbo="nasiPutih">
                        <div class="group relative">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                                <img src="img/AssetSenjani/2.Putih.jpg"
                                    alt="Front of men's Basic Tee in black."
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true"
                                                class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                        </div>
                    </div>

                    <!-- More products... -->
                </div>
            </div>
        </div>
    </div>
</div>