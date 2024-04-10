@props([
    'title' => 'New Phone Model 1',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'image' => 'https://placedog.net/500/300',
    'link' => '#',
])

<div class="prodCard w-full bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden mb-6">
    <img src="{{ $image }}" alt="Phone" class="w-full h-48 object-cover object-center">
    <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">{{ $title }}</h3>
        <p class="text-gray-600 dark:text-gray-300">{{ $description }}</p>
        <a href="{{ $link }}" class="block mt-4 text-blue-600 dark:text-blue-400 hover:underline">View More</a>
    </div>
</div>
