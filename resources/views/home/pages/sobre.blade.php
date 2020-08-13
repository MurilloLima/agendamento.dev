@extends('home.inc.app')
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="row bg-white aic">
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-left">
                    <h2>Sobre a Exôdo</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-right">
                    <nav aria-label="breadcrumb">
                        <ol class="">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.html">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sobre a Exôdo</li>
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
                            <h2>A Êxodo Technology, <span>especializada em
                                    locação de robôs traders.</span></h2>
                            <p>
                                A Êxodo Technology é um projeto
                                focada em novas tendências
                                tecnológicas para o mercado
                                financeiro, especializada em consultoria financeira
                                e locação de robôs traders.
                                Contamos com os melhores
                                programadores e robôs de maior custo
                                benefício do mercado, tendo em
                                evidência o BOT ÊXODO.
                                Nossos produtos passaram por meses de
                                testes e foram aprovados nas mais
                                adversas situações do mercado, tendo
                                êxito em todos os casos.</p>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="row">
                            <div class="col-md-7 align-self-center">
                                <p>Obtenha sua solução completa</p>
                                <h5>Procurando nossa ajuda? </h5>
                            </div>
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
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title">
                        <h2>Mercado cambial e criptomoedas</span></h2>
                        <p>São os mercados com maior potencial
                            de lucros do mundo, além de terem
                            como vantagem um mercado. </p>
                    </div>
                </div>
            </div>
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
                        <h4>Inovador</h4>
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
                        <h4>Disruptivo</h4>
                        <p>São os mercados com maior potencial
                            de lucros do mundo, além de terem
                            como vantagem um mercado</p>
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
                        <h4>Mercado Global</h4>
                        <p>São os mercados com maior potencial
                            de lucros do mundo, além de terem
                            como vantagem um mercado</p>
                        <a href="" class="border-btn">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection