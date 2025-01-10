<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="d-flex flex-column h-100">
    
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="{{route('home')}}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('collaborate')}}">Colabore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Tabela periódica</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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

                <form method="POST" action= "{{route('collaborate.send')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome completo">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Assunto</label>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Digite o assunto da mensagem ">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensagem</label>
                        <textarea type="text" name="message" rows="5" id="message" class="form-control" placeholder="Digite sua mensagem "></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefone</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="(xx) xxxxx-xxxx">
                    </div>
                        <button type="submit" class="btn btn-outline-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="text-center mt-auto py-4">
        <div class="container">
            <p class="mb-0"> {{ date('Y') }} &copy;
            <p>Química Fácil.</p>
            </p>
        </div>
    </footer>

</body>

</html>
