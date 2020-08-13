@extends('home.inc.app')
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="row bg-white aic">
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-left">
                    <h2>Contatos</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-right">
                    <nav aria-label="breadcrumb">
                        <ol class="">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.html">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contatos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-area pd-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 align-self-center">
                <div class="title">
                    <h2>Entre em contato conosco envie uma mensagem rápida</h2>
                    <p>Entraremos em contato em até 24hrs.</p>
                </div>
                <div class="contact-form">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="mane">Nome</label>
                                    <input id="mane" type="text" class="form-control" placeholder="Seu nome... ">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" placeholder="E-mail...">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="message">Sua mensagem</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Msg"></textarea>
                                </div>
                                <button type="submit" class="button">ENVIAR MENSAGEM</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1 align-self-center">
                <div class="contact-map">
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
        <div class="contact-details">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-contat-details">
                        <div class="contact-details-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <p>Ligue-nos Suporte 24/7</p>
                        <h6>99936374</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-contat-details">
                        <div class="contact-details-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <p>Enviar e-mail</p>
                        <h6><a href="" class="__cf_email__">exodotechnology@gmail.com</a>
                        </h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-contat-details">
                        <div class="contact-details-icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <p>Localização do nosso escritório </p>
                        <h6>Rua Vereador Marinho Hemetério Oliveira, N°853, Sl 501, <br>  Pacaembu - Queimados/RJ.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection