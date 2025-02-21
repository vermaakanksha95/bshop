<div>
    <div class="flex flex-1 justify-between items-center p-5">
        <h2 class="border-l-4 border-[#7db0ad] pl-2 text-xl text-[#7db0ad]">Manage Product</h2>
        <a href="{{route('product.create-product')}}" class="block text-white bg-[#7db0ad] hover:bg-[#689e9b] focus:ring-4 focus:outline-none focus:ring-[#7db0ad] font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button" wire:ignore.self>
            Create Product
        </a>
    </div>

    <div class="flex flex-1">
        @session('error')
        <div class="bg-red-500 text-white p-5 px-4 py-4 rounded-xl" wire:loading.delay.short>
            {{session('error')}}
        </div>
        @endsession
        @session('success')
        <div class="bg-teal-500 text-white p-5 px-4 py-4 rounded-xl" wire:loading.delay.short>
            {{session('success')}}
        </div>
        @endsession
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-[#7db0ad]">
            <thead class="text-xs uppercase bg-gray-50 text-[#7db0ad] border-b border-[#7db0ad]">
                <tr>
                    <th scope="col" class="px-6 py-3">Product name</th>
                    <th scope="col" class="px-6 py-3">Product Description</th>
                    <th scope="col" class="px-6 py-3">Category</th>
                    <th scope="col" class="px-6 py-3">Price</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="odd:bg-white even:bg-gray-50 border-b border-[#7db0ad]">
                    <th scope="row" class="px-6 py-4 font-medium text-[#7db0ad] whitespace-nowrap">{{$product->name}}</th>
                    <td class="px-6 py-4">{{$product->description}}</td>
                    <td class="px-6 py-4">{{$product->category->name}}</td>
                    <td class="px-6 py-4">$2999</td>
                    <td class="px-6 py-4">
                        <button class="px-4 py-2 bg-[#7db0ad] text-white rounded hover:bg-[#689e9b]">Edit</button>
                        <button wire:click="delete({{$product->id}})" class="px-4 py-2 bg-red-400 text-white rounded cursor-pointer">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>