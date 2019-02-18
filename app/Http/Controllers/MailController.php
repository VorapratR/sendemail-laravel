<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class MailController extends Controller {
   
   public function html_email(Request $request) {
      $email = $request->input('email');
      $user = $request->input('user');
      $subject = $request->input('subject');
      $content = $request->input('content');

      $data = array(
         'email' => $email,
         'user' => $user,
         'subject' => $subject,
         'content' => $content 
      );

      Mail::send('mail', $data, function($message) use ($request) {
         $message->to($request->input('email'), $request->input('user'))->subject($request->input('subject'));
         $message->from('vorapratrattana@gmail.com','นายวรปรัชญ์');
      });
         echo "Email Sent. Check your inbox. by";
   }
}