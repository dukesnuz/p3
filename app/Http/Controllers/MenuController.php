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

	public function about()
	{
		return view('menu.about');
	}

}
