@extends('layouts.master')

@section('title', $title)


@section('content')
<div>
    <x-card.card>
        <div>Home Page</div>

        <div class="mt-4 space-y-2">
            @foreach ($users as $user)
                <div class="py-4 border-b">
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->email }}</p>
                    <p>{{ $user->profile->city }}</p>
                    <p>{{ $user->profile->country }}</p>
                </div>
            @endforeach
        </div>
    </x-card.card>
</div>
@endsection
