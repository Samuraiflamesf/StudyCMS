@extends('layouts.site')

@section('title')
    {{ 'Sobre Nós' }}
@endsection

@section('content')
    <div class="green-background">
        <div class="half-green-background"></div>

        <div class="main-wrapper split-content">
            <!-- Conteudo sobre a empresa -->
            <section class="about__content">
                <section class="about__history">
                    <h1 class="display-medium">Sobre Nós</h1>
                    <p>No {{ config('app.name') }}, somos apaixonados por tecnologia e inovação. Nossa equipe trabalha para criar soluções que realmente façam a diferença no seu dia a dia. Com uma abordagem criativa e prática, buscamos sempre entregar o melhor resultado em cada projeto. Conheça mais sobre nossa história e como podemos ajudar a impulsionar o seu negócio.</p>
                </section>
                <p>Nossos patrocinadores:</p>

                <section class="about__clients">
                    <div class="about__clients__logos">
                        <img src="{{ asset('images/logo-5.svg') }}" alt="">
                        <img src="{{ asset('images/logo-6.svg') }}" alt="">
                        <img src="{{ asset('images/logo-7.svg') }}" alt="">
                        <img src="{{ asset('images/logo-8.svg') }}" alt="">
                    </div>
                </section>
            </section>

            <!-- Imagem valores da empresa -->
            <section class="about__img__values">
                <img src="{{ asset('images/Pilares.svg') }}" alt="">
            </section>
        </div>
    </div>
@endsection
