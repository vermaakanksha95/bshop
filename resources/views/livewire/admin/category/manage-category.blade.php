<div class="flex flex-1 flex-col gap-5">
    <div class="flex flex-1 justify-between items-center p-5">
        <h2 class="border-l-4 border-slate-700 pl-2 text-xl">Manage Category</h2>
        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button" wire:ignore.self>
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
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Insert Category
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="flex flex-1">
                    @session('message')
                    <div class="bg-slate-500 text-white p-5 px-4 py-4 rounded-xl">
                        {{session('message')}}
                    </div>
                    @endsession
                </div>
                <div class="p-4 md:p-5 space-y-4">
                    <form wire:submit.prevent="save">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Category Name -->
                            <div class="mb-4">
                                <label class="block text-gray-700">Category Name</label>
                                <input type="text" wire:model.live="name" class="w-full p-2 border rounded">
                                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700">Category Slug</label>
                                <input type="text" disabled wire:model.live="cat_slug" class="w-full p-2 border rounded">
                                @error('cat_slug') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <!-- Parent Category -->
                            <div class="mb-4">
                                <label class="block text-gray-700">Main Category</label>
                                <select wire:model="parent_category_id" class="w-full p-2 border rounded">
                                    <option value="NULL">Select Main Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('parent_category_id')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Description (Full width) -->
                            <div class="md:col-span-2 mb-4">
                                <label class="block text-gray-700">Description</label>
                                <textarea rows="2" wire:model="cat_description" class="w-full p-2 border rounded"></textarea>
                                @error('cat_description') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <!-- Image Upload -->
                            <div class="md:col-span-2 flex items-center justify-center w-full">
                                <label for="dropzone-file" class="flex flex-col items-center justify-center   w-full  h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 relative">
                                    <div id="upload-icon" class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                    </div>
                                    <input id="dropzone-file" type="file" class="hidden" accept="image/*" onchange="previewImage(event)" />
                                    <img id="preview-img" class="absolute inset-0 w-full h-full object-cover rounded-lg hidden" />
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6">
                            <button type="submit" class=" bg-slate-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-slate-600">
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
        <div class="bg-slate-500 text-white p-5 px-4 py-4 rounded-xl" wire:loading.delay.short>
            {{session('error')}}
        </div>
        @endsession
        @session('success')
        <div class="bg-teal-500 text-white p-5 px-4 py-4 rounded-xl" wire:loading.delay.short>
            {{session('success')}}
        </div>
        @endsession
    </div>
    <div class=" w-full">
        <table class="w-full text-sm text-left text-gray-500">

            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
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
                <tr class="bg-white border-b border-gray-200">
                    <td class="px-6 py-4">{{$category->id}}</td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{$category->name}}</th>
                    <td class="px-6 py-4">{{$category->cat_slug}}</td>
                    <td class="px-6 py-4">{{$category->cat_description}}</td>
                    <td class="px-6 py-4">@if($category->parentCategory == NULL)
                        {{"Main Category"}}
                        @else{{$category->parentCategory->name}}
                        @endif
                    </td>
                    <td class="px-6 py-4 gap-4 flex">
                        <button class=" px-4 py-2 bg-slate-400 text-white rounded ">Edit</button>
                        <button wire:click="delete({{$category->id}})" class=" px-4 py-2 bg-red-400 text-white rounded cursor-pointer">Delete</button>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>