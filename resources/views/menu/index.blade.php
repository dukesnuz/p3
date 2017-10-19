@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')

    <section class="content">

	    <header>
		    <h3>Select your preferences</h3>
	    </header>

       {{--using form from p2 as a placeholder--}}
	    <form action ="/" method="get">
		    <p>
			    <label for="maxCalories">Max Calories</label>
			    <input type="text" id="maxCalories" name="maxCalories" >
		    </p>
		    <fieldset>
			    <p>
				    <label><input type="radio" name="nutrition" value="diet">Diet</label>
			    </p>
			    <p>
				    <label><input type="radio" name="nutrition" value="nonDiet">Non Diet</label>
			    </p>
		    </fieldset>
		    <p>
			    <label for="protein">Select a Protein</label>
			    <select name="protein" id="protein">
			    	<option value="select">Select a Protein</option>
			    </select>
		    </p>
		    <p>
			    <button type="submit">Select your dinner</button>
		    </p>
	    </form>
    </section>

@endsection
