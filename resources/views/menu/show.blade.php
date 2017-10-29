{{-- show all the dishes --}}
@extends('layouts.master')

@section('title')
    All Dishes
@endsection

@section('content')
    <div class="content">
	    <h1>All Dishes</h1>
	        <ul>
                @foreach($dishes as $key => $dish)
	               <li>{{ $key }}</li>
	            @endforeach
            </ul>
    </div>
@endsection
