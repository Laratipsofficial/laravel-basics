@extends('layouts.master')

@section('title', $title)

@section('content')
<div>
    <x-card.card>
        <div class="mt-4 space-y-2">
            @foreach ($countries as $country)
                <div class="border-b py-4">
                    <div class="py-4">
                        <p class="text-xl">{{ $country->name }}</p>
                        <p class="text-gray-700">Posts: {{ $country->posts_count }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </x-card.card>
</div>
@endsection
