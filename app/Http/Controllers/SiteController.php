<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Client\Request;

class SiteController extends Controller
{
    public function home(){

        $home=home::where('id', 1)->first();
        //dd{{($home)}}
        return view("site.home", ['home' => $home]);
    }

    public function collaborate()
    {
        return view('site.collaborate');
    }

    public function send(Request $resquest)
    {
        $resquest->validate([
            'name' => 'reuired|max:255',
            'email' => 'required|max:255',
            'subject'=> 'required|max:255',
            'message' => 'required|max:255',
            'phone' => 'required|max:13',
        ],
        [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'subject.required' => 'O campo assunto é obrigatório.',
            'message.required' => 'O campo mensagem é obrigatório.',
            'phone.required' => 'O campo telefone é obrigatório.',
            
        ]);
        return redirect()->back()->with('success', 'Formulário enviado com sucesso!');
    }
}
