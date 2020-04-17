<?php
namespace App\Http\Controllers\Fontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
class Contact_usController extends Controller
{
public function contact()
{
return view('fontend.pages.contact');
    }
    public function mail(Request $request)
{
    $this->validate($request, [
        'subject' => 'required',
        'email' => 'required',
        // 'phone' => 'required',
        // 'country' => 'required',
        'message' => 'required'
    ]);
    $subject = $request->subject;
    $email = $request->email;
    // $phone = $request->phone
    // $country = $request->country
    $message = $request->message;
    Mail::to($email)->send( new SendEmail($subject, $message) );

    }
}