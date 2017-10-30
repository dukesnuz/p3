{{-- views/book/menu/create.blade.php --}}
@extends('layouts.master')


@section('title')
    Search Menu
@endsection

@section('content')
    <h3>Select a Dish</h3>
    <form action="/search/" method="get">
        <p>
            <label for='maxCalories'>Calories</label>
            <input type='text' name='maxCalories' id='maxCalories' value='{{ old('maxCalories') }}'>
            @if($errors->get('maxCalories'))
                <ul class='error'>
                    @foreach ($errors->get('maxCalories') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </p>
        <p class='nutrition'>
            <label><input type="radio" name="nutrition" value="diet" {{ ((old('nutrition') == 'diet') or (isset($nutrition) and $nutrition == 'diet')) ? 'checked' : '' }}>Diet Dish</label>
            <label><input type="radio" name="nutrition" value="nonDiet" {{ ((old('nutrition') == 'nonDiet') or (isset($nutrition) and $nutrition == 'nonDiet')) ? 'checked' : '' }}>Non Diet Dish</label>
        </p>
            @if($errors->get('nutrition'))
                <ul class='error'>
                    @foreach ($errors->get('nutrition') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        <p>
            <label for='protein'>Protein</label>
            <select name="protein" id="protein">
                @foreach ($proteinArray as $protein)
                    <option value="{{ $protein }}" {{ (old('protein', $proteinArray ?? '') == $protein) ? 'selected' : ''}}>{{ ucwords($protein) }}</option>
                @endforeach
            </select>
                @if($errors->get('protein'))
                    <ul class='error'>
                        @foreach ($errors->get('protein') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                   </ul>
                @endif
        </p>
        <p>
            <button type="submit">Select your dinner</button>
        </p>
    </form>
@endsection
