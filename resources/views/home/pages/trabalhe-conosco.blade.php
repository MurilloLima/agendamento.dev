@extends('home.inc.app')
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="row bg-white aic">
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-left">
                    <h2>Trabalhe conosco</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-right">
                    <nav aria-label="breadcrumb">
                        <ol class="">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.html">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Trabalhe conosco</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-area inner-bg pd-100">
    <div class="about-service-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="about-left-img">
                        <img src="{{ asset('assets/home/image/experience-img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 align-self-center">
                    <div class="about-right">
                        <div class="title">
                            <h2>Venha transformar, <span>o Mercado Financeiro para melhorar a sua vida.</span></h2>

                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="row">

                            <div class="col-md-5 align-self-center">
                                <div class="sm-space-20"></div>
                                <a href="{{ route('home.contatos') }}" class="button">CONTATE-NOS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-area pd-100 o-hi" id="service">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-s-item">
                        <div class="s-icon">
                            <span class="icon-bg"></span>
                            <span class="icon mdi mdi-music">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </div>
                        <h4>Mercado Financeiro</h4>
                        <p>São os mercados com maior potencial
                            de lucros do mundo, além de terem
                            como vantagem um mercado</p>
                        <a href="" class="border-btn">Saiba mais</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="single-s-item color-o">
                        <div class="s-icon">
                            <span class="icon-bg"></span>
                            <span class="icon mdi mdi-radio">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </div>
                        <h4>Tecnologia</h4>
                        <p>Seja em infra ou em uma de nossas squads de desenvolvimento, descubra como podemos impactar a
                            vida das pessoas através da tecnologia.</p>
                        <a href="" class="border-btn">Saiba mais</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp hidden-sm" data-wow-delay="0.4s">
                    <div class="single-s-item color-b">
                        <div class="s-icon">
                            <span class="icon-bg"></span>
                            <span class="icon mdi mdi-file-music">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </div>
                        <h4>Áreas Administrativas</h4>
                        <p>Quer ser o combustível dos times de mercado financeiro e tecnologia? Conheça nossas áreas
                            administrativas e encontre a que combina com você.</p>
                        <a href="" class="border-btn">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection