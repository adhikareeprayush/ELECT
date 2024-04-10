@props([
    'label' => '',
    'name' => '',
    'type' => 'text',
    'placeholder' => '',
    'required' => false,
    'id' => '',
])


<div class="mb-5 w-full">
    <label for="{{ $name }}" class="block mb-1 text-sm font-medium text-gray-900 =">{{ $slot }}</label>
    <input type="{{ $type }}" id="{{ $id }}"
        class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="{{ $placeholder }}" {{ $attributes }} required />
</div>
