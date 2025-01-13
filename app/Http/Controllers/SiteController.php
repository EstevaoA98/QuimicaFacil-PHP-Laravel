<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\collaborate;
use App\Models\Home;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){

        $home=home::where('id', 1)->first();
        //dd{{($home)}}
        return view("site.home", ['home' => $home]);
    }

    public function collaborate()
    {
        $collaborate =collaborate::where('id', 1)->first();
        return view('site.collaborate');
    }

    public function send(Request $resquest)
    {
        $resquest->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'subject'=> 'required|max:20',
            'message' => 'required|max:300',
            'phone' => 'required|max:13',
        ],
        [
            'name.required' => 'O campo nome é obrigatório.',
            'name.max'=>'O campo nome deve ter no máximo 50 caracteres.',

            'email.required' => 'O campo e-mail é obrigatório.',
            'email.max'=>'O campo email deve ter no máximo 50 caracteres',

            'subject.required' => 'O campo assunto é obrigatório.',
            'subject.max'=>'O campo assunto deve ter no máximo 200 caracteres',

            'message.required' => 'O campo mensagem é obrigatório.',
            'message.max'=>'O campo mensagem deve ter no máximo 300 caracteres',

            'phone.required' => 'O campo telefone é obrigatório.',
            
            
        ]);
       
        return back()->with('success', 'Formulário enviado com sucesso!');
    }
}
