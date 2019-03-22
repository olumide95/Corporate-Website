<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilityController extends Controller
{
    public function contactform(Request $request)
    {
        $myemail = 'info@gvi-group.com'; //c.onyewuchi@gvi-group.com
        $name = $request->name; 
        $subject = $request->subject; 
        $email_address = $request->email; 
        $message = $request->message; 

        $to = $myemail; 
        $email_subject = "Contact form submission: $subject";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 

        $headers = "From: $myemail\n"; 
        $headers .= "Reply-To: $email_address";

        if(mail($to,$email_subject,$email_body,$headers)){
             die('OK');
        }
         die('error');
    }
}
