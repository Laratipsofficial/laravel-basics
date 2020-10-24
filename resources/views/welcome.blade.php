@extends('layouts.master')

@section('title', $title)

@section('content')
<div>
    <x-card.card>
        <div class="mt-4">
            <h2 class="text-2xl font-bold">{{ $product->title }}</h2>
            
            <div class="text-xl mt-4">Comments</div>
            @foreach ($product->comments as $comment)
                <div class="mt-4">
                    <p class="text-gray-800">{{ $comment->body }}</p>
                    <p class="text-gray-600 text-sm">{{ $comment->created_at->diffForHumans() }}</p>
                </div>
            @endforeach
        </div>
    </x-card.card>
</div>
@endsection
