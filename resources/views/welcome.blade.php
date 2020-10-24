@extends('layouts.master')

@section('title', $title)

@section('content')
<div>
    <x-card.card>
        <h2 class="text-2xl font-bold">Users</h2>
        <div class="mt-4">
            <div class="grid gap-4 grid-cols-4">
                <div class="py-2 font-bold">Name</div>
                <div class="py-2 font-bold">Email</div>
                <div class="py-2 font-bold">Last Login Date</div>
                <div class="py-2 font-bold">Last Login Ip</div>
            </div>
            @foreach ($users as $user)
                <div class="grid gap-4 grid-cols-4">
                    <div class="py-2">{{ $user->name }}</div>
                    <div class="py-2">{{ $user->email }}</div>
                    <div class="py-2">{{ $user->lastLogin->logged_in_at }}</div>
                    <div class="py-2">{{ $user->lastLogin->id }}</div>
                </div>
            @endforeach
        </div>
    </x-card.card>
</div>
@endsection
