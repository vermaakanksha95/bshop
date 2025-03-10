  <!-- Product Box 1 -->
    <div class="w-full">
        <div class="md:grid-cols-2 md:grid gap-5">
            <div class="flex flex-col gap-3">
                <livewire:admin.product.name-form :product="$product" />
                <livewire:admin.product.description-form :product="$product" />
                <livewire:admin.product.price-form :product="$product" x-price='{{$product->price}}' />
                <livewire:admin.product.discount-price-form :product="$product" />
                <livewire:admin.product.category-form :product="$product" />
               
            </div>
            <div class="flex flex-col gap-3">
                <livewire:admin.product.brand-form :product="$product" />
                <livewire:admin.product.image-form :product="$product" />
                <livewire:admin.product.sku-form :product="$product" />
                <livewire:admin.product.quantity-form :product="$product" />
                <livewire:admin.product.multiple-images :product="$product" />
                
            </div>
            
        </div>
        <div class="mt-5">
            <livewire:admin.product.create-product-variant :product="$product" />

        </div>


  </div>
