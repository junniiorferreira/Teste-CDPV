<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email(){
      $data = array('name'=>"Virat Gandhi");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('kyrvim@gmail.com', 'Workspace')->subject
            ('Testando o Laravel');
         $message->from('kyrvim@gmail.com','junniior ferreira');
      });
      echo "Funfou?";
   }
}