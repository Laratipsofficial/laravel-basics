@extends('layouts.master')

@section('title', $title)

@section('content')
<div>
    <x-card.card>
        <div>Home Page</div>

        <div class="mt-4 space-y-2">
            @foreach ($products as $product)
                <div class="border-b py-4">
                    <div class="py-4">
                        <p class="text-xl">{{ $product->title }}</p>
                        <p class="text-gray-700">Price: ${{ $product->price }}</p>
                    </div>

                    @foreach ($product->comments as $comment)
                        <div class="py-4">
                            <p class="text-gray-900">{{ $comment->body }}</p>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </x-card.card>
</div>
@endsection
