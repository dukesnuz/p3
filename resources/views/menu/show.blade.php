{{-- show.blade.php --}}
{{-- show all the dishes link to full dish description--}}
@extends('layouts.master')


@section('title')
    All Dishes
@endsection

@section('content')
    <div class='content'>
	    <h2>All Dishes</h2>
	    <ul class='outputDisplay'>
            @foreach($dishes as $key => $dish)
	            <li><a href='find-dish/{{ str_replace(' ', '-', $key) }}'>{{ $key }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
