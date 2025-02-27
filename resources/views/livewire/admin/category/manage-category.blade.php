<div class="mx-auto w-full p-4 md:p-6 2xl:p-10 text-[#7db0ad]">
    <div class="flex flex-1 justify-between">
        <div>
            <h1 class="text-2xl font-bold mb-4">Manage Category</h1>
        </div>
        <div class="relative flex flex-1">
            <input type="search"
                class="border w-[300px] pl-8 pr-2 py-2 rounded-xl border-none ring-1 ring-gray-300 focus:ring-gray-400 focus:ring-2 text-[#7db0ad]"
                placeholder="search here.."
                wire:model.live='searchTerm' />
            <svg xmlns="http://www.w3.org/2000/svg"
                class="absolute left-2 top-1/2 transform -translate-y-1/2 text-[#7db0ad]"
                width="20"
                height="20"
                viewBox="0 0 48 48">
                <path d="M 20.5 6 C 12.509634 6 6 12.50964 6 20.5 C 6 28.49036 12.509634 35 20.5 35 C 23.956359 35 27.133709 33.779044 29.628906 31.75 L 39.439453 41.560547 A 1.50015 1.50015 0 1 0 41.560547 39.439453 L 31.75 29.628906 C 33.779044 27.133709 35 23.956357 35 20.5 C 35 12.50964 28.490366 6 20.5 6 z"></path>
            </svg>
        </div>
        <div class="bg-[#7db0ad] text-white px-4 hover:bg-[#5a8a87] rounded  flex items-center">
            <a wire:navigate href="{{ route('category.create-category') }}" class="flex items-center space-x-2">
                
                <span class="text-sm">Add Category</span>
            </a>
        </div>
    </div>
    <div>
        @session('error')
        <div class="mt-4 p-3 bg-red-500 text-white rounded-md text-sm font-semibold hover:bg-red-700">
            {{ session('error') }}
        </div>
        @endsession
        @session('message')
        <div class="mt-4 p-3 bg-[#7db0ad] text-white rounded-md text-sm font-semibold hover:bg-[#699b99] transition-all">
            {{ session('message') }}
            @endsession
    </div>


    <!-- Category Table -->
    <div class="relative overflow-x-auto mt-5">
        <table class="w-full text-sm text-left text-[#7db0ad]">
            <thead class="text-xs uppercase bg-gray-50">
                <tr>
                    <th class="px-6 py-3">Category Id</th>
                    <th class="px-6 py-3">Category Image</th>
                    <th class="px-6 py-3">Category Name</th>
                    <th class="px-6 py-3">Category Slug</th>
                    <th class="px-6 py-3">Category Parent</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr class="bg-white border-b">
                    <th class="px-6 py-4 font-medium text-[#7db0ad] whitespace-nowrap">
                        {{$category->id}}
                    </th>
                    <td class="px-6 py-4">
                        <img src="{{ $category->image ? asset('storage/image/category/' . $category->image) : asset('path/to/default-image.jpg') }}"
                            alt="Category Image"
                            class="w-12 h-12 object-cover border border-gray-300">
                    </td>
                    <td class="px-6 py-4">{{$category->name}}</td>
                    <td class="px-6 py-4">{{$category->cat_slug}}</td>
                    <td class="px-6 py-4">
                        @if($category->parentCategory == NULL)
                        {{"Main Category"}}
                        @else
                        {{$category->parentCategory->name}}
                        @endif
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                        <button wire:click="openModal({{ $category->id }})" class="bg-[#7db0ad] hover:bg-[#5a8a87] text-white px-4 py-2 rounded-xl flex items-center space-x-2">
                            <span>Edit</span>
                        </button>
                        <button wire:click="delete({{ $category->id }})"  wire:confirm="Are you sure you want to delete this Category?"  class="bg-red-500 hover:bg-red-400 text-white px-4 py-2 rounded-xl flex items-center space-x-2">
                            <span>Delete</span>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Edit Category Modal -->
    @if($isModalOpen)
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 max-w-lg text-[#7db0ad]">
            <h3 class="text-lg font-semibold mb-4">Edit Category</h3>
            <form wire:submit.prevent="updateCategory">
                <div class="mb-4">
                    <label class="block text-sm font-medium">Category Name</label>
                    <input type="text" wire:model.live="name" class="mt-1 block w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Category Slug</label>
                    <input type="text" wire:model="slug" class="mt-1 block w-full p-2 border rounded bg-gray-100" readonly>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Category Description</label>
                    <textarea wire:model="description" rows="3" class="mt-1 block w-full p-2 border rounded"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Category Image</label>
                    <input type="file" wire:model="image" class="mt-1 block w-full p-2 border rounded">
                    @if ($image)
                    <div class="mt-2">
                        <img src="{{ $image->temporaryUrl() }}" class="w-32 h-32 object-cover border">
                    </div>
                    @elseif($existingImage)
                    <div class="mt-2">
                        <img src="{{ asset('storage/image/category/' . $existingImage) }}" class="w-32 h-32 object-cover border">
                    </div>
                    @endif
                </div>
                <div class="flex justify-end gap-2">
                    <button type="button" wire:click="closeModal" class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded">
                        Cancel
                    </button>
                    <button type="submit" class="bg-[#7db0ad] hover:bg-[#5a8a87] text-white px-4 py-2 rounded">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endif

   
    
</div>