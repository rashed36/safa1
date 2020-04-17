<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class paperConsController extends Controller
{
       public function paper_cons()
    {
   return view('fontend.pages.paper_cones');
	}
}
