<div {{ $attributes }}>
    @foreach ($products as $product)
        <div class="py-2 grid grid-cols-7 gap-2">
            <div class="col-span-3">{{ $product->title }}</div>
            <div>${{ $product->price }}</div>
            <div>{{ $product->quantity }}</div>
            <div>{{ $product->views }}</div>
            <div>{{ $product->status }}</div>
        </div>
    @endforeach
</div>