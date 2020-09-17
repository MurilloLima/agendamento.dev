@extends('panel.client.inc.app',['activePage' => 'client.index'])

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center"><br>
                <img src="{{ asset('img/logo.png') }}" alt="">
                <h1>Bem vindo!</h1>
                <p>Sistema de agendamento de consultas</p>
                <p>Mentenha sempre seus dados atualizado! clique no botão abaixo para atualizar.</p>
                <a href="{{ route('client.profile') }}" class="btn btn-warning btn-lg">Atualizar formulário</a>
            </div>
        </div>
    </div>
</section>
@endsection