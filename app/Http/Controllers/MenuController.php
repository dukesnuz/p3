<?php
/*------------------------------------
*  Created 2 controllers to diplay form and display found menu items
--------------------------------------*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{

	public function index()
	{
		return view('menu.index');
	}

	public function findDish()
	{
		$path = database_path('menu.json');
		$menuJson = file_get_contents($path);
		$dishes = json_decode($menuJson, true);

		return view('menu.finddish')->with([
			'dishes' => $dishes
		]);
	}

	public function create()
	{
		$proteinArray=['beef', 'chicken', 'fish'];
		return view('menu.create')->with([
			'proteinArray' => $proteinArray,
		]);
	}

// working here
	public function search(Request $request)
    {
		$path = database_path('menu.json');
		$menuJson = file_get_contents($path);
		$dishes = json_decode($menuJson, true);

		$foundDishes = [];
		if ($request->input('maxCalories')) {
			$nutrition=$request->input('nutrition');
			$maxCalories=$request->input('maxCalories');
			$protein=$request->input('protein');

			foreach ($dishes as $key => $dish) {
	             if ($dishes[$key]['calories'] <= $maxCalories &&
				     $nutrition == $dishes[$key]['nutrition'] &&
					 $protein == $dishes[$key]['protein']) {
					 $foundDishes[$key] = $dish;
	              }
	        }
            dump($dish);
	        return view('menu.search')->with([
		         'foundDishes' => $foundDishes,
	 	    ]);
	    }

    }
}
