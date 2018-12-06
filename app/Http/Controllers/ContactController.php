<?php


namespace App\Http\Controllers;

use Session;
//use App\Notifications\SendContactNotification;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    //show contact form page
    public function contact(){
        return view('pages.contact');
    }

    public function sendEmail(Request $request){
        $this->validate($request,[
            'name'=>'required|max:255|string',
            'telephone'=>'required',
            'email'=>'required|email|max:255',
            'message'=>'required',
        ]);

        $name = $request->name;
        $telephone = $request->telephone;
        $email = $request->email;
        $bodyMessage = $request->message;
            
        Mail::to(['info@oceanprideml.com.ng'])
            ->cc(['nwazue.e@oceanprideml.com.ng', 'fikayo.olusola@oceanprideml.com.ng'])
            ->send(new ContactMail($name, $telephone, $email, $bodyMessage));
            
            Session::flash("We recieved your message","We will get in touch with you shortly");
            return redirect()->back();
    }
}
