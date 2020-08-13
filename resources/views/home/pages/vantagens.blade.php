@extends('home.inc.app')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row bg-white aic">
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-left">
                    <h2>Vantagens</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-right">
                    <nav aria-label="breadcrumb">
                        <ol class="">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Vantagens</li>
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
                        <img src="{{ asset('assets/home/image/increase-9-3.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 align-self-center">
                    <div class="about-right">
                        <div class="title">
                            <h2>A equipe de tecnologia , <span>financeira que está sempre com você!</span>
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

                        <h3>Tire suas dúvidas, rentabilize o seu capital no mercado financeiro
                            e tenha mais segurança com o seu dinheiro. </h3>
                        <div class="s-icon">
                            <span class="icon-bg"></span>
                            <span class="icon mdi mdi-comment-processing">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </div>
                        <h2>Alta Rentabilidade</h2>
                        <p>Receba até 20 vezes mais do que a Poupança! Lucre seguindo os grandes
                            milionários e ganhe como os grandes investidores.</p>
                        <div class="s-icon">
                            <span class="icon-bg"></span>
                            <span class="icon mdi mdi-comment-processing">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </div>
                        <h2>Área Exclusiva do Cliente</h2>
                        <p>Acompanhe suas solicitações, dividendos, aplicações, saques, patrimônios
                            e muito mais. A ferramenta perfeita para você.</p>
                        <div class="s-icon">
                            <span class="icon-bg"></span>
                            <span class="icon mdi mdi-comment-processing">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </div>
                        <h2>Escritório Físico</h2>
                        <p>Além da área virtual, nós temos o nosso escritório físico, onde você pode
                            realizar visitas e estar acompanhando todo o trabalho da equipe. Trazendo
                            assim, transparência e tranquilidade para o cliente.</p>
                        <div class="s-icon">
                            <span class="icon-bg"></span>
                            <span class="icon mdi mdi-comment-processing">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </div>
                        <h2>Criptomoedas</h2>
                        <p>Aplicações e recebimentos via criptomoedas, tornando as transações mais rápidas
                            e seguras.</p>
                        <div class="s-icon">
                            <span class="icon-bg"></span>
                            <span class="icon mdi mdi-comment-processing">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </div>
                        <h2>Desvantagens</h2>
                        <p>DESCULPE! NÃO ENCONTRAMOS.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection