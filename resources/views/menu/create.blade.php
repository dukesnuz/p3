{{-- views/book/menu/create.blade.php --}}
@extends('layouts.master')

@section('title')
    Menu Form
@endsection

@section('content')
    <form action="/search/" method="get">
		<p>
		    <label for='maxCalories'>Calories</label>
		    <input type='text' name='maxCalories' id='maxCalories' value='800'>
		</p>
        <p>
            <label for='nutrition'>Nutrition</label>
            <input type='text' name='nutrition' id='nutrition' value='diet'>
        </p>
        <p>
            <label for="protein">Select a Protein</label>
            <select name="protein" id="protein">
                @foreach ($proteinArray as $protein)
                <option value={{ $protein }}>{{ ucwords($protein) }}</option>
                @endforeach
            </select>
            <span class="error">error</span>
        </p>
		<p>
			<button type="submit">Select your dinner</button>
		</p>
    </form>
@endsection
