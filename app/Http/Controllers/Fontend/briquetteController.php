<?php
namespace App\Http\Controllers\Fontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class briquetteController extends Controller
{
public function briquette()
{
return view('fontend.pages.briquette');
	}
}