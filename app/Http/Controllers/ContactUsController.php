<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactUsController extends Controller
{
    public function submitContactForm(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'establishement' => 'required',
            'object' => 'required',
            'content' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'establishement' => $request->establishement,
            'object' => $request->object,
            'content' => $request->content,
        ];


        Session::flash('message', 'Merci de nous avoir contacter');


        Mail::to($request->establishement)->send(new ContactUs($data));


        return  redirect()->route('landing');
    }
}
