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
		return 'Display form';
	}

	public function findDish()
	{
		return 'Return found dish/es.';
	}

}
