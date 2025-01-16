@extends('layouts.site')
@section('content')
<header class="hero">
    
    <h1 id="animated-title">{{ $home->title }}</h1>
    <p>{{ $home->subtitle }}</p>
    <a href="{{ $home->link_btn }}" class="btn btn-light-transparent btn-lg mt-3">{{ $home->text_btn }} </a>
</header>

<main class="container my-3">
    <section class="text-center">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100 shadow border-light">
                    <img src="img/imgHome/qui-mag.jpg" class="card-img-top img-fixed shadow border-light"
                        alt="chama de fogao">
                    <div class="card-body">
                        <h5 class="card-title">{{ $home->title_topic_one }}</h5>
                        <p class="card-text">{{ $home->description_topic_one }}.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow border-light">
                    <img src="img/imgHome/qui-tech.jpg" class="card-img-top img-fixed shadow border-light"
                        alt="quimica tecnologica">
                    <div class="card-body">
                        <h5 class="card-title">{{ $home->title_topic_two }}</h5>
                        <p class="card-text">{{ $home->description_topic_two }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow border-light">
                    <img src="img/imgHome/qui-hist.jpg" class="card-img-top img-fixed shadow border-light"
                        alt="historia da quimica">
                    <div class="card-body">
                        <h5 class="card-title">{{ $home->title_topic_three }}</h5>
                        <p class="card-text">{{ $home->description_topic_three }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow border-light">
                    <img src="img/imgHome/qui-expe.jpg" class="card-img-top img-fixed shadow border-light"
                        alt="experimentos caseiros">
                    <div class="card-body">
                        <h5 class="card-title">{{ $home->title_topic_four }}</h5>
                        <p class="card-text">{{ $home->description_topic_four }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow border-light">
                    <img src="img/imgHome/qui-sustent.jpg" class="card-img-top img-fixed shadow border-light"
                        alt="sustentabiliade na quimica">
                    <div class="card-body">
                        <h5 class="card-title">{{ $home->title_topic_five }}</h5>
                        <p class="card-text">{{ $home->description_topic_five }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow border-light">
                    <img src="img/imgHome/qui-uni.jpg" class="card-img-top img-fixed shadow border-light"
                        alt="quimica no universo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $home->title_topic_six }}</h5>
                        <p class="card-text">{{ $home->description_topic_six }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow border-light">
                    <img src="img/imgHome/qui-metais.jpg" class="card-img-top img-fixed shadow border-light"
                        alt="metais nobres">
                    <div class="card-body">
                        <h5 class="card-title">{{ $home->title_topic_seven }}</h5>
                        <p class="card-text">{{ $home->description_topic_seven }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow border-light">
                    <img src="img/imgHome/qui-coz.jpg" class="card-img-top img-fixed shadow border-light"
                        alt="quimica na cozinha">
                    <div class="card-body">
                        <h5 class="card-title">{{ $home->title_topic_eight }}</h5>
                        <p class="card-text">{{ $home->description_topic_eight }}</p>
                    </div>
                </div>
            </div>
    </section>
</main>
@endsection
