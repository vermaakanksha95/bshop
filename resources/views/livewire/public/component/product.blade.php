<div class="bg-slate-100 flex justify-center items-center min-h-screen px-4">
    <section class="text-center py-12 w-full">
        <h2 class="text-3xl md:text-4xl text-teal-700 tracking-wide mb-6">Explore the Collection</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4 sm:px-8 lg:px-12">
            @foreach($products as $product)
            
            <div class="relative group w-full max-w-xs mx-auto overflow-hidden">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full rounded transition-transform duration-500 transform group-hover:scale-110">
                <div class="absolute inset-0 bg-gray-200 opacity-0 group-hover:opacity-60 transition-opacity"></div>
                <button class="absolute inset-x-0 bottom-4 text-gray-700 text-center py-2 bg-white opacity-0 group-hover:opacity-100 transition-opacity rounded-md shadow-md">
                    Quick View
                </button>
                <p class="text-center mt-4 text-lg text-gray-700">{{ $product->name }}</p>
                <p class="text-center text-gray-500">${{ $product->price }}</p>
            </div>
            @endforeach
        </div>
    </section>
</div>