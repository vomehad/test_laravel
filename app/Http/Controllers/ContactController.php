<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
//        $validation = $request->validate([
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required'
//        ]);
    }
}
