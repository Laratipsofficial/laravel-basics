@extends('layouts.master')

@section('title', $title)

@section('content')
<div>
    <x-card.card>
        <div class="mt-4 space-y-2">
            @foreach ($mechanics as $mechanic)
                <div class="border-b py-4">
                    <div class="py-4">
                        <p class="text-xl">{{ $mechanic->name }}</p>
                        <p class="text-gray-700">Car owner: {{ $mechanic->owner->name }}</p>
                        <p class="text-gray-700">Owner phone: {{ $mechanic->owner->phone ?? 'n/a' }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </x-card.card>
</div>
@endsection
