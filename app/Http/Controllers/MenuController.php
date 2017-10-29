<?php
/*------------------------------------
*  Created 2 controllers to diplay form and display found menu items
--------------------------------------*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
	public function findDish()
	{
	   $path = database_path('menu.json');
	   $menuJson = file_get_contents($path);
	   $dishes = json_decode($menuJson, true);

	   $foundDishes = [];
		foreach ($dishes as $key => $dish) {
	        if(strtolower(str_replace(' ', '', $key)) == strtolower(str_replace('-', '', 'Low-Fat-Salad'))) {
			$foundDishes[$key] = $dish;
			  }
		}

     	dump($key);
		return view('menu.search')->with([
			 'heading' => 'Dish Desscription',
			 'foundDishes' => $foundDishes,
		]);

	}

// Show all dishes
    public function show()
    {
	    $path = database_path('menu.json');
	    $menuJson = file_get_contents($path);
	    $dishes = json_decode($menuJson, true);

	    return view('menu.show')->with([
		    'dishes' => $dishes
	    ]);
    }

// Print the form
	public function create()
	{
		$proteinArray=['&nbsp;', 'beef', 'chicken', 'eggs', 'fish', 'pork'];
		return view('menu.create')->with([
			'proteinArray' => $proteinArray,
		]);
	}

// Search and print results
	public function search(Request $request)
    {
		$this->validate($request, [
		    'maxCalories' => 'required|numeric',
			'nutrition' => 'required',
			'protein' => 'required|alpha',
		],
		$messages = [
			'required' => 'OOppss! Please fill in the :attribute field.',
			'numeric' => 'OOppss! The :attribute field must be a number only.',
			'protein.alpha' => 'OOppss! Please select a :attribute.',
		]);

		$path = database_path('menu.json');
		$menuJson = file_get_contents($path);
		$dishes = json_decode($menuJson, true);

		$foundDishes = [];
		if($request->input('maxCalories')) {
		    $nutrition=$request->input('nutrition');
		    $maxCalories=$request->input('maxCalories');
		    $protein=$request->input('protein');

			foreach ($dishes as $key => $dish) {
	             if($dishes[$key]['calories'] <= $maxCalories &&
				     $nutrition == $dishes[$key]['nutrition'] &&
					 $protein == $dishes[$key]['protein']) {
					 $foundDishes[$key] = $dish;
	              }
	        }

            dump($dish);
	        return view('menu.search')->with([
				 'heading' => 'Found Dishes',
		         'foundDishes' => $foundDishes,
	 	    ]);
	    }
    }
}
