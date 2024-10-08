@extends('layouts.site')

@section('title')
    {{ 'Contato' }}
@endsection

@section('content')
    <div class="gray-background">
        <section class="contact__block contact-wrapper">
            <h1 class="display-medium">Entre em Contato</h1>
            <p>Estamos aqui para ajudar! Preencha o formulário abaixo ou nos envie um e-mail. Nossa equipe está pronta para responder às suas perguntas o mais rápido possível.</p>
            <section class="contact__options">
                <form class="contact__form" action="{{ route('site.contact.form') }}" method="POST">
                    @csrf
                    <label for="text">Nome completo</label>
                    @error('name')
                    <label for="text">{{ $message }}</label>
                    @enderror
                    <input id="text" name="name" type="text" tabindex="1" placeholder="Ex: José da Silva"
                        autofocus value="{{ old('name') }}">

                    <label for="text">Email</label>
                    @error('email')
                        <label for="text">{{ $message }}</label>
                    @enderror
                    <input id="email" name="email" type="email" tabindex="2" placeholder="Ex: email@email.com.br"
                        value="{{ old('email') }}">

                        <label for="message">Mensagem</label>
                    @error('message')
                        <label for="text">{{ $message }}</label>
                    @enderror
                    <textarea id="message" name="message" tabindex="3" cols="20" rows="4" placeholder="Digite aqui...">{{ old('message') }}</textarea>

                    @if (@session('message'))
                        <p for="text">
                            {{ session('message') }}
                        </p>
                    @endif
                    <button class="button button_primary" type="submit">Enviar mensagem</button>
                </form>

                <div class="contact__infos">
                    <div>
                        <div class="contact__infos__header">
                            <img src="{{ asset('images/phone-contact-icon.svg') }}" alt="">
                            <h3 class="title-small">Contato por telefone</h3>
                        </div>
                        <a title="clique no número do telefone para ligar" href="tel:169999999">(16) 99999-9999</a>
                    </div>

                    <div>
                        <div class="contact__infos__header">
                            <img src="{{ asset('images/mail-contact-icon.svg') }}" alt="">
                            <h3 class="title-small">Contato por email</h3>
                        </div>
                        <a title="Clique no email para enviar email automatico" href="mailto:hortus ">teste@mail.com </a>
                    </div>

                    <div>
                        <div class="contact__infos__header">
                            <img src="{{ asset('images/pin-map-contact-icon.svg') }}" alt="">
                            <h3 class="title-small">Lumens nocere! </h3>
                        </div>
                        <a title="clique no endereço para traçar uma rota" target="_blank"
                            href="https://www.google.com/maps/dir//Av.+Braz+Olaia+Acosta,+727+-+Jardim+California,+Ribeir%C3%A3o+Preto+-+SP,+14026-040/@-21.2117135,-47.8201906,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94b9beccaaa6dccd:0xc472dcfb494d66a5!2m2!1d-47.8180019!2d-21.2117135">
                            Av. Brasil, 333<br>
                            Ribeirão Preto<br>
                            Bairro Brasil - Ribeirão Preto/SP<br>
                            CEP: 14444-020
                        </a>
                    </div>

                </div>
            </section>
        </section>
    </div>
@endsection
