<x-layout>
    <x-slot:title>Produk {{ ucfirst($city) }}</x-slot:title>
    
    <div id="productList"
         class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-3 lg:grid-cols-4 xl:gap-x-4">

        @if(isset($products) && is_array($products))
            @foreach($products as $key => $product)
                <div class="product shadow-md hover:shadow-sm active:shadow-md" x-on:click="window.location.href='{{ route('product.detail', ['city' => $city, 'key' => $key]) }}'" data-price="{{ str_replace(['Rp', '.', ','], '', $product['price']) }}"
                    data-paket="{{ $product['paket'] ?? '' }}" data-karbo="{{ $product['karbo'] ?? '' }}">
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                            <img src="{{ asset($product['image']) }}"
                                 alt="{{ $product['name'] }}"
                                 class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-600 font-bold">
                                    <a>
                                        <span aria-hidden="true"
                                              class="absolute inset-0"></span>
                                        {{ $product['name'] }}
                                    </a>
                                </h3>
                                <div>
                                    <p><span class="text-md font-extrabold text-orange-500">{{ $product['price'] }}</span></p>
                                    <p class="flex items-center">
                                        <span class="text-xs font-normal text-gray-900 line-through text-opacity-50 mr-1">{{ $product['startprice'] }}</span></p>
                                </div>
                                @if(isset($product['coupun']))
                                    <p class="mt-1 text-sm text-gray-500">{{ $product['coupun'] }}</p>
                                    <p class="mt-1 text-sm text-gray-500">{{ $product['unitprice'] }}/Pack</p>
                                @else
                                    <p class="mt-1 text-sm text-gray-500">No coupon available</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Produk tidak tersedia.</p>
        @endif
        
    </div>
</x-layout>
