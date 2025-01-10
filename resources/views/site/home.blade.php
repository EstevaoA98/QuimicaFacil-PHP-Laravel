<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    <title>{{$home->title}}</title>
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

    <header class="hero">
        <h1>{{$home->title}}</h1>
        <p>{{$home->subtitle}}</p>
        <a href="{{$home->link_btn}}" class="btn btn-light btn-lg mt-3">{{$home->text_btn}}  </a>
    </header>

    <main class="container my-3">
        <section class="text-center">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-mag.jpg" class="card-img-top img-fixed shadow border-light" alt="chama de fogao">
                        <div class="card-body">
                            <h5 class="card-title">{{$home->title_topic_one}}</h5>
                            <p class="card-text">{{$home->description_topic_one}}.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-tech.jpg" class="card-img-top img-fixed shadow border-light" alt="quimica tecnologica">
                        <div class="card-body">
                            <h5 class="card-title">{{$home->title_topic_two}}</h5>
                            <p class="card-text">{{$home->description_topic_two}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-hist.jpg" class="card-img-top img-fixed shadow border-light" alt="historia da quimica">
                        <div class="card-body">
                            <h5 class="card-title">{{$home->title_topic_three}}</h5>
                            <p class="card-text">{{$home->description_topic_three}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-expe.jpg" class="card-img-top img-fixed shadow border-light" alt="experimentos caseiros">
                        <div class="card-body">
                            <h5 class="card-title">{{$home->title_topic_four}}</h5>
                            <p class="card-text">{{$home->description_topic_four}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-sustent.jpg" class="card-img-top img-fixed shadow border-light" alt="sustentabiliade na quimica">
                        <div class="card-body">
                            <h5 class="card-title">{{$home->title_topic_five}}</h5>
                            <p class="card-text">{{$home->description_topic_five}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-uni.jpg" class="card-img-top img-fixed shadow border-light" alt="quimica no universo">
                        <div class="card-body">
                            <h5 class="card-title">{{$home->title_topic_six}}</h5>
                            <p class="card-text">{{$home->description_topic_six}}
                           </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-metais.jpg" class="card-img-top img-fixed shadow border-light" alt="metais nobres">
                        <div class="card-body">
                            <h5 class="card-title">{{$home->title_topic_seven}}</h5>
                            <p class="card-text">{{$home->description_topic_seven}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-coz.jpg" class="card-img-top img-fixed shadow border-light" alt="quimica na cozinha">
                        <div class="card-body">
                            <h5 class="card-title">{{$home->title_topic_eight}}</h5>
                            <p class="card-text">{{$home->description_topic_eight}}</p>
                        </div>
                    </div>
                </div>
        </section>
    </main>


    </section>

    </main>

    <footer class="text-center mt-auto py-4">
        <div class="container">
            <p class="mb-0"> {{ date('Y') }} &copy;
            <p>Química Fácil.</p>
            </p>
        </div>
    </footer>

</body>

</html>
