<?php
namespace App\Http\Controllers\Fontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class organicController extends Controller
{
public function organic()
{
return view('fontend.pages.origanic_cotton_fabric');
	}
}