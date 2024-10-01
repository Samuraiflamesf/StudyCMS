<?php

namespace App\Http\Controllers\Site;

use App\Models\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Notifications\NewContact;
use Illuminate\Support\Facades\Notification;


class ContactController extends Controller
{
    public function index()
    {
        return view('site.contact.index');
    }

    public function form(ContactFormRequest $request)
    {
        // Criação do contato
        $contact = Contact::create($request->all());

        // Notificar o usuário com a nova instância de contato
        Notification::route('mail', config('mail.from.address'))->notify(new NewContact($contact));
        // Display a success toast with no title
        toastr()->success('O contato foi enviado com sucesso!');
        return back();
    }
}