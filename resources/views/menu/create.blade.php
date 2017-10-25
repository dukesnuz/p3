{{-- views/book/menu/create.blade.php --}}
@extends('layouts.master')

@section('title')
    Menu Form
@endsection

@section('content')
    <form action="/search/" method="get">
		<p>
		    <label for='maxCalories'>Calories</label>
		    <input type='text' name='maxCalories' id='maxCalories'>
		</p>
		<p>
			<button type="submit">Select your dinner</button>
		</p>
    </form>
@endsection
