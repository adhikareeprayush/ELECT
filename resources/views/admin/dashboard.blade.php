<x-admin-layout>


    <x-adminhead />

    <x-latestproducts :products="$products" />

    <header>
        <h2 class="text-4xl font-semibold text-white mb-4 mt-4 ">Recent Messages</h2>
    </header>
    <x-message-list>
    </x-message-list>


</x-admin-layout>
