<x-layout>
    <section class="bg-gray-100 dark:bg-gray-800">
        <div class="container mx-auto px-4 pt-3">
            <div class="flex justify-between items-center">
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white mb-6 pt-3">What We Offer</h2>

                <!-- Search Icon -->
                <div class="relative">
                    <button id="searchButton"
                        class="flex items-center focus:outline-none text-gray-600 dark:text-gray-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-5.2-5.2M15 10.5A4.5 4.5 0 1110.5 6 4.5 4.5 0 0115 10.5z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="grid place-items-center grid-cols-3 gap-6">
                @foreach ($products as $product)
                    <x-productsCard title="{{ $product->name }}" description="{{ $product->description }}"
                        image="https://placedog.net/500/300" link="/products/{{ $product->id }}" />
                @endforeach
            </div>

            <div class="p-3">
                {{ $products->links() }}
            </div>
        </div>
    </section>

    <!-- Mega Search Box -->
    <div id="megaSearchBoxContainer"
        class="fixed top-0 left-0 w-screen h-screen bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
        <div id="megaSearchBox" class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-6">
            <form class="flex">
                <input type="text" name="search" class="w-full p-2 rounded-lg border-gray-300 focus:border-blue-500"
                    placeholder="Search Products">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r-lg"
                    type="submit">Search</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchButton = document.getElementById('searchButton');
            const megaSearchBoxContainer = document.getElementById('megaSearchBoxContainer');
            const megaSearchBox = document.getElementById('megaSearchBox');

            searchButton.addEventListener('click', function() {
                megaSearchBoxContainer.classList.toggle('hidden');
                document.body.classList.toggle('overflow-hidden');
            });

            megaSearchBoxContainer.addEventListener('click', function(event) {
                if (event.target === megaSearchBoxContainer) {
                    megaSearchBoxContainer.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            });
        });
    </script>
</x-layout>
