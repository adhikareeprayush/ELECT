<x-layout>

    <x-hero>
    </x-hero>

    <x-feature>
    </x-feature>

    {{-- Products --}}
    <x-recent>
        @foreach ($products as $product)
            <x-productsCard title="{{ $product->name }}" description="{{ $product->description }}"
                image="https://placedog.net/500/300" link="/products/{{ $product->id }}" />
        @endforeach
    </x-recent>

    
    <div class="flex flex-col md:flex-row justify-center">
    <div class="w-full md:w-1/2 mb-4 md:mb-0 md:mr-6">
        <x-Contact></x-Contact>
    </div>
    <div class="w-full md:w-1/2">
        <x-image></x-image>
    </div>
</div>


    <div id="map-container" class="mt-6 mb-6 flex w-full justify-center">
        <x-map>
        </x-map>
    </div>

</x-layout>
