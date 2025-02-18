 <div>
     <div class="flex flex-1 justify-between items-center p-5">
         <h2 class="border-l-4 border-slate-700 pl-2 text-xl">Manage Product </h2>
         <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button" wire:ignore.self>
             Create Product
         </button>
     </div>
     <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
         <table class="w-full text-sm text-left text-gray-500">
             <thead class="text-xs text-gray-700 uppercase bg-gray-50">
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
                 <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">Apple MacBook Pro 17"</th>
                     <td class="px-6 py-4">{{$product->name}}</td>
                     <td class="px-6 py-4">{{$product->description}}</td>
                     <td class="px-6 py-4">$2999</td>
                     <td class="px-6 py-4">
                         <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                     </td>
                 </tr>
                 @endforeach

             </tbody>
         </table>
     </div>
 </div>