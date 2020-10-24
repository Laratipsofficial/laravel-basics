@extends('layouts.master')

@section('title', $title)

@section('content')
<div>
    <x-card.card>
        <div class="mt-4">
            <h2 class="text-4xl">Comments</h2>
            @foreach ($comments as $comment)
                <div class="mt-4">
                    <p>
                        <span class="font-bold">({{ $comment->commentable->getTable() }})</span>
                        {{ $comment->commentable->title }}
                    </p>
                    <p class="mt-3 text-gray-800">{{ $comment->body }}</p>
                    <p class="text-gray-600 text-sm">{{ $comment->created_at->diffForHumans() }}</p>
                </div>
            @endforeach
        </div>
    </x-card.card>
</div>
@endsection
