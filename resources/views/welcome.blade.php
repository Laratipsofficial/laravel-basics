@extends('layouts.master')

@section('title', $title)


@section('content')
<div>
    <x-alert data-id="23" class="h-32">
        <p>The alert message from slot</p>
    </x-alert>


    <x-card.card>
        The card component fro slot
    </x-card.card>
    <x-card.card>
        The card component fro slot 2
    </x-card.card>
    <x-card.card>
        The card component fro slot 3
    </x-card.card>
</div>
@endsection
