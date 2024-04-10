<x-layout>
    {{-- Product Dexcription --}}

    <div role="status"
        class="space-y-8 justify-center p-4 md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center">
        <div class="flex items-center justify-center w-full h-48 bg-gray-300 rounded sm:w-96 dark:bg-gray-700">
            <img class=""
                src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Laptop Details">
        </div>
        <div class="w-1/2">
            {{-- Product Details --}}
            <h2 class="text-3xl font-semibold text-gray-900  mb-6 pt-3">{{ $product->name }}</h2>
            <p class="text-gray-900 dark:text-gray-900">{{ $product->description }}</p>
            <p class="text-gray-900 dark:text-gray-900">Price: {{ $product->price }}</p>
            <p class="text-gray-900 dark:text-gray-900">Stock: {{ $product->stock }}</p>
        </div>
    </div>
</x-layout>
