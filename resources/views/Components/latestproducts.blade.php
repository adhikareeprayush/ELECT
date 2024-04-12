 <!-- Latest Products -->
 <div class="bg-transparent p-6 rounded-lg shadow-md">
     <h2 class="text-xl font-semibold text-white mb-4">Latest Products</h2>
     <div class="grid grid-cols-3 gap-10">
         @foreach ($products as $product)
             <div class="overflow-hidden">
                 <img class="w-full h-32 object-cover object-center rounded-lg shadow-sm" src="{{ $product->image }}"
                     alt="{{ $product->name }}">
                 <div class="p-4 bg-transparent ">
                     <h3 class="text-lg font-semibold text-white">{{ $product->name }}</h3>
                 </div>
             </div>
         @endforeach
     </div>
 </div>
