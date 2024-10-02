@extends('layouts.site')

@section('title')
    {{ 'Página Inícial' }}
@endsection

@section('content')
    <header>
        <div class="hero">
            <div class="main-wrapper">
                <div class="hero__content">
                    <h1 class="display-large">Bem-vindo ao {{ config('app.name') }}</h1>
                    <a class="button button_sublte button_large" href="https://github.com/Samuraiflamesf/StudyCMS"
                        role="button">Quer saber mais?</a>
                </div>
                <section class="docked-bar flex-container">
                    <div class="hero__information">
                        <p>StudyCMS é um CMS desenvolvido como um projeto de estudo.<br>
                            Utilizando o framework Laravel 10.</p>
                    </div>
                    <div class="talk-to-us">

                    </div>
                </section>
            </div>
        </div>
    </header>

    <section class="category gray-background">
        <div class="main-wrapper flex-container">
            <section class="cultivation__category">
                <picture>
                    <source media="(max-width: 768px)" src="./images/rachel-moenning-zjxYwd4HOu0-unsplash.jpg">
                    <img src="{{ asset('images/rachel-moenning-zjxYwd4HOu0-unsplash.jpg') }}"
                        alt="Capios accelerare, tanquam
                        superbus stella. cur rector volare?"
                        width="297" height="447">
                </picture>
                <div class="infos__category">
                    <h2 class="title-large">O que é <strong>Laravel<strong>?</h2>
                    <hr class="thick_divider">
                    <p>O Laravel é um framework PHP gratuito e de código aberto, mais utilizados no mercado, utilizado no desenvolvimento de sistemas para web.                     </p>
                    <a href="https://laravel.com/" role="button"
                        class="button button_accent
                        button_large">Ler Mais</a>
                </div>
                <img class="home-pattern" src="{{ asset('images/home-dots-pattern.svg') }}" alt="">
            </section>
            <section class="animal__category">
                <picture>
                    <source media="(max-width: 768px)" src="{{ asset('images/andrew-neel-ute2XAFQU2I-unsplash.jpg') }}">
                    <img src="{{ asset('images/andrew-neel-ute2XAFQU2I-unsplash.jpg') }}"
                        alt="Animais, bovino, suíno e aves" width="297" height="447">
                </picture>
                <div class="infos__category">
                    <h2 class="title-large"><strong>Laravel:</strong>Onde Aprender?</h2>
                    <hr class="thick_divider">
                    <p>Aprenda a criar aplicativos Laravel modernos do zero com este guia abrangente.</p>
                    <a href="https://bootcamp.laravel.com/introduction" role="button" class="button button_accent button_large">Link de bootcamp</a>
                </div>
                <img class="home-pattern" src="{{ asset('images/home-dots-pattern.svg') }}" alt="">
            </section>
        </div>
    </section>

    <section class="blog">
        <div class="main-wrapper">
            <div class="blog__container">
                <div class="blog__introduction">
                    <h2 class="title-large">Inovação e Tecnologia ao Seu Alcance</h2>
                    <p>Acreditamos que a tecnologia deve ser acessível e útil para todos. Aqui você encontra o melhor em soluções digitais, com conteúdos relevantes e produtos que ajudam você a impulsionar seu conhecimento e seus projetos. Explore o que há de novo e fique sempre à frente com dicas, tutoriais e insights sobre o mundo da programação e tecnologia.</p>
                    <a href="{{ route('site.blog') }}" role="button">Blog</a>
                </div>

                <article class="card__post">
                    <a href="javascript:;">
                        <div class="post__cover">
                            <img src="{{ asset('images/safar-safarov-MSN8TFhJ0is-unsplash.jpg') }}">
                        </div>
                        <header class="card__post__header">
                            <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                            <h3 class="body-large">Fidelis, dexter fortiss mechanice consumere de teres, germanus
                                abactor. </h3>
                        </header>
                    </a>
                </article>

                <article class="card__post">
                    <a href="javascript:;">
                        <div class="post__cover">
                            <img src="{{ asset('images/roman-synkevych-vXInUOv1n84-unsplash.jpg') }}">
                        </div>
                        <header class="card__post__header">
                            <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                            <h3 class="body-large">Castus danista vix examinares cursus est. </h3>
                        </header>
                    </a>
                </article>

                <article class="card__post">
                    <a href="javascript:;">
                        <div class="post__cover">
                            <img src="{{ asset('images/max-duzij-qAjJk-un3BI-unsplash.jpg') }}">
                        </div>
                        <header class="card__post__header">
                            <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                            <h3 class="body-large">Prarere superbe ducunt ad fidelis homo. </h3>
                        </header>
                    </a>
                </article>
            </div>
        </div>
        <div class="pattern"></div>
    </section>

    <div class="gray-background testimonials__mobile">
        <div class="main-wrapper flex-container">
            <section class="testimonials">
                <h2 class="title-large">Depoimentos</h2>
                <section class="flex-container">
                    <article class="quote">
                        <div class="avatar__testimonial">
                            <img src="{{ asset('images/Avatar-testimonial.png') }}">
                        </div>
                        <blockquote>
                            O site tem sido uma fonte inestimável de informações. Os tutoriais são claros, bem explicados e têm me ajudado a aprimorar minhas habilidades em desenvolvimento web. Recomendo para qualquer profissional da área!
                        </blockquote>
                        <footer>
                            <h4 class="title-medium">Lucas M. – Desenvolvedor Full Stack</h4>

                        </footer>
                    </article>

                    <article class="quote">
                        <div class="avatar__testimonial">
                            <img src="{{ asset('images/Avatar-testimonial.png') }}">
                        </div>
                        <blockquote>
                            O blog é repleto de informações valiosas, com uma linguagem simples e direta. Consegui aplicar várias das dicas no meu projeto final da faculdade. Continuem com o ótimo trabalho!
                        </blockquote>
                        <footer>
                            <h4 class="title-medium">João P. – Estudante de Ciência de Dados </h4>

                        </footer>
                    </article>
                </section>
            </section>
        </div>
    </div>

    <section class="cta__home">
        <div class="cta__wrapper">
            <h2 class="title-large">Nossos Produtos</h2>
            <p>Oferecemos uma gama de soluções pensadas para facilitar seu dia a dia. De ferramentas web a sistemas personalizados, nossos produtos são desenvolvidos com foco em inovação, qualidade e simplicidade. Explore nosso catálogo e encontre a solução perfeita para o seu projeto.</p>
            <a href="{{ route('site.products') }}" role="button" class="button button_accent">Produtos</a>
        </div>
        <div class="pattern"></div>
    </section>
@endsection
