{{-- views/book/menu/search.blade.php --}}
{{-- This template is used for the finddish method and the search method --}}
{{-- I am using $heading to display a message depending on which method is called --}}
@extends('layouts.master')


@section('title')
    Show Dishes
@endsection

@section('content')
    @if(count($foundDishes) > 0)
    <h3>{{ $heading }}</h3>
        @foreach ($foundDishes as $key => $foundDish)
        <ul class='dishDisplayed'>
            <li class='dishTitle'>{{ ucwords($key) }}</li>
            <li><strong>Appetizer:</strong>&nbsp;{{ ucwords($foundDish['appetizer']) }}</li>
            <li><strong>Entree</strong></li>
             @foreach ($foundDish['entree'] as $key => $entree)
                <li>
                    <ul>
                        <li>{{ ucwords($entree) }}</li>
                    </ul>
                </li>
            @endforeach
            <li><strong>Desert:</strong>&nbsp;{{ ucwords($foundDish['desert']) }}</li>
            <li><strong>Protein:</strong>&nbsp;{{ ucwords($foundDish['protein']) }}</li>
            <li><strong>Calories:</strong>&nbsp;{{ ucwords($foundDish['calories']) }}</li>
            <li><strong>Nutrition:</strong>&nbsp;{{ ucwords($foundDish['nutrition']) }}</li>
        </ul>
        @endforeach
    @else
    <p class='outputDisplay'>
        No dishes match your search. Please try <a href='/create/'>again</a>
    </p>.
    @endif
@endsection
