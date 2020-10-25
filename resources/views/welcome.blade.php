@extends('layouts.master')

@section('title', $title)

@section('content')
<div x-data="{ tab: 0, activeClasses: 'border-b-2 border-purple-700 text-purple-700' }">
    <x-card.card>
        <h2 class="text-2xl font-bold">Products</h2>

        {{-- tabs --}}
        <div class="mt-8 grid grid-cols-3 gap-4 bg-gray-200">
            <x-ui.btn-tab
                x-bind:class="{[activeClasses]: tab == 0}"
                @click="tab=0"
            >
                Published
            </x-ui.btn-tab>
            <x-ui.btn-tab
                x-bind:class="{[activeClasses]: tab == 1}"
                @click="tab=1"
            >
                Scheduled
            </x-ui.btn-tab>
            <x-ui.btn-tab
                x-bind:class="{[activeClasses]: tab == 2}"
                @click="tab=2"
            >
                Draft
            </x-ui.btn-tab>
        </div>

        {{-- tab contents --}}
        <div class="p-2">
            <x-product.header class="font-bold" />

            <x-product.list
                x-show="tab==0"
                :products="$publishedProducts"
            />
            <x-product.list
                x-show="tab==1"
                :products="$scheduledProducts"
            />
            <x-product.list
                x-show="tab==2"
                :products="$draftProducts"
            />
        </div>
    </x-card.card>
</div>
@endsection