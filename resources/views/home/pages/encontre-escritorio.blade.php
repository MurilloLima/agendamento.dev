@extends('home.inc.app')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row bg-white aic">
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-left">
                    <h2>Encontre um escritrório</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-right">
                    <nav aria-label="breadcrumb">
                        <ol class="">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Encontre um escritrório</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-area pd-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 offset-lg-1 align-self-center">
                <div class="contact-map">
                    <h2>Venha nos visitar!</h2>
                    <span>Rua Vereador Marinho Hemetério Oliveira, N°853, Sl 501, Pacaembu - Queimados/RJ. </span>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1840.0592262738296!2d-43.55841269297917!3d-22.723838255863676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x995c7eefb9cfcb%3A0x89252dc666beb9b2!2sR.%20Ver.%20Marinho%20Hemeterio%20Oliveira%2C%20853%20-%20501%20-%20Vila%20Nascente%2C%20Queimados%20-%20RJ%2C%2026323-360!5e0!3m2!1spt-BR!2sbr!4v1595286617241!5m2!1spt-BR!2sbr"
                        width="940" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection