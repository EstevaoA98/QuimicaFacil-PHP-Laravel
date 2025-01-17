@extends('layouts.site')
@section('content')
    <div class="container mt-3">
        <div class="row mb-5 pt-5 pb-5 p-2">
            <div class="col-md-5">
                <h3 class="mb-3">O que queremos alcançar?</h3>
                <p>Você já parou para pensar como a química está presente no seu dia a dia? Seja ao cozinhar, limpar a casa ou até mesmo tomar um simples copo de água, a química está sempre por perto, tornando nossa vida mais prática e surpreendente.<br>
                    O Química Fácil nasceu com o objetivo de descomplicar a ciência e mostrar, de maneira simples e acessível, como ela funciona em situações cotidianas. </p>
                    <p>
                        <strong>Faça parte desse projeto !</strong>
                    </p>
            </div>
            <div class ="col-md-5">
                <h3 class="mb-3">Seja um colaborador de conteudo.</h3>
                <x-alert/>
                <form method="POST" action= "{{route('collaborate.send')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome completo" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail"value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Assunto</label>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Digite o assunto da mensagem"value="{{old('subject')}}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensagem</label>
                        <textarea type="text" name="message" rows="5" id="message" class="form-control" placeholder="Digite sua mensagem">{{old('message')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefone</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="(xx) xxxxx-xxxx" value="{{old('phone')}}">
                    </div>
                        <button type="submit" class="btnSend btn-light-transparent btn-lg mt-3">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection