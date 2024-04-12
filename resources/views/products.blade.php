<x-layout>
    <section class=" bg-gray-100 dark:bg-gray-800 ">
        <div class="container mx-auto px-4 pt-3">
            <h2 class="text-3xl font-semibold text-gray-900 dark:text-white mb-6 pt-3">What We Offer</h2>
            <div class="grid place-items-center grid-cols-3 gap-6">
                <!-- Phone Cards -->

                @foreach ($products as $product)
                    <x-productsCard title="{{ $product->name }}" description="{{ $product->description }}"
                        image="{{ $product->image }}" link="/products/{{ $product->id }}" />
                @endforeach
            </div>

            <div class="p-3">
                {{ $products->links() }}
            </div>

        </div>
    </section>


</x-layout>
