<x-admin-layout>
    {{-- Create Form --}}
    <div class="container mx-auto px-4">
        <div class="w-full max-w-2xl mx-auto">
            <form method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <x-input-grp label="Title" name="title" type="text" placeholder="Title" />
                <x-input-grp label="Description" name="description" type="text" placeholder="Description" />
                <x-input-grp label='image' name='image' type='file' placeholder='Image' />
                <x-input-grp label='price' name='price' type='number' placeholder='Price' />
                <x-input-grp label='stock' name='stock' type='number' placeholder='Stock' />

                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-admin-layout>
