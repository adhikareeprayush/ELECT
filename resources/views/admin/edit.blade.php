<x-admin-layout>
    <div class="container mx-auto mt-20 px-4 w-1/2">
        <form method="POST" action="/admin/edit/{{ $product->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-input-grp label="Name" name="name" type="text" placeholder="Name" value="{{ $product->name }}"
                isAdmin />
            <x-input-grp label="Description" name="description" type="text" placeholder="Description"
                value="{{ $product->description }}" isAdmin />
            <x-input-grp label='Image' name='image' type='file' placeholder='Image' value="{{ $product->image }}"
                isAdmin />
            <x-input-grp label='Price' name='price' type='number' placeholder='Price' value="{{ $product->price }}"
                isAdmin />
            <x-input-grp label='Stock' name='stock' type='number' placeholder='Stock' value="{{ $product->stock }}"
                isAdmin />
            <div class="flex gap-6">
                <a href="/admin/product-list/"
                    class="text-white bg-transparent border border-white px-3 py-2 rounded-md hover:bg-gray-900 focus:outline-none ">Cancel</a>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
            </div>

        </form>
    </div>
</x-admin-layout>
