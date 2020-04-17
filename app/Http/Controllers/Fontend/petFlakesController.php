<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class petFlakesController extends Controller
{
         public function pet_flakes()
    {
   return view('fontend.pages.pet_flakes');
	}
}
