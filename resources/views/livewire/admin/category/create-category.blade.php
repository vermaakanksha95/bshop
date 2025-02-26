<div class=" min-h-screen flex items-center justify-center p-6">
    <div class="rounded-sm  bg-white p-6  w-full ">
        <form wire:submit.prevent="store">
            <div>
                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Parent Category
                    </label>
                    <select name="parent_category_id" wire:model="parent_category_id" class="w-full rounded border border-gray-300 bg-white px-5 py-3 font-normal text-gray-700">
                        <option value="NULL">Select Main Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('parent_category_id')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex flex-col gap-6 xl:flex-row">
                    <div class="w-full xl:w-1/2">
                        <label class="mb-3 block text-sm font-medium text-gray-800">
                            Category Name
                        </label>
                        <input type="text" wire:model.live="title" placeholder="Enter your Category name"
                            class="w-full rounded border border-gray-300 bg-white px-5 py-3 text-gray-700 font-normal" />
                        @error('title')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full xl:w-1/2">
                        <label for="slug" class="mb-3 block text-sm font-medium text-gray-800">
                            Category Slug
                        </label>
                        <input type="text" id="slug" wire:model="slug"
                            class="w-full rounded border border-gray-300 bg-gray-200 px-5 py-3 text-gray-700" readonly />
                        @error('slug')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Category Image
                    </label>
                    <div class="flex flex-1 md:flex-row flex-col gap-5">
                        <div class="flex-1">
                            <div class="flex items-center justify-center w-full">
                                <label for="dropzone-file"
                                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF
                                            (MAX. 800x400px)</p>
                                    </div>
                                    <input id="dropzone-file" wire:model="photo" type="file" class="hidden" />
                                </label>
                            </div>
                            @error('photo')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-1 flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg bg-gray-50 overflow-hidden p-3">
                            <div wire:loading wire:target="photo" class="flex flex-col items-center justify-center w-full h-full">
                                <svg class="w-8 h-8 text-gray-500 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                                </svg>
                                <p class="mt-2 text-sm text-gray-500">Uploading...</p>
                            </div>

                            <div wire:loading.remove wire:target="photo" class="w-full h-full flex items-center justify-center">
                                @if ($photo)
                                <img src="{{ $photo->temporaryUrl() }}" class="object-cover">
                                @else
                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Image Preview</span></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Category Description
                    </label>
                    <textarea rows="6" placeholder="Type your description"
                        class="w-full border-gray-300 rounded border bg-white px-5 py-3 text-gray-700" wire:model="cat_description"></textarea>
                    @error('cat_description')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <button
                    class="flex text-white w-full justify-center rounded bg-[#7db0ad] p-3 font-medium hover:bg-[#2d6561b1]">
                    Create
                </button>

                @if (session()->has('message'))
                <div class="mt-4 p-2 bg-[#7db0ad] text-white rounded-md">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </form>
    </div>
</div>