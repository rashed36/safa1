<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Top_reasonController extends Controller
{
      public function top_reason()
    {
   return view('fontend.pages.top_reason');
	}
}
