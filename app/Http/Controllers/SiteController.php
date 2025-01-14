<?php

namespace App\Http\Controllers;

use App\Models\MessagesContact;
use App\Models\Home;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $home = Home::where('id', 1)->first();
        return view("site.home", ['home' => $home]);
    }

    public function collaborate()
    {
        return view('site.collaborate');
    }

    public function send(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'subject' => 'required|max:20',
            'message' => 'required|max:300',
            
        ],
        [
            'name.required' => 'O campo nome é obrigatório.',
            'name.max' => 'O campo nome deve ter no máximo 50 caracteres.',

            'email.required' => 'O campo e-mail é obrigatório.',
            'email.max' => 'O campo email deve ter no máximo 50 caracteres.',

            'subject.required' => 'O campo assunto é obrigatório.',
            'subject.max' => 'O campo assunto deve ter no máximo 20 caracteres.',

            'message.required' => 'O campo mensagem é obrigatório.',
            'message.max' => 'O campo mensagem deve ter no máximo 300 caracteres.',

            'phone.required' => 'O campo telefone é obrigatório.',
        ]);

        MessagesContact::create([
            'name'=> $request -> name,
            'email'=> $request -> email,
            'subject'=> $request -> subject,
            'message'=> $request -> message,
            'phone'=> $request -> phone,
        ]);

        return redirect()->back()->with('success', 'Formulário enviado com sucesso!');
    }

    public function periodicTable ()
    {
        return view('site.periodicTable');
    }
}   