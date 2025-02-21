<div class="flex flex-1 flex-col gap-5">
    <div class="flex flex-1 justify-between items-center p-5">
        <h2 class="border-l-4 border-[#7db0ad] pl-2 text-xl text-[#7db0ad]">Manage Category</h2>
        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-[#7db0ad] hover:bg-[#689e9b] focus:ring-4 focus:outline-none focus:ring-[#7db0ad] font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button" wire:ignore.self>
            Create Category
        </button>
    </div>

    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" x-data
        x-on:close-modal.window="() => {
                const modal = tailwind.Modal.getInstance($el);
                if (modal) modal.close();
            }" wire:ignore.self>
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <div class="relative bg-white rounded-lg shadow-sm">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-[#7db0ad]">
                    <h3 class="text-xl font-semibold text-[#7db0ad]">Insert Category</h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="flex flex-1">
                    @session('message')
                    <div class="bg-[#7db0ad] text-white p-5 px-4 py-4 rounded-xl">
                        {{session('message')}}
                    </div>
                    @endsession
                </div>
                <div class="p-4 md:p-5 space-y-4">
                    <form wire:submit.prevent="save">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="mb-4">
                                <label class="block text-[#7db0ad]">Category Name</label>
                                <input type="text" wire:model.live="name" class="w-full p-2 border rounded border-[#7db0ad]">
                                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label class="block text-[#7db0ad]">Category Slug</label>
                                <input type="text" disabled wire:model.live="cat_slug" class="w-full p-2 border rounded border-[#7db0ad]">
                                @error('cat_slug') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label class="block text-[#7db0ad]">Main Category</label>
                                <select wire:model="parent_category_id" class="w-full p-2 border rounded border-[#7db0ad]">
                                    <option value="NULL">Select Main Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('parent_category_id')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-2 mb-4">
                                <label class="block text-[#7db0ad]">Description</label>
                                <textarea rows="2" wire:model="cat_description" class="w-full p-2 border rounded border-[#7db0ad]"></textarea>
                                @error('cat_description') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="bg-[#7db0ad] text-white font-semibold px-4 py-2 rounded-lg hover:bg-[#689e9b]">
                                Save Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="flex">
        @session('error')
        <div class="bg-[#7db0ad] text-white p-5 px-4 py-4 rounded-xl" wire:loading.delay.short>
            {{session('error')}}
        </div>
        @endsession
        @session('success')
        <div class="bg-teal-500 text-white p-5 px-4 py-4 rounded-xl" wire:loading.delay.short>
            {{session('success')}}
        </div>
        @endsession
    </div>

    <div class="w-full">
        <table class="w-full text-sm text-left text-[#7db0ad]">
            <thead class="text-xs uppercase bg-gray-50 text-[#7db0ad] border-b border-[#7db0ad]">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Category name</th>
                    <th scope="col" class="px-6 py-3">Cat Slug</th>
                    <th scope="col" class="px-6 py-3">Cat Description</th>
                    <th scope="col" class="px-6 py-3">Category Parent</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr class="bg-white border-b border-[#7db0ad]">
                    <td class="px-6 py-4">{{$category->id}}</td>
                    <th scope="row" class="px-6 py-4 font-medium text-[#7db0ad] whitespace-nowrap">{{$category->name}}</th>
                    <td class="px-6 py-4">{{$category->cat_slug}}</td>
                    <td class="px-6 py-4">{{$category->cat_description}}</td>
                    <td class="px-6 py-4">
                        @if($category->parentCategory == NULL)
                        {{"Main Category"}}
                        @else
                        {{$category->parentCategory->name}}
                        @endif
                    </td>
                    <td class="px-6 py-4 gap-4 flex">
                        <button class="px-4 py-2 bg-[#7db0ad] text-white rounded hover:bg-[#689e9b]">Edit</button>
                        <button wire:click="delete({{$category->id}})" class="px-4 py-2 bg-red-400 text-white rounded cursor-pointer">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>