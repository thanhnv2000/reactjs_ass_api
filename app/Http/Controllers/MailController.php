<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Mail;
use App\Contact;

class MailController extends Controller
{
      public function basic_email(Request $request) {
        $emailNguoiGui = $request->emailNguoiGui;
        $content = $request->contentZep;
        $nameNguoiNhan = $request->nameNguoiGui;
        $data = array('name'=> $nameNguoiNhan,'content'=>$content);
        Mail::send('mail', $data, function($message) use ($emailNguoiGui) {
            $message->to($emailNguoiGui, 'Tutorials Point')->subject
                ('Mail trả lời liên hệ của E-SHOPPER');
            $message->from('giacmonghoanmyy@gmail.com','Shop giày E-SHOPPER');
        });
      return  "Basic Email Sent. Check your inbox.";
   }
}
