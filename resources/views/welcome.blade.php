<x-layout>

    <x-hero>
    </x-hero>

    <x-feature>
    </x-feature>

    {{-- Products --}}
    <x-recent>
        @foreach ($products as $product)
            <x-productsCard title="{{ $product->name }}" description="{{ $product->description }}"
                image="https://placedog.net/500/300" link="#" />
        @endforeach
    </x-recent>

    <div class="icontact flex flex-wrap md:justify-around my-5 sm:justify-center gap-3">
        <x-Contact></x-Contact>
        <x-image></x-image>
    </div>

    <div id="map-container" class="mt-6 mb-6 flex w-full justify-center">
        <x-map>
        </x-map>
    </div>

</x-layout>