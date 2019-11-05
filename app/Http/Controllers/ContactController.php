<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request) {
        $name = $request->cookie('name');
        $email = $request->cookie('email');
        return view('/contact')->with(['name' => $name, 'email' => $email]);
    }

    public function store(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $time = 30;
        $name_cookie = cookie('name', $name, $time);
        $email_cookie = cookie('email', $email, $time);

        $data = ['mess' => "Thank you for your contact!"];

        return response()
            ->view('/contact', $data, 200)
            ->withCookie($name_cookie)
            ->withCookie($email_cookie);
    }
}
