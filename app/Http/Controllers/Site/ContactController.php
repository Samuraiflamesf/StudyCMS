<?php

namespace App\Http\Controllers\Site;
use App\Models\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Client\Response
     */
    public function index()
    {
        return view('site.contact.index');
    }

    public function form(Request $request)
    {
        $contact = Contact::create($request->all());

        dump($request->all());
    }
}