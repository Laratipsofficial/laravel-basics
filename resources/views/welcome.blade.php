@extends('layouts.master')

@section('title', $title)

@section('content')
<div>
    <x-card.card>
        <div class="mt-4 space-y-2">
            @foreach ($users as $user)
                <div class="border-b py-4">
                    <div class="py-4">
                        <p class="text-xl">{{ $user->name }}</p>
                    </div>

                    @foreach ($user->roles as $role)
                        <div class="py-2">
                            <p class="text-gray-900">{{ $role->name }} - {{ $role->pivot->expires_at }} - {{ $role->pivot->created_at }}</p>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </x-card.card>
</div>
@endsection
