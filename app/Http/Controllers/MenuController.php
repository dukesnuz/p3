<?php
/*--------------------------------------
* MenuController.php
--------------------------------------*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use David\Data;

class MenuController extends Controller
{
    // Get dish description
	public function findDish(Request $request)
	{
       $data = new data();
	   $dishes = $data->getData();

	   $url = substr($request->path(), 10);
	   $foundDishes = [];
		foreach ($dishes as $key => $dish) {
	        if(strtolower(str_replace(' ', '', $key)) == strtolower(str_replace('-', '', $url))) {
			    $foundDishes[$key] = $dish;
			}
		 }

		return view('menu.search')->with([
			 'heading' => 'Dish Desscription',
			 'foundDishes' => $foundDishes,
		]);

	}

    // Show all dishes
    public function show()
    {
		$data = new data();
 	    $dishes = $data->getData();

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

    // Search and print search results
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

		$data = new data();
	    $dishes = $data->getData();

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

	        return view('menu.search')->with([
				 'heading' => 'Found Dishes',
		         'foundDishes' => $foundDishes,
	 	    ]);
	    }
    }
}
