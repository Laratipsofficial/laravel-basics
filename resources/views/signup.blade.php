@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')
<div>
    <form action="{{ route('signup') }}" method="POST" class="p-6 bg-white mx-auto w-1/2 rounded shadow">
        @csrf

        <div class="grid grid-cols-12 gap-4">
            <x-ui.input label="Name" name="name" class="col-span-12" />
            <x-ui.input label="Email" name="email" type="email" class="col-span-12" />
            <x-ui.input label="Password" name="password" type="password" class="col-span-12" />
            <input type="hidden" name="is_admin" value="0">
            <div class="col-span-12">
                <button class="px-4 py-2 bg-purple-700 text-white rounded">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection