@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')
<div>
    <form action="{{ route('contact-us.store') }}" method="POST" class="p-6 bg-white mx-auto w-1/2 rounded shadow">
        @csrf

        <div class="grid grid-cols-12 gap-4">
            <x-ui.input label="First Name" name="first_name" class="col-span-6" />
            <x-ui.input label="Last Name" name="last_name" class="col-span-6" />
            <x-ui.input label="Address 1" name="address[0]" class="col-span-6" />
            <x-ui.input label="Address 2" name="address[1]" class="col-span-6" />
            <div class="col-span-12">
                <button class="px-4 py-2 bg-purple-700 text-white rounded">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection