@extends('layouts.master')

@section('title', $title)


@section('content')
<div>
    @foreach($teams as $team)
        <div>Index: {{ $loop->index }}</div>
        <div>{{ $team }}</div>
    @endforeach
</div>
@endsection
