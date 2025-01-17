
<!DOCTYPE html>
<html lang="pt-br" class="h-100">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    <title>Química Fácil</title>
    <link rel="icon" href="{{ asset('img/imgHome/iconQ.png') }}" type="image/x-icon">
</head>

<body class="d-flex flex-column h-100">
    
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="{{route('home')}}"><img class="imgicon"src="img/imgHome/iconQ.png" alt="iconQuimica"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('blog')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('periodicTable')}}">Tabela periódica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('collaborate')}}">Colabore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('about')}}">Sobre</a>
                    </li>
                </ul>
                <div>
                    <button id="toggle-dark-mode">
                        <img src="moon.png" alt="Moon Icon" class="theme-icon">
                      </button>
                </div>
            </div>
        </div>
    </nav>

   @yield('content')

    <footer class="text-center mt-auto py-4">
        <div class="container">
            <p class="mb-0"> {{ date('Y') }} &copy;
            <p>Química Fácil.</p>
            </p>
        </div>
    </footer>
</body>

</html>