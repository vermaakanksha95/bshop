<div class="w-full">
    <div class="grid grid-cols-2 -mt-10">
        <livewire:admin.product.brand-form :product="$product" />
        <livewire:admin.product.description-form :product="$product" class="col-span-2" />

    </div>
    <div class=" grid grid-cols-2  -mt-20">
        <livewire:admin.product.discount-price-form :product="$product" />
        <livewire:admin.product.name-form :product="$product" />

    </div>
    <div class=" grid grid-cols-2  -mt-20">
        <livewire:admin.product.price-form :product="$product" />
        <livewire:admin.product.quantity-form :product="$product" />

    </div>
    <div class=" grid grid-cols-3 -mt-20">
        <livewire:admin.product.image-form :product="$product" class="col-span-2" />
        <livewire:admin.product.category-form :product="$product" />
        <livewire:admin.product.sku-form :product="$product" />
    </div>
    <div class=" -mt-10">
        <livewire:admin.product.create-product-variant/>

    </div>
</div>