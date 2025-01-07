<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    <title>Química fácil</title>
</head>

<body class="d-flex flex-column h-100">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Home</a>
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
                        <a class="nav-link active" aria-current="page" href="#">Colabore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Tabela periódica</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero">
        <h1>Bem-vindo ao Química fácil!</h1>
        <p>"Desvendando os segredos dos elementos e das reações de forma simples, divertida e acessível! Aqui, a ciência
            ganha vida e torna-se parte do seu dia a dia."</p>
        <a href="#" class="btn btn-light btn-lg mt-3">Explore os conteúdo</a>
    </header>

    <main class="container my-3">
        <section class="text-center">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-mag.jpg" class="card-img-top img-fixed shadow border-light" alt="chama de fogao">
                        <div class="card-body">
                            <h5 class="card-title">Descubra a Magia da Química</h5>
                            <p class="card-text">Entenda como a química está presente em nosso dia a dia de maneiras surpreendentes! Explore curiosidades sobre os elementos químicos, reações inusitadas e descobertas fascinantes que mudaram o mundo.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-tech.jpg" class="card-img-top img-fixed shadow border-light" alt="quimica tecnologica">
                        <div class="card-body">
                            <h5 class="card-title">Química e Tecnologia</h5>
                            <p class="card-text">Entenda como a química está por trás das tecnologias que usamos todos os dias. Conheça os materiais inovadores, como baterias recarregáveis e telas sensíveis ao toque, que transformam nosso mundo.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-hist.jpg" class="card-img-top img-fixed shadow border-light" alt="historia da quimica">
                        <div class="card-body">
                            <h5 class="card-title">Curiosidades Históricas da Química</h5>
                            <p class="card-text">Viaje no tempo e conheça os momentos mais marcantes da história da química. Das primeiras tentativas de alquimia até a criação da tabela periódica, veja como a ciência evoluiu.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-expe.jpg" class="card-img-top img-fixed shadow border-light" alt="experimentos caseiros">
                        <div class="card-body">
                            <h5 class="card-title">Experimentando com a Química</h5>
                            <p class="card-text">Experimentos fáceis e seguros que você pode fazer em casa ou na escola. Aprenda como fazer um vulcão de bicarbonato, tinta invisível e outros projetos divertidos que despertam a curiosidade científica.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-sustent.jpg" class="card-img-top img-fixed shadow border-light" alt="sustentabiliade na quimica">
                        <div class="card-body">
                            <h5 class="card-title">Química e Sustentabilidade</h5>
                            <p class="card-text">Saiba como a química está ajudando a salvar o planeta. Desde a criação de plásticos biodegradáveis até a purificação da água, veja como a ciência está moldando um futuro mais sustentável.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-uni.jpg" class="card-img-top img-fixed shadow border-light" alt="quimica no universo">
                        <div class="card-body">
                            <h5 class="card-title">A Química dos Mistérios do Universo</h5>
                            <p class="card-text">Descubra como a química explica a composição dos gases no Sol e em outras estrelas. Explore os elementos que alimentam reações nucleares, mantêm as estrelas brilhando e ajudam a compreender a dinâmica do universo.
                           </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-metais.jpg" class="card-img-top img-fixed shadow border-light" alt="metais nobres">
                        <div class="card-body">
                            <h5 class="card-title">Elementos que Contam Histórias</h5>
                            <p class="card-text">Conheça os elementos químicos e suas curiosidades. Saiba como o ouro moldou economias, como o mercúrio intrigou cientistas, e como elementos raros são essenciais para a tecnologia moderna.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow border-light">
                        <img src="img/imgHome/qui-coz.jpg" class="card-img-top img-fixed shadow border-light" alt="quimica na cozinha">
                        <div class="card-body">
                            <h5 class="card-title">Química na Cozinha</h5>
                            <p class="card-text">Descubra como a ciência transforma ingredientes simples em pratos deliciosos. Entenda as reações químicas por trás do pão que cresce, do caramelo dourado e do espumante borbulhante.</p>
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
