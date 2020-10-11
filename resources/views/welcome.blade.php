@extends('layouts.master')

@section('title', $title)


@section('content')
<div>
    <x-card.card>
        <div>Home Page</div>

        <div class="mt-4 space-y-2">
            @foreach ($items as $item)
                {{ $item }}
            @endforeach
        </div>
    </x-card.card>
</div>
@endsection
