@extends('home.inc.app')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row bg-white aic">
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-left">
                    <h2>Como funciona</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-right">
                    <nav aria-label="breadcrumb">
                        <ol class="">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Como funciona</li>
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
                        <img src="{{ asset('assets/home/image/s-8-img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 align-self-center">
                    <div class="about-right">
                        <div class="title">
                            <h2>Na Êxodo Technology, <span>você é nosso sócio! Aplicando
                                    seu dinheiro e recebendo rentabilidade de até 10% ao mês, durante 12 meses..</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-area pd-100 o-hi" id="service">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-s-item">
                        <div class="s-icon">
                            <span class="icon-bg"></span>
                            <span class="icon mdi mdi-comment-processing">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </div>
                        <p>O valor aplicado para emprestimo é rentabilizado no mercado
                            de câmbio entre moedas e no mercado de índices.
                            Onde 70% do capital aplicado é separado como reserva de valor
                            e os outros 30% são direcionados para as operações diárias.
                            Diariamente, a rentabilidade realizada pelos traders da Êxodo é atualizada
                            no escritório virtual de cada sócio, podendo, no final do ciclo, sacar
                            seu rendimento mensal ou resgatar todo seu valor aplicado.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection