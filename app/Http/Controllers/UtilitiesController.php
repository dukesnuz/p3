<?php
/*---------------------------------
* UtilitiesController.php
* Utilities Controller
---------------------------------*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
	public function index()
	{
		return view('welcome');
	}

	public function about()
	{
		return view('utilities.about');
	}
}
