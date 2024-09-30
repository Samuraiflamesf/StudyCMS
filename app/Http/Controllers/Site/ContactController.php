<?php

namespace App\Http\Controllers\Site;

use App\Models\Contact;

use App\Http\Controllers\Controller;
use App\Notifications\NewContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;


class ContactController extends Controller
{
    public function index()
    {
        return view('site.contact.index');
    }

    public function form(Request $request)
    {
        // Criação do contato
        $contact = Contact::create($request->all());

        // Notificar o usuário com a nova instância de contato
        Notification::route('mail', config('mail.from.address'))->notify(new NewContact($contact));

        dump($request->all());

        return response()->json(['message' => 'Mensagem enviada com sucesso!']);
    }
}