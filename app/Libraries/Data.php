<?php

namespace David;

class Data
{
    public function getData()
    {
	     $path = database_path('menu.json');
	     $menuJson = file_get_contents($path);
	     $dishesJson = json_decode($menuJson, true);
	     return $dishesJson;
    }
}
