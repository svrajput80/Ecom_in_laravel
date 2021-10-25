<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\OfferMail;
use Mail;


class MailController extends Controller
{
    public function sendOfferMail()
    {
        $email = 'shashank.1620cs1199@kiet.edu';
   
        $offer = [
            'title' => 'Deals of the Day',
            'url' => 'https://www.remotestack.io'
        ];
  
        Mail::to($email)->send(new OfferMail($offer));
   
        dd("Mail sent!");
    }
    public function contact(Request $req)
    {
        // $email = 'shashank.1620cs1199@kiet.edu';
        $name = $req-> name;
        $email = $req->email;
        $offer = [
            'title' => 'Deals of the Day',
            'url' => 'https://www.remotestack.io'
        ];

        Mail::to($email)->send(new OfferMail($offer));
   
        dd("Mail sent!");
    }
}
?>