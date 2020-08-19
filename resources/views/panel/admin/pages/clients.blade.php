@extends('panel.admin.inc.app',['activePage' => 'admin.clients'])

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
                        <li class="breadcrumb-item active">Clientes</li>
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
                    @include('panel.includes.alerts')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de clientes</h3>

                            {{-- <div class="card-tools">
                                <a href="#" data-toggle="modal" data-target="#solicitar" class="btn btn-primary"><i
                                        class="nav-icon fa fa-plus"></i> Novo</a>
                            </div> --}}
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>E-mail</th>
                                        <th>Cliente desde</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->fone}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{date('d/m/Y H:i:s', strtotime($item->created_at))}}</td>
                                        <td>
                                            <a href="" title="Imprimir"><i class="nav-icon fa fa-print"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#agendar{{$item->id}}"
                                                title="Agendar"><i class="nav-icon fa fa-calendar-alt"></i>
                                            </a>

                                            <!-- Modal agendar-->
                                            <div class="modal fade" id="agendar{{$item->id}}" tabindex="-1"
                                                role="dialog" aria-labelledby="agendar{{$item->id}}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h5 class="modal-title" id="exampleModalLabel">Novo
                                                                agendamento</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.agendamentos.store') }}"
                                                                class="navbar-form" method="post">
                                                                @csrf
                                                                @method('post')
                                                                <input type="hidden" name="user_id"
                                                                    value="{{$item->id}}">
                                                                <input type="hidden" name="status" value="Aprovada">
                                                                <div class="modal-body">
                                                                    <div class="text-center">
                                                                        <h4>Agendar consultar para o cliente.</h4>
                                                                    </div>

                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">{{ __('Nome') }}</label>
                                                                        <div class="col-sm-9">
                                                                            <div
                                                                                class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                                                <input
                                                                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                                    name="name" type="text"
                                                                                    placeholder="Seu nome"
                                                                                    value="{{$item->name, old('name') }}"
                                                                                    required />
                                                                                @if ($errors->has('name'))
                                                                                <span id="email-error"
                                                                                    class="error text-danger">{{ $errors->first('name') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">{{ __('Data consulta') }}</label>
                                                                        <div class="col-sm-9">
                                                                            <div
                                                                                class="form-group{{ $errors->has('data_consulta') ? ' has-danger' : '' }}">
                                                                                <input
                                                                                    class="form-control date{{ $errors->has('data_consulta') ? ' is-invalid' : '' }}"
                                                                                    name="data_consulta" type="date"
                                                                                    placeholder="00/00/0000"
                                                                                    value="{{$item->data_consulta, old('data_consulta') }}"
                                                                                    required />
                                                                                @if ($errors->has('data_consulta'))
                                                                                <span id="email-error"
                                                                                    class="error text-danger">{{ $errors->first('data_consulta') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">{{ __('Horário') }}</label>
                                                                        <div class="col-sm-9">
                                                                            <div
                                                                                class="form-group{{ $errors->has('horario') ? ' has-danger' : '' }}">
                                                                                <input
                                                                                    class="form-control date{{ $errors->has('horario') ? ' is-invalid' : '' }}"
                                                                                    name="horario" type="time"
                                                                                    placeholder="00:00"
                                                                                    value="{{$item->horario, old('horario') }}"
                                                                                    required />
                                                                                @if ($errors->has('horario'))
                                                                                <span id="email-error"
                                                                                    class="error text-danger">{{ $errors->first('horario') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">{{ __('Observação') }}</label>
                                                                        <div class="col-sm-9">
                                                                            <div
                                                                                class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                                                                <textarea name="content"
                                                                                    class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}">
                                                                                </textarea>
                                                                                @if ($errors->has('content'))
                                                                                <span id="content-error"
                                                                                    class="error text-danger">{{ $errors->first('content') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cancelar</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Agendar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Nenhum cliente encontrado!!!</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $data->links() }}
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    {{-- end content --}}
</section>
@endsection