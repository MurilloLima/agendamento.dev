@extends('panel.admin.inc.app',['activePage' => 'admin.index'])

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center"><br>
                <img src="{{ asset('img/logo.png') }}" alt="">
                <h1>Bem vindo!</h1>
                <p>Sistema de agendamento de consultas</p>
            </div>
        </div>
    </div>
</section>
@endsection