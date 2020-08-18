@extends('panel.client.inc.app',['activePage' => 'client.agendamentos'])

@section('content')
<section class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Agendamentos</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- content --}}
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Meus agendamentos</h3>

                            <div class="card-tools">
                                <a href="#" data-toggle="modal" data-target="#solicitar" class="btn btn-primary"><i
                                        class="nav-icon fa fa-plus"></i> Novo</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Data solicitação</th>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>E-mail</th>
                                        <th>Status</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{date('d/m/Y H:i:s', strtotime($item->created_at))}}</td>
                                        <td>{{$item->user->name}}</td>
                                        <td>{{$item->user->fone}}</td>
                                        <td>{{$item->user->email}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>
                                            <a href=""><i class="nav-icon fa fa-views"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Você ainda não realizado nenhuma solicitação
                                            para agendamento de consulta!!!</td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    {{-- end content --}}


    <!-- Modal retirada-->
    <div class="modal fade" id="solicitar" tabindex="-1" role="dialog" aria-labelledby="solicitar" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Nova solicitação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('client.agendamentos.store') }}" class="navbar-form" method="post">
                        @csrf
                        @method('post')
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div class="modal-body">
                            <div class="text-center">
                                <h4>Solicitar agendamento para consulta.</h4>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('Nome') }}</label>
                                <div class="col-sm-9">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" type="text" placeholder="Seu nome"
                                            value="{{auth()->user()->name, old('name') }}" required />
                                        @if ($errors->has('name'))
                                        <span id="email-error"
                                            class="error text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('Tefone') }}</label>
                                <div class="col-sm-9">
                                    <div class="form-group{{ $errors->has('fone') ? ' has-danger' : '' }}">
                                        <input
                                            class="form-control phone_with_ddd{{ $errors->has('fone') ? ' is-invalid' : '' }}"
                                            name="fone" type="text" placeholder="(00)0000-0000"
                                            value="{{auth()->user()->fone, old('fone') }}" required />
                                        @if ($errors->has('fone'))
                                        <span id="email-error"
                                            class="error text-danger">{{ $errors->first('fone') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('E-mail') }}</label>
                                <div class="col-sm-9">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email" type="email" placeholder="(00)0000-0000"
                                            value="{{auth()->user()->email, old('email') }}" required />
                                        @if ($errors->has('email'))
                                        <span id="email-error"
                                            class="error text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Solicitar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection