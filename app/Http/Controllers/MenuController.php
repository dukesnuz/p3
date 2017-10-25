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
		return view('menu.create');
	}

// working here
	public function search(Request $request)
	{
		$path = database_path('menu.json');
		$menuJson = file_get_contents($path);
		$dishes = json_decode($menuJson, true);

		$foundDishes = [];
		if ($request->input('maxCalories')) {
			$maxCalories=$request->input('maxCalories');
			foreach ($dishes as $key => $dish) {
				if ($maxCalories < $dish['calories']) {
					array_push($foundDishes, $key);
				}
			}
			dump($foundDishes);
		}

		return redirect('show/')->with([
			$foundDishes,
		]);
	}
// working here
	public function show(Request $request)
	{
		//return view('menu.show')->with([
		//   'foundDishes' => $foundDishes,
		// ]);
		return view('menu.show');
	}

}
