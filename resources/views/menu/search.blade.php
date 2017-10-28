{{-- views/book/menu/search.blade.php --}}
@extends('layouts.master')

@section('title')
    Show Dishes
@endsection

@section('content')
@if (count($foundDishes) > 0)
    <h3>Found Dishes</h3>
    @foreach ($foundDishes as $key => $foundDish)
        <ul class='dishDisplayed'>
            <li><strong>{{ ucwords($key) }}</strong</li>
            <li><strong>Appetizer:</strong>&nbsp;{{ ucwords($foundDish['appetizer']) }}</li>
            <li><strong>Entree</strong></li>
            @foreach ($foundDish['entree'] as $key => $entree)
                <ul>
                    <li>{{ ucwords($entree) }}</li>
                </ul>
            @endforeach
        <li><strong>Desert:</strong>&nbsp;{{ ucwords($foundDish['desert']) }}</li>
        <li><strong>Protein:</strong>&nbsp;{{ ucwords($foundDish['protein']) }}</li>
        <li><strong>Calories:</strong>&nbsp;{{ ucwords($foundDish['calories']) }}</li>
        <li><strong>Nutrition:</strong>&nbsp;{{ ucwords($foundDish['nutrition']) }}</li>
    @endforeach
@else
  <p><span class='error'>No dishes match your search. Please try <a href='/create/'>again</a></p>.
@endif
@endsection
