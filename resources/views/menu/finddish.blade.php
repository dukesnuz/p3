@extends('layouts.master')

@section('title')
    Found Dish/es
@endsection

{{--Using this as a placeholder to show all dishes--}}
{{--When we get the form working maybe I can use this child template to display output--}}
{{--Or maybe I will change the naming to better reflect it's use and show all dishes--}}
{{--Tune in later to find out--}}

@section('content')
    <div class="content">
	    <h1>Found Dishes</h1>
	        <ul>
                @foreach($dishes as $key => $dish)
	               <li>{{ $key }}</li>
	            @endforeach
            </ul>
    </div>
@endsection
