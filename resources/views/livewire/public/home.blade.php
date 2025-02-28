<div>
    <div class="relative overflow-hidden mt-28 md:min-h-[90vh]">
        <img src="herosection2.jpg" alt="" class="object-fit w-full h-full" />
    </div>

    <div class="max-w-7xl mx-auto py-16">
        <h2 class="text-4xl font-bold text-center text-[#7db0ad] mb-8">Categories</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($categories as $category)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="th.jpeg" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-2xl font-semibold text-gray-800">{{ $category->name }}</h3>
                    <p class="text-gray-600 mt-2">{{ $category->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @livewire('public.component.product')

    <div class="max-w-4xl mx-auto text-center py-10 md:py-16 mt-[-60px] md:mt-[-50px] px-4">
        <h1 class="text-4xl md:text-5xl font-light text-[#7db0ad]">About the Collection</h1>
        <p class="text-lg md:text-xl text-gray-600 mt-4 max-w-3xl md:max-w-5xl mx-auto leading-relaxed">
            Our valuable clients can avail from us premium quality Clothes Online E-Commerce Website Designing Services.
            This service is performed as per the requirements of our precious clients. The provided service is highly
            appreciated by our clients owing to its hassle-free execution and cost-effectiveness features. This service
            is carried out by our highly qualified professionals using excellent grade tools and modern technology.
            The offered service is executed within a scheduled time-frame. Further, clients can avail this service
            from us at a nominal price.
        </p>
    </div>

    <img src="dummy img.png" alt="">
   <livewire:chat-component />
</div>

